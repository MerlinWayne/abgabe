<?php
$path = 'http://www.ipbwiki.de/';

$redirect_url = $path . 'Special:Search?search=' . $_GET['search'] . '&go=Go';
@header( "Location: ".$redirect_url );
?>

