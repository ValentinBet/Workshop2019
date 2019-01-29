<?php
///**
// * Created by PhpStorm.
// * User: VBETRANCOURT
//* Date: 21/03/2018
///* Time: 09:33
//*/

session_start();
//include "./contactform.js";
//


$nav=1;
if ( (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))  ){
    echo ($_POST['message']) ;
}
else{
    echo "non";
}