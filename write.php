<?php
    $text = file_get_contents('text.php');
    $name = strtr($_POST["name"], "<", "＜");
    $name = strtr($name, ">", "＞");
    $get = strtr($_POST["lore"], "<br>", "$");
    $get = strtr($get, ">", "＞");
    $get = strtr($get, "<", "＜");
    $get = strtr($get, "$", "<br>");
    nl2br($get, false);
    $kakikaki = '<p><font size="5">'.$name.'</font><br>'.$get.'</p>'.$text;
    file_put_contents("text.php", $kakikaki);
?>
<meta http-equiv="refresh" content="0;URL=index.php">
