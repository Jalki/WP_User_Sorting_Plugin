<?php

//This is actual code for sorting users in groups alphabetically and loads data about user

fetch('https://jsonplaceholder.typicode.com/users')
  .then(response => response.json())
  .then(json => console.log(json))

$User_List = array  (
    array("Username"),
    array("Birth_Date"),
    array("Location"),
    array("ID")
);


?>