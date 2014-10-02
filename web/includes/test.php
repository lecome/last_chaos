<?php if($route) { ?>
	<strong>Цель:</strong>
	<pre><?php var_dump($route->getTarget()); ?></pre>

	<strong>Параметры:</strong>
	<pre><?php var_dump($route->getParameters()); ?></pre>
<?php } else { ?>
	<pre>Путь не верный.</pre>
<?php } ?>