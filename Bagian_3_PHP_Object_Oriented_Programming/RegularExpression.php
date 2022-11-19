<?php 

// $pattern = "/mus|abbaar|slim|dul/i";
// $subject = "Muhammad Muslim Abdul Jabbaar";
// $matches = array();
// $result = preg_match_all($pattern, $subject, $matches);
// echo "Match sebanyak : $result" . PHP_EOL;
// var_dump($matches);

$pattern = "/anying|goblog|setan|babi/i";
$replacement = "***";
$subject = "kita tidak boleh bilang anying dan goblog ke orang lain, apalagi bilang setan dan babi";
$result = preg_replace($pattern, $replacement, $subject);
// var_dump($result);
echo $result . PHP_EOL;

// $pattern = "/[\s,-]/i";
// $subject = "Muhammad Muslim-Abdul,Jabbaar";
// $result = preg_split($pattern, $subject);
// var_dump($result);
?>