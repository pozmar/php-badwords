<?php
$badword = $_GET['badword'];
$text = 'Oggi è stata una giornata del cavolo';
$text = str_replace($badword, '***', $text);
?>
<h3><?php echo $text ?></h3>