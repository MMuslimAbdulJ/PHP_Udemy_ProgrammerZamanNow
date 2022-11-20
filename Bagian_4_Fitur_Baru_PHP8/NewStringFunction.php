<?php 

var_dump(str_contains("Muhammad Muslim Abdul Jabbaar", "Muslim"));
var_dump(str_contains("Muhammad Muslim Abdul Jabbaar", "Muhammad"));
var_dump(str_contains("Muhammad Muslim Abdul Jabbaar", "Danny"));

var_dump(str_starts_with("Muhammad Muslim Abdul Jabbaar", "Muslim"));
var_dump(str_starts_with("Muhammad Muslim Abdul Jabbaar", "Muhammad"));
var_dump(str_starts_with("Muhammad Muslim Abdul Jabbaar", "Danny"));

var_dump(str_ends_with("Muhammad Muslim Abdul Jabbaar", "Muslim"));
var_dump(str_ends_with("Muhammad Muslim Abdul Jabbaar", "Muhammad"));
var_dump(str_ends_with("Muhammad Muslim Abdul Jabbaar", "Danny"));

?>