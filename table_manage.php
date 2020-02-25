<?php
/*
This file has some functions. which is for creating table of users of company staffs.
Functions are used to create user table to manage staffs, and registerd a user "km585" with password "kenta10".
*/

require("../utils/connection.php");

$user = "km585";
$pass = "kenta10";


addUser($conn,$user,$pass);
getUsers($conn);
exit();


function addUser($conn, $user, $pass){
  //This function is for adding a user to a table.
  $rand_num = rand(100,1000);
  $symbol = "!#$%&@?";
  $rand_sym= str_shuffle($symbol);
  $salt= str_shuffle($rand_num.$rand_sym);
  $hashed_pass = md5($pass.$salt);


  $sql = "INSERT INTO users (id, username, password, salt)
  VALUES (NULL , '$user' , '$hashed_pass', '$salt')";

  if ($conn->query($sql) === TRUE)
  {
      echo "New account created!<br />";
  }
  else
  {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
  }
}

function getUsers($conn){
  //This function is for getting user information.
  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {

      while($row = $result->fetch_assoc())
      {
          echo $row["username"]. "<br>".
          $row["password"] ;
      }
  }
  else
  {
      echo "0 results";
  }

}


function deleteUsers($conn){
  // Function to delete a record
    $sql = "DELETE FROM users WHERE id=1";

    if ($conn->query($sql) === TRUE)
    {
      echo "Record deleted successfully";
    }
    else
    {
      echo "Error deleting record: " . $conn->error;
    }
}


function deleteTable($conn){
   // Fucntion to delete the table
    $sql ="drop table users" ;
    if ($conn->query($sql) === TRUE)
    {
      echo "Table deleted successfully";
    }
    else
    {
      echo "Error deleting Table: " . $conn->error;
    }
}

  $conn->close();




 ?>
