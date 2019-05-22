@extends('layouts.master') @section('content')


<head>

    <style>
  .bg-light11 {
    padding: 15px 32px;

      width: 250px;
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


       border: 1px solid black;
      display: inline-block;
      padding: 0 10px;
      color: white;
      width: 680px;
   height: 180px;
   background: #4CAF50;
   font-size: 24px;
   -webkit-transition: width 2s, height 4s; /* For Safari 3.1 to 6.0 */
   transition: width 2s, height 4s;
        }

        .bg-light12:hover {
          width: 480px;
        height: 120px;
        font-size: 16px;
            }
    .bg-light13 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

      display: inline-block;
      padding: 15px 32px;
      color: white;
      width: 860px;
   height: 50px;
   background:red;
   font-size: 16px;
   -webkit-transition: width 2s, height 4s; /* For Safari 3.1 to 6.0 */
   transition: width 2s, height 4s;
   text-align: center;
    border: 1px solid black;
        }
    .bg-light15{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

      display: inline-block;
      padding: 15px 32px;
      color: white;
      width: 860px;
   height: 50px;
   background:#28b74a;
   font-size: 16px;
   -webkit-transition: width 2s, height 4s; /* For Safari 3.1 to 6.0 */
   transition: width 2s, height 4s;
   text-align: center;
    border: 1px solid black;
        }
    .bg-light14 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

      display: inline-block;
      padding: 15px 32px;
      color: black;
      width: 850px;
   height: 75px;
   background:#ffba4c;
   font-size: 25px;
   font-family: calibri;
   text-align: center;
   border: 4px solid black;

        }
    .bg-light60 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

      display: inline-block;

      color: black;
      width: 200px;
   height: 50px;
   background:yellow;
   font-size: 20px;
   font-family: calibri;
   text-align: center;
   border: 4px solid black;

        }
    .bg-light61 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

      display: inline-block;

      color: black;
      width: 200px;
   height: 50px;
   background:green;
   font-size: 20px;
   font-family: calibri;
   text-align: center;
   border: 4px solid black;

        }
    .bg-light62 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

      display: inline-block;

      color: black;
      width: 200px;
   height: 50px;
   background:red;
   font-size: 20px;
   font-family: calibri;
   text-align: center;
   border: 4px solid black;

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
    <!DOCTYPE html>
    <html lang="en-US">
    <body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Time limit', 2],
        ['Wrong Answer', 9],
      ['Compilation Error', 3],
      ['Accepted', 10]
    ]);

      // Optional; add a title and set the width and height of the chart
      var options = {'title':'Submission Chart', 'width':550, 'height':400};

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
    </script>

    </body>
    </html>

    </div>

    <div class="col-md-8">
        <div class="width">

            <div class="row">

                <div class='container margin-top-20'>

                    <?php


require('C:\xampp\htdocs\ranking\resources\views\Pages\product\database12.blade.php');
$NAME = $_REQUEST['Name'];
  //echo '<img src="images/products/7.png"/>';

  echo " <br>";
  echo " <br>";
  echo"<div class=\"bg-light11\">Personal Profile
  </div";
//echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
echo " <br>";
echo " <br>";
echo " <br>";

//echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";



//echo "<font size='5' face='Arial' color='RED' ";

$sql = "SELECT * FROM products ";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if ($row['user_id'] == $NAME) {
              $st=$row['user_name'];
              $st1=$row['email'];
            }
        }
        mysqli_free_result($result);
    }
}


$sql = "SELECT * FROM university ";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if ($row['user_id'] == $NAME) {
                $st3=$row['university_name'];
            }
        }
        mysqli_free_result($result);
    }
}
echo"<div class=\"bg-light12\">User Id: $NAME <br>User Name: $st<br>Email Id: $st1<br> University: $st3</div>";
$sql  = "SELECT * FROM images ";
if ($result = mysqli_query($link, $sql)) {


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        if ($row['id'] == $NAME) {
            echo ' <img src="images/products/' . $row['Image'] . '" alt="error" width="200" height="250">';
        }
    }
    mysqli_free_result($result);
}
}
echo"<br>";
echo"<br>";
echo "&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;";
   echo"<div class=\"bg-light14\">   Judge Name &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Problem Name&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submission </div>";
   echo"<br>";

   echo"<br>";



//   echo "<font size='5' face='Arial' color='BLUE' ";


$sql = "SELECT * FROM submission ";
   $i=0;
if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if ($row['user_id'] == $NAME) {
              $resultarray[$i]=$row['result_id'];
              $problemarry[$i]=$row['problem_id'];
           $i++;
            }
        }
        mysqli_free_result($result);
    }
}
for($j=0;$j<$i;$j++)
{
  $sql = "SELECT problems_list.problem_name , online_judge_list.judge_name FROM problems_list
  inner join  online_judge_list on  problems_list.judge_id=online_judge_list.judge_id where problems_list.problem_id=$problemarry[$j]";
  if ($result = mysqli_query($link, $sql)) {
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $st2=$row['judge_name'];
        $st1=$row['problem_name'];
$sql1=$sql;
$sql1 = "SELECT result_name FROM result_type where result_id=$resultarray[$j]";
if ($result1 = mysqli_query($link, $sql1)) {

    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_array($result1)) {
          $st=$row['result_name'];
          if($st=="Accepted")
          {
            echo  '<i class="fas fa-smile" style="font-size:30px;color:yellow;"></i>';
            echo" ";
            echo"<div class=\"bg-light15\">$st2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$st1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$st</div>";
             echo"<br>";
          }
          else {
            echo  '<i class="fas fa-sad-tear" style="font-size:30px;color:blue;"></i>';
    echo" ";
    echo"<div class=\"bg-light13\">$st2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$st1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;$st</div>";             echo"<br>";          }

            }
        }
        mysqli_free_result($result1);
    }
}
          }

      }
          mysqli_free_result($result);
  }
$NAME = $_REQUEST['Name'];
$temp= mysqli_query($link,"SELECT MAX(point) As total FROM submission where
result_id BETWEEN 1 and 1 and user_id=$NAME");
$data=mysqli_fetch_assoc($temp);
$st= $data['total'];
$NAME = $_REQUEST['Name'];
$temp= mysqli_query($link,"SELECT SUM(point) As total FROM submission where
result_id= 1 and user_id=$NAME");
$data=mysqli_fetch_assoc($temp);
$st= $data['total'];

$NAME = $_REQUEST['Name'];
$temp= mysqli_query($link,"SELECT COUNT(result_id) As total FROM submission where
result_id= 1 and user_id=$NAME");
$data=mysqli_fetch_assoc($temp);
$st= $data['total'];

$temp= mysqli_query($link,"SELECT COUNT(result_id) As total FROM submission where user_id=$NAME");
$data=mysqli_fetch_assoc($temp);
$st1= $data['total'];
$st2=$st1-$st;
echo"<br>";
echo"<br>";
echo" &nbsp;&nbsp; &nbsp; &nbsp;";
 echo '<i class="fas fa-database" style="font-size:30px;color:black;"></i>';
 echo"&nbsp; &nbsp;";
echo"<div class=\"bg-light60\">Total Submission: $st1 </div>";
echo"&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;";
echo '<i class="fas fa-check-double" style="font-size:30px;color:green;"></i>';
echo"&nbsp; &nbsp;";
echo"<div class=\"bg-light61\">Accepted: $st </div>";
echo"&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;";
 echo '<i class="fas fa-times-circle" style="font-size:30px;color:red;"></i>';
 echo"&nbsp; &nbsp;";
echo"<div class=\"bg-light62\">Wrong: $st2 </div>";

mysqli_close($link);
?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection
