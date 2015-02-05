<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>ОЛОЛОША TEAM</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://vitaly/ball/css/bootstrap.css">
        <script src="http://vitaly/ball/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="http://vitaly/ball/css/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
                <div id="name">
                <p>
                    <a href="/login/exit/">выход</a><br/>
                    <?
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if(!empty($_SESSION['session_username'])){
                    echo $_SESSION['session_username'];
                    }?>
                </p>
                </div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Услуги</a></li>
						<li><a href="/portfolio">Портфолио</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
                        <li><a href="/login">Вход</a></li>
                        <li><a href="/registration">Регистрация</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a>
                            <ul>
                            <li><a href="/main/content/php">PHP</a></li>
                            <li><a href="/main/content/css">CSS</a></li>
                            <li><a href="/main/content/mvc">MVC</a></li>
                            </ul>
                            </li>
							<li><a href="/services">Услуги</a></li>
							<li><a href="/portfolio">Портфолио</a></li>
							<li class="last"><a href="/contacts">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">skypeid: devilborisov</li>
						<li class="last">email: diavol8@yandex.ru</li>
					</ul>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">ОЛОЛОША TEAM</a> &copy; 2012</a>
		</div>
	</body>
</html>