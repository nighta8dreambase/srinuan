<?php
/*
 * Template Name: Landing Page
 */

get_header(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/cover.css" rel="stylesheet">
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">QueryBox</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="inner cover">
            <h1 class="cover-heading">QueryBox</h1>
            <p class="lead">Simple Facebook Page Analytics</p>
            <p class="lead">
              <button href="#" id="fbLogin" class="btn btn-lg btn-success">Login Using Facebook Now</button>
            </p>
          </div>
          <div class="row">
            <div class="col-lg-12">
                  <div class="fb-like" 
                     data-share="true" 
                     data-width="450" 
                     data-show-faces="true">
                </div>
            </div>
          </div>
          <div class="mastfoot">
            <div class="inner">
              <p>
              Copy Right 2015
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
    <script>
      function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
      }


      function fbLogin () {
        FB.login(function(response) {
           // handle the response
           console.log(response);
           //alert("hi");
           //testAPI();
           window.location = "http://localhost:8000/index.php/app/";
        }, {scope: 'manage_pages,publish_pages,email'});
      }
     // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          testAPI();
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into this app.';
        } else {
          // The person is not logged into Facebook, so we're not sure if
          // they are logged into this app or not.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into Facebook.';
        }
      }
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '',
          xfbml      : true,
          version    : 'v2.4',
          cookie     : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
      $(document).ready(function() {
        $("#fbLogin").click(fbLogin);
      });
      </script>
  </body>
</html>
