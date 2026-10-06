<?php
// This script is the entry point for the PHP minifier example.
// It loads the minifier class and processes the current source file.
include_once("PHPMinifier.php");

// Instantiate the minifier and compress the target PHP file.
$obj = new PHPMinifier();
$obj->apply("PHPMinifier.php");
?>
