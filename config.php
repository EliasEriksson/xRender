<?php

error_reporting(-1);
ini_set("display_errors", 1);


session_start();

$rootURL = "/xRender";
$fileSystemRoot = $_SERVER["DOCUMENT_ROOT"];
$GLOBALS["rootURL"] = $rootURL;
$GLOBALS["fileSystemRoot"] = $fileSystemRoot;

