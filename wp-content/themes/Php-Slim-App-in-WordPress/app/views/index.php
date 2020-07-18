<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>App Theme</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{static_url}}/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="{{static_url}}/css/styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
        <div class="box">
          <div class="column col-sm-12 col-xs-12 col-lg-12" id="main">
              <div class="navbar navbar-blue navbar-static-top">  
                  <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand logo">App Theme</a>
                  </div>
                  <nav class="collapse navbar-collapse" role="navigation">
                  <form class="navbar-form navbar-left">
                      <div class="input-group input-group-sm col-lg-10">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>
                  </form>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="#"><i class="glyphicon glyphicon-home"></i> {{user}}</a>
                    </li>
                    <li>
                      <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                    </li>
                    <li>
                      <a href="#"><span class="badge">badge</span></a>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                        <li><a href="">More</a></li>
                      </ul>
                    </li>
                  </ul>
                  </nav>
              </div>
            

          </div>
        </div>
    </div>


    <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              Update Status
            </div>
            <div class="modal-body">
              <form class="form center-block">
                <div class="form-group">
                  <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <div>
                <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                <ul class="pull-left list-inline">
                  <li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li>
                  <li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li>
                  <li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li>
                </ul>
              </div>  
            </div>
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="{{static_url}}/js/bootstrap.min.js"></script>
    <script src="{{static_url}}/js/scripts.js"></script>
  </body>
</html>