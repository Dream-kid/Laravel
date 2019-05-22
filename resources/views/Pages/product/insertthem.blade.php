
@extends('layouts.master') @section('content')


<head>

    <style>
		.bg-light11 {
						width: 200px;
						height: 50px;
						font-size: 20px;
						background-color: yellow;
						border: 4px solid black;
						text-align: center;
						font-style: italic;
				}

				        body {

				  background-color: #baf4c8;
				        }
				.bg-light14 {
					display: inline-block;
					padding: 15px 32px;
					color: black;
					width: 900px;
			 height: 100px;
			 background:orange;
			 font-size: 25px;
			 font-family: calibri;
			 text-align: center;
			 border: 4px solid black;

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

            <div class="row">

                <div class='container margin-top-20'>
								</br>
								</br>
								</br>
								</br>
									<div class="bg-light11">

														 Insert Data
															</div>
</br>

<?php


require('C:\xampp\htdocs\ranking\resources\views\Pages\product\database12.blade.php');


	$uni=$_REQUEST['University'];
	$ima=$_REQUEST['Image'];
	$Ema=$_REQUEST['Email'];
	$Nam=$_REQUEST['Name'];


	$sql="INSERT INTO university (university_name)
	VALUES('$uni')";
	if ($link->query($sql) === TRUE) {
	  //  echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}
$sql=	"INSERT INTO images (Image)
	VALUES ('$ima')";
	if ($link->query($sql) === TRUE) {
	   // echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}
$sql=	"INSERT INTO products (user_name,email)
VALUES('$Nam','$Ema')";

if ($link->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
$sql = "SELECT * FROM products ";
$temp=0;
if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
					if ($row['user_name'] == $Nam) {
					$temp=$row['user_id'];
					}
            }
        }
        mysqli_free_result($result);
    }

$sql="INSERT INTO submission VALUES ('$temp',1,1),('$temp',2,2),('$temp',3,3),('$temp',4,4),('$temp',5,5),('$temp',1,6),('$temp',2,7),('$temp',1,8)";


if ($link->query($sql) === TRUE) {
		echo"<div class=\"bg-light14\">   New record created successfully</div>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
	}
?>

</br>
</br>
</br>
</br>	</br>
	</br>
	</br>
	</br>	</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
	
</div>
</div>
</div>
</div>
</div>
@endsection
