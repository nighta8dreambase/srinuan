# Php Slim App in WordPress
A Slim Php app in a WordPress theme

## This is an experiment using Php Slim Framework within a WordPress Theme
The magic is found in index.php. I found out that instead of using the usual WordPress stuff in 
index.php, i could simply load Slim into index.php and start using Slim from there.


## Usage
- Copy and paste this entire folder into /themes folder
- activate the theme
- go to WordPress settings and use any of the pretty urls.


## Using Slim in WordPress theme
Look through index.php and /app and you will notice that index.php does bulk of the magic:
- you can use composer, so you can use 'vendor/autoload.php' to load the vendor libraries.
- you can also set the template folder which you want to use via Slim
```
// here I am using get_template_directory to get the location of my theme and appended /app to fully build out the directory.
$directory =  get_template_directory()."/app";
```
- If you are feeling adventurous, you can also use other database, such as MongoDB in this example. To use MongoDB in your views, you can simple do this:
```
$app->post('/app/create', function() use ($app, $twig, $assets, $MongoUser) {
	// your code here
});
```


### Gotchas
- if you use the default 404.php WordPress file in this theme, Slim will not load


That's all for now.