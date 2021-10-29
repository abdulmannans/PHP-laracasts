<?php

function dd($data){

    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';

}

function nightClub($age) : bool{
   if($age>=21){
       return true;
   }
   return false;
}
?>