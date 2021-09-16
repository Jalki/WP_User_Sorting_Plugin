<?php

//This is actual code for sorting users in groups alphabetically and loads data about user

$url = 'https://jsonplaceholder.typicode.com/users';

$data = file_get_contents($url);

$characters = json_decode($data);

echo $characters;


?>