<?php




/*  the aim of this function is to clean user data entered via a unspecified user form
    It does this by using a FOR EACH command on the global variable $_POST and stripping out special characters 
    and backslashes that might represent a script that would "inject" into the server.

    Please improve this script by suggesting additions or more efficeint ways of running the data.
    If there are errors please correct, I am new to PHP. 
*/

 function cleanUserData (){
                foreach ($_POST as $stringtoClean)
                {

                
                  $stringtoclean = implode("",explode("\\",$stringtoclean));
                  $stringtoclean = implode("",explode("//",$stringtoclean));
                  $stringtoclean = str_replace("/","",$atringtoclean);
                  $stringtoclean = htmlspecialchars(stripslashes(trim($stringtoclean)));
                }
              }
           




?>
