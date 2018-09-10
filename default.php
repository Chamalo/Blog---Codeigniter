<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title><?php echo $titre; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/default.css" />
		<?php foreach($css as $url): ?>
			<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />
		<?php endforeach; ?>
	</head>

	<body>

		<div class="wrap">
            <header>
            	<a href="/"><img src="/assets/images/logo.png" alt="logo" /></a>
            </header>

			<nav>
				<ul>
					<li class="myButton"><a href="/">Accueil</a></li>
					<li class="myButton"><a href="/index.php/account">LOGIN/SIGNUP</a></li>
				</ul>
			</nav>

			<marquee>Flash News : Test</marquee>

			<section>
				<?php echo $output; ?>
			</section>

			<?php foreach($js as $url): ?>
				<script type="text/javascript" src="<?php echo $url; ?>"></script>
			<?php endforeach; ?>

             <footer>
        		<p>Copyright Chamalo Tout droits réservés ; Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </footer>
		</div>
 
	</body>
</html>
