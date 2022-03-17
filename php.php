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

		<div class="div one">
			<?php echo '<div class="span">Test 1, string #14</div>';

				$book = new Class {
					public $createdAt = null;
				};
				var_dump($book?->createdAt?->getDate());
			?>
		</div>


		<div class="div two">
			<?php echo '<div class="span">Test 2, string #25</div>';

				$a = array(1, 5, 8);
				$b = array(3, 7, 2);

				if ($a >$b ) {
					echo "string1";
				} elseif ($a < $b) {
					echo "string2";
				} else {
					echo "none";
				} 

				$a = 1;
				$b = 3;
				echo "string".$a + $b;


				$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
				foreach ($arr as $val) {
				    if ($val == 'stop') {
				        break;    /* You could also write 'break 1;' here. */
				    }
				    echo "$val<br />\n";
				}
			?>
		</div>

		<div class="div tree">
			<?php echo '<div class="span">Test 3, string #54</div>';

				// ЗАКАНЧИВАЕТ ВЫПОЛНЕНИЕ КОДА

				// function exception_handler($exception) {
				//   echo "Неперехваченное исключение: " , $exception->getMessage(), "\n";
				// }

				// set_exception_handler('exception_handler');

				// throw new Exception('Неперехваченное исключение');
				// echo "Не выполнено\n";
		?>
		</div>

		<div class="div four">
			<?php echo '<div class="span">Test 4, string #68</div>';

			$a = array();
			echo $a[1] = $a[] = $a[2] = true;
		?>
		</div>

		<div class="div">
			<?php echo '<div class="span">Test 5, string #78</div>';

			$foo = 'value';
			echo ($foo) ?: 'no value';
		?>
		</div>

		<div class="div">
			<?php echo '<div class="span">Test 6, string #68</div>';
			echo '<div class="span">Деструктуризация массивов в PHP. Присваиваем массив сразу нескольким переменным.</div>';
			$start = microtime(true);

			$users = [
				[1, 'Art1', 'Rey1'],
				[2, 'Art2', 'Rey2'],
				[3, 'Art3', 'Rey3'],
			];

			// [$id, $name, $email] = $users[1];

			foreach ($users as [$id, $name, $email]) {
				echo 'Name: ' . $name;
				echo $id;
			}
		

			$time = microtime(true) - $start;
	        echo "<br \><---------------Время работы скрипта: ".$time ;
		?>
		</div>






<?php
// END
?>
	</div> 
</body>
</html>



