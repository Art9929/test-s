<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8";>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Test`s</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<div class="first">
		<?php
		$number = 1;

		function r() {
			  $t = 1;
			  return $t;
		}

		$a = array(r(), r());

			// Цикл
			foreach ($a as $b) {
				?>
				<div class="div one-<?= $number ?>">
					<?php  echo $b; ?>
				</div>	

			<?php
				++$number;
			}
		?>
	</div>
