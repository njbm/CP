<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}


$docroot = $_SERVER['DOCUMENT_ROOT'];
$datasource = $docroot.DIRECTORY_SEPARATOR."datasource".DIRECTORY_SEPARATOR;
$partials = $docroot.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;


$portal_partials = $docroot.DIRECTORY_SEPARATOR.'portal'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$webportal = "http://seip12.pondit.com".DIRECTORY_SEPARATOR;

$datasource_driver = "JSON"; // "Database, XML(optional), COOKIE/Session (learning only)