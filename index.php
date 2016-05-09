<?php
	$scripts = [
        'node_modules/angular/angular.min.js',
        'node_modules/angular-route/angular-route.min.js'
	];
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Diego Cano">
	<base href="<?php $base = dirname($_SERVER['PHP_SELF']) === '/' ? '/' : dirname($_SERVER['PHP_SELF']) . '/'; echo $base ?>"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body ng-app="">
	<section ng-view>

	</section>

	<?php
	    foreach ($scripts as $script) {
            echo "<script src='$script'></script> \n";
        }
	?>
</body>
<html>
