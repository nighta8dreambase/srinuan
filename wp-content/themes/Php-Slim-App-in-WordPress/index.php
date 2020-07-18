<?php
require_once 'vendor/autoload.php';
use \Slim\Slim;
use \Slim\Extras\Middleware\CsrfGuard;
$directory =  get_template_directory()."/app";
$assets = get_template_directory_uri();
$loader = new Twig_Loader_Filesystem($directory);
$twig = new Twig_Environment($loader);
$twig->addExtension(new Twig_Extensions_Extension_I18n());

// here I can use MongoDB if i want to. very flexible.
$mongo = new MongoClient("mongodb://localhost/?journal=true&w=1&wTimeoutMS=20000");
$mongodb = $mongo->react_blog;
$MongoUser = $mongodb->users;


$app = new \Slim\Slim();

$app->add(new \Slim\Middleware\SessionCookie(array(
  'expires' => '20 minutes',
  'path' => '/',
  'domain' => null,
  'secure' => false,
  'httponly' => false,
  'name' => 'slimblog_dev_session',
  'secret' => 'YOU_ARE_SUCH_A_COOL_KID',
  'cipher' => MCRYPT_RIJNDAEL_256,
  'cipher_mode' => MCRYPT_MODE_CBC,
  'date.timezone' => 'UTC'
)));
$app->add(new CsrfGuard());


$app->get('/', function() use ($app, $twig, $assets) {
  $data = array(
    'user'=>'testuser',
    'test'=>'hahahahha',
    'static_url'=>$assets
  );  
  if (isset($_SESSION['app_id'])) {
    echo $twig->render('views/index.php', $data);
  }
  else {
    echo "You gonna login first";
  }
});


$app->get('/app', function() use ($app, $twig, $assets) {
  $data = array(
    'user'=>'testuser',
    'test'=>'hahahahha',
    'static_url'=>$assets
  );  
  if (isset($_SESSION['app_id'])) {
    echo $twig->render('views/index.php', $data);
  }
  else {
    echo "You gonna login first bro";
  }
});


$app->get('/app/login', function() use ($app, $twig, $assets) {
  
  $request = $app->request();
  $action = $request->params('action');
  $data = array(
    'user'=>'testuser',
    'test'=>'hahahahha',
    'static_url'=>$assets,
    'action'=>$action,
    'csrf_key'=>$app->view()->getData('csrf_key'),
    'csrf_token'=>$app->view()->getData('csrf_token')
  );
  echo $twig->render('views/login.php', $data);
});



$app->post('/app/login', function() use ($app, $twig, $assets) {
  $check_user = $MongoUser->findOne(array(
    '$and' => array(
        array('email' => $slim->request()->post('email')),
        array('password' => $slim->request()->post('password'))
    )
  ));

  if ($check_user) {
    // set the session here
    if (!isset($_SESSION)) {
      session_start();
    }
    # nice technique : http://stackoverflow.com/questions/19068363/storing-and-retrieving-an-array-in-a-php-cookie
    $dataArray = array('user' => $new_user,'message'=>"User created sucessfully");
    $response = json_encode($dataArray);
    echo $response;
  }
  else {
    $app->halt(401, "Credentials incorrect or user dont exist.");
  }
});


$app->post('/app/create', function() use ($app, $twig, $assets, $MongoUser) {
  $_user = array(
    '_id'=>uniqid(),
    'email'=>$app->request()->post('email'),
    'password'=>$app->request()->post('password')
  );
  $new_user = $MongoUser->save($_user);
  if ($new_user) {
    // redirect to login page
    $dataArray = array('user' => $new_user,'message'=>"User created sucessfully");
    //$response = json_encode($dataArray);
    //echo $response;
    if (!isset($_SESSION)) {
      session_start();
    }
    $cookie_data = json_encode($new_user, true);
    $_SESSION['app_id'] = $cookie_data;
    $app->redirect('/app');
  }
  else {
    $app->halt(401, "User sign up fail.");
  }
});

/*
$app->get('/app/create', function() use ($app, $twig, $assets) {
  // so here I need to call the API.
  echo "hi";
});
*/

// this is used as my default function
$app->notFound(function () use ($app, $twig, $assets) {
  $data = array(
    'user'=>'testuser',
    'test'=>'hahahahha',
    'static_url'=>$assets
  );
  echo $twig->render('views/404.php', $data);
});

$app->run();