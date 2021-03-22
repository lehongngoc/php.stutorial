<?php
function Palindrome($MyString) {
  $revString = strrev($MyString);
  if ($revString ==strtolower ($MyString){
    echo $MyString." is a Palindrome string."."<br>";
  }
  else{
    echo $MyString." is not a Palindrome string."."<br>";
  }
}

Palindrome("RAda");
Palindrome("rubber");
Palindrome("malayalam");
Palindrome(" toot");
?>