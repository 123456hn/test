<?php
 
 // servername => localhost
 // username => root
 // password => empty
 // database name => staff
 $conn = mysqli_connect("localhost", "root", "", "shopping_db");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all 5 values from the form data(input)
 $first_name =  $_REQUEST['first_name'];
 $contact_number = $_REQUEST['contact_Number'];
 $address = $_REQUEST['address'];
 $email = $_REQUEST['email'];
 
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO form  VALUES ('$first_name',
     '$contact_number','$email','$address')";
  
 if(mysqli_query($conn, $sql)){
     echo "<center>"."<h3>Thanks for your order."."<br>"."</center>"
         ."<center>"."<button >"."<a href='http://localhost/final-project'>"." Go back to home"."</a>"."</button>"."</center>"."</h3>";
 } else{
     echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 ?>
