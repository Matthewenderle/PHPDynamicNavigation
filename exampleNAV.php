<?php
require_once 'nav.php';
$nav = nav::getInstance ();
?>

<div>
	<ul>
		<?php $nav->nav(__FILE__); ?> 
	</ul>
	<hr class="noscreen" />
</div>
