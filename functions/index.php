<?php 

require 'functions.php';

$animals = ['elephant', 'cat', 'mouse'];

if(nightClub(20)){
    echo "You are Allowed";
}else{
    echo "You are not Allowed";
}

dd($animals);




require 'index-view.php';
?>