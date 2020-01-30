<?php

require_once("db.php");
require_once("component.php");

$con= Createdb();

if(isset($_POST['btn-create'])){
    createData();
}


function createData(){
$empname = textboxValue("name");
// $empgender = textboxValue("gender");
// $empdob = textboxValue("dob");
$empmobile =textboxValue("mobile_no");
$empemail =textboxValue("email_id");
// $empdepartment = textboxValue("department");

if($empname && $empmobile && $empemail){
   
  $sql = "INSERT INTO employeedata(name,mobile_no,email_id)
  VALUES('$empname','$empmobile','$empemail')";
  if(mysqli_query($GLOBALS['con'],$sql)){
         echo "Record Successfully Inserted...!";
  }else{
      echo "Error";
  }
}else{
    echo "provide data";
}
}

function textboxValue($value){
  $textbox = mysqli_real_escape_string($GLOBALS['con'],$_POST[$value]);
  if(empty($textbox)){
      return false;
  }else{
      return $textbox;
  }
}

  
     
   

 