

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

  $sql = "SELECT * FROM products ";

  if($result = mysqli_query($link, $sql)){

      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
              if($row['id']==$NAME){
                  echo  $row['title'] ."<br>".$row['price'];
          }
        }
          mysqli_free_result($result);
      }
  }
//  echo '<img src="images/products/1.png"/>';
  $sql = "SELECT * FROM product_images ";

  if($result = mysqli_query($link, $sql)){

      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
              if($row['id']==$NAME){
//echo '<img src="images/products/1.png"/>';
echo '<img src="images/products/'.$row['Image'] . '" alt="error" width="200" height="100">'; 
          }
        }
          mysqli_free_result($result);
      }
  }


  mysqli_close($link);


?>
