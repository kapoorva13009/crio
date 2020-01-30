<?php 


require_once("../crud/component.php");
require_once("../crud/operation.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMPLOYEE</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
<div class="container text-center ">
    <h1 class="py-4 bg-dark text-light rounded">Employee Details</h1>
 <div class="d-flex justify-content-center">
     <form action="" method="post" class="w-50">
         <div class="py-2">
         <div class="col-auto">
             <legend>Name :</legend>   
       <?php inputElement("text","name","","Name","inlineFormInputGroup"); ?>      
            
      
    </div>
    <fieldset data-role="controlgroup">
      <legend>Choose your gender :</legend>
      <div class="row">
        <div class="col">
        <label for="male">Male</label>
       <?php inputElement("checkbox","gender","m","","male"); ?>
        </div>
        <div class="col"> 
        <label for="female">Female</label>
        <?php inputElement("checkbox","gender","f","","female"); ?>
        </div>
      </div>  
 
      </fieldset>
         <div class="pt-2">
           <div class="col-auto">
         <legend>Date Of Birthday :</legend>
        <?php inputElement("date","dob","","",""); ?>
               </div>
         </div>
         <div class="pt-2">
             <div class="col-auto">
             <legend>Mobile Number :</legend>
             <?php inputElement("tel","mobile_no","","Do not add +91 or 0","inlineFormInputGroup"); ?>
             </div>
         
         </div>
         <div class="pt-2">
         <div class="col-auto">
         <legend>Email ID :</legend>
      
        <?php inputElement("email","email_id","","@Emailid","inputEmail4"); ?> 
    </div>
         </div>
       <div class="pt-2"> 
        
       <legend>Choose Your Department :</legend> 
       
         <select name="dis_parent" id="dis_parent">
	  <option selected>Select</option>
	  <option value="0">None</option>
      
      </select>
       </div>
       

       <div class="pt-2">     
          <?php   buttonElement("btn-create","btn btn-success","Create","create",""); ?>
       </div>

       

     </form>
 </div>

</div>

</main>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
</body>
</html>