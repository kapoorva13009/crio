<?php

function inputElement($ty,$name,$value,$placeholder,$id){
 $ele = "     
     <input type='$ty' name='$name' value='$value' class=\"form-control\" id='$id' placeholder='$placeholder'> 
     ";
     echo $ele;
    
    }

function buttonElement($btnid,$styleclass,$text,$name,$attr){
   $btn ="
   <button  name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>    
   ";
   echo $btn;

}    