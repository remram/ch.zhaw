<?php

function __autoload($classname) {
    include_once("classes/$classname.php");
}
?>
