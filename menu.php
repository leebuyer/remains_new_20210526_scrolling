<?php
//preg_match() 函數用於進行正則表達式匹配，成功返回 1 ，否則返回 0 。
$index=(preg_match("/index.php/", $_SERVER['REQUEST_URI']))? "class='active'":"";
$tree=(preg_match("/tree.php/", $_SERVER['REQUEST_URI']))? "class='active'":"";
$tiger=(preg_match("/tiger.php/", $_SERVER['REQUEST_URI']))? "class='active'":"";


$navbar="

<li class='nav-item' $tree><a href='tree.php' class='nav-link'>榕樹下</a></li>
<li class='nav-item' $tiger><a href='tiger.php' class='nav-link'>虎頭山公園</a></li>
<li class='nav-item' $index><a href='index.php' class='nav-link'>大園尖山</a></li>
<li class='nav-item' $index><a href='index.php' class='nav-link'>大園尖山考古展示館</a></li>
<li class='nav-item' $index><a href='index.php' class='nav-link'>桌遊教學資源</a></li>
"
;

?>