<?php
include __DIR__ . "/../../config.php";

echo json_encode([
    [
        "email" => "john@doe.com",
        "firstName" => "John",
        "lastName" => "Doe",
        "about" => "I am John Doe and I am rendered with JavaScript!"
    ],
    "$rootURL/htmlTemplates/userTemplate.html"
], JSON_UNESCAPED_UNICODE);