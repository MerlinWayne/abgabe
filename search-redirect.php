<?php
//$path = 'http://www.ipbwiki.com/';

$redirect_url = $path . 'Special:Search?search=' . $_GET['search'] . '&go=Go';
@header( "Location: ".$redirect_url );
?>

