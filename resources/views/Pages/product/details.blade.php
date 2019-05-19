
@extends('layouts.master')
@section('content')
<head>
<style>
.bg-light11 {
  width: 300px;
  height: 50px;
  background-color: yellow;
  border: 1px solid black;
  text-align: center;
}


}
</style>
</head>
<div class="row">
  <div class="col-md-4">

</div>
<div class="col-md-8">
<div class="width">
<h2>
</br>
<div class="bg-light11">

Personal profile
</div>
</h2>
<div class="row">

<div class='container margin-top-20'>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="laravel_ranking";

// Create connection
$link = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


  $NAME=$_REQUEST['Name'];
  //  echo '<img src="images/products/1.png"/>';
    $sql = "SELECT * FROM product_images ";

    if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if($row['id']==$NAME){
  echo '<img src="images/products/'.$row['Image'] . '" alt="error" width="200" height="150">';
            }
          }
            mysqli_free_result($result);
        }
    }

  $sql = "SELECT * FROM products ";

  if($result = mysqli_query($link, $sql)){

      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
              if($row['id']==$NAME){
                  echo  "<br>"."Name:".$row['title'] ."<br>".$row['price'];
          }
        }
          mysqli_free_result($result);
      }
  }


  mysqli_close($link);

?>
</div>
</div>
</div>
</div>
</div>
@endsection
