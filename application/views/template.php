<!doctype html>
<html lang="<?php echo I18n::$lang ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>
	<?php foreach ($styles as $file)
	echo HTML::style($file), PHP_EOL 
	?>
	
</head>
<body>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          <?=HTML::anchor(URL::site("/"),"Tavern Stories",array("class"=>"brand"))?>
          <div class="nav-collapse">
            <ul class="nav">
              <li <?=Request::current()->controller() == "login"?"class='active'":""?>>
              	<?=HTML::anchor(Route::url("default",array("controller"=>"login","action"=>"index")),"Login")?>
              </li>
              <li <?=Request::current()->controller() == "register"?"class='active'":""?>>
              	<?=HTML::anchor(Route::url("default",array("controller"=>"register","action"=>"index")),"Register")?>
              </li>
              <li <?=Request::current()->controller() == "about"?"class='active'":""?>>
              	<?=HTML::anchor(Route::url("default",array("controller"=>"about","action"=>"index")),"About")?>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container">
		<?php echo $content ?>
	</div>

	<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
</body>
</html>