
@extends('layouts.master') @section('content')
<head>
    <style>
  .bg-light11 {
    padding: 15px 32px;

      width: 450px;
      height: 75px;
      background-color: red;
      position: relative;
      -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
      -webkit-animation-duration: 60s; /* Safari 4.0 - 8.0 */
      animation-name: example;
      animation-duration: 60s;
      font-size: 24px;
      text-align: center;
       border: 8px solid black;
          font-family: calibri;
    }

    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes example {
      0%   {background-color:red; left:0px; top:0px;}
      25%  {background-color:yellow; left:700px; top:0px;}
      100% {background-color:red; left:0px; top:0px;}
    }

    /* Standard syntax */
    @keyframes example {
      0%   {background-color:red; left:0px; top:0px;}
      25%  {background-color:yellow; left:700px; top:0px;}
      100% {background-color:red; left:0px; top:0px;}
    }

    .bg-light12 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
             text-align: center;

       border: 1px solid black;
      display: inline-block;
      padding: 0 10px;
      color: black;
      width: 780px;
   height: 75px;
   background:#ffba4c;
   font-size: 34px;
   font-syle:candara;
   -webkit-transition: width 2s, height 4s; /* For Safari 3.1 to 6.0 */
   transition: width 2s, height 4s;
        }

        .bg-light12:hover {
          text-align: center;
          width: 220px;
        height: 50px;
        font-size: 24px;
            }
        body {
  background-color: #baf4c8;

        }
    }
    </style>
</head>
<body>

<div class="row">
    <div class="col-md-4">
  	@include('partials.product-sidebar')

    </div>

    <div class="col-md-8">
        <div class="width">
          <br>
          <br>
          <br>
            <div class="row">

                <div class='container margin-top-20'>
                  <div class="bg-light11">

                           Global Leaderboard
                              </div>

<?php


require('C:\xampp\htdocs\ranking\resources\views\Pages\product\database12.blade.php');
$row = array_fill(0,1000, 0);
$temp = array_fill(0, 1000,0);
for($i=1;$i<=100;$i++){
$sql= mysqli_query($link,"SELECT SUM(point) As total FROM submission where
result_id= 1 and user_id=$i");
$data=mysqli_fetch_assoc($sql);
$st= $data['total'];
$row[$i]=$st;
}
$j=0;

for($i=1;$i<=100;$i++)
{
  if($row[$i]>0)
  {
// echo $i." ".$row[$i]."<br>";
            $temp[$j]=$row[$i];
            $j++;
  }
}
rsort($temp);
$t=1;
for($i=0;$i<$j;$i++)
{
  $t=1;
  for($k=1;$k<=100;$k++)
  {
    if($t==1){
    if($row[$k]==$temp[$i])
    {
      $st[$i]=$k;
      $row[$k]=0;
      $t=0;
    }
  }
}
}

for($i=0;$i<$j;$i++)
{
$lol= $st[$i];
$sql = "SELECT products.user_name,images.Image  FROM products
inner join images On products.user_id=images.id where products.user_id=$lol ";
if ($result = mysqli_query($link, $sql)) {
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo"<br>";
        echo"<br>";

      $st2=$row['Image'];
      $st1=$row['user_name'];
      $k=$i+1;
      echo"<div class=\"bg-light12\">$k: $st1 </div>";
      echo" ";
      echo ' <img src="images/products/' . $st2. '" alt="error" width="200" height="250">';
}
    mysqli_free_result($result);
}
}
}

mysqli_close($link);
?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection
