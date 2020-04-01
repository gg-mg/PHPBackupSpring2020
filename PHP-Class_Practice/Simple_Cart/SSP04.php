<?php
// Start the session
session_start();

// Set session variables
$_SESSION["secretWord"] = "Oranges";
$_SESSION["secretWord_hint"] = "Fruit";
$_SESSION["secretWord_array"] = str_split($_SESSION["secretWord"]);
$_SESSION["secretWord_len"] = strlen($_SESSION["secretWord"]);;
$_SESSION["guess_secretWord"] = str_repeat("_", 7);
$_SESSION["guess_count"] = 0;
$_SESSION["guess_count_wrong"] = 0;
$_SESSION["guess_tracked"] = 0;
$_SESSION["guess_image"] = 0;
$_SESSION["guess_letter"] = "";
$_SESSION["game_lastGuess"] = "cat";
$_SESSION["game_started"] = "green";

if ( isset($_SESSION["secretWord"]) ) {
    $secretWord = $_SESSION["secretWord"];
  }
if ( isset($_SESSION["secretWord_hint"]) ) {
    $secretWord_hint = $_SESSION["secretWord_hint"];
  }
  if ( isset($_SESSION["secretWord_array"]) ) {
    $secretWord_array =$_SESSION["secretWord_array"];
  }
if ( isset($_SESSION["secretWord_len"]) ) {
    $secretWord_len = $_SESSION["secretWord_len"];
  }
  if ( isset($_SESSION["guess_secretWord"] ) ) {
    $guess_secretWord = $_SESSION["guess_secretWord"] ;
  }
if ( isset($_SESSION["guess_count"]) ) {
    $guess_count = $_SESSION["guess_count"];
  }
  if ( isset($_SESSION["guess_count_wrong"] )) {
    $guess_count_wrong = $_SESSION["guess_count_wrong"];
  }
if ( isset($_SESSION["guess_tracked"]) ) {
    $guess_tracked = $_SESSION["guess_tracked"];
  }
  if ( isset($_SESSION["guess_image"] ) ) {
    $guess_image = $_SESSION["guess_image"] ;
  }
if ( isset($_SESSION["guess_letter"]) ) {
    $guess_letter= $_SESSION["guess_letter"];
  }
  if ( isset($_SESSION["game_lastGuess"] )) {
    $game_lastGuess= $_SESSION["game_lastGuess"];
  }
if ( isset($_SESSION["game_started"] ) ) {
    $game_started = $_SESSION["game_started"] ;
  }


  



print_r ($_SESSION["secretWord_array"]);
echo str_repeat("_", 7);
echo $secretWord_len ;
?>

