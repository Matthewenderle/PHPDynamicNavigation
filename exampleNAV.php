<?php 
require_once 'nav.php';
$nav = nav::getInstance();
?>

<div id="tray">

        <ul>
			<?php $nav->nav(__FILE__); ?> 
        </ul>

    <hr class="noscreen" />
    </div> <!-- /tray -->