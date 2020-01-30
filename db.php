<?php

function Createdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="employeedetails";

    $con= mysqli_connect($servername,$username,$password);
    if(!$con){
       die("Connection Failed :" . mysqli_connect_error());

    }

   $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
   
   if(mysqli_query($con,$sql)){
    $con= mysqli_connect($servername,$username,$password,$dbname);
  
   $sql = "
         CREATE TABLE IF NOT EXISTS employeedata(
           sr_no INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
           name VARCHAR(25) NOT NULL,
           gender CHAR(1) NOT NULL,
           dob DATE NOT NULL,
           mobile_no INT(10) UNSIGNED NOT NULL,
           email_id VARCHAR(100) NOT NULL,
           department VARCHAR(100) NOT NULL  

         );
   ";

   if(mysqli_query($con,$sql)){
       return $con;
   }else{
       echo "cannot create table..!";
   }


}else{
       echo "Error While Creating Database...!". mysqli_error($con);
   }
}