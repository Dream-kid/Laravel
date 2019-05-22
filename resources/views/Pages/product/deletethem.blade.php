@extends('layouts.master') @section('content')


<head>

    <style>
		.bg-light11 {
						width: 250px;
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

												Delete Data
															</div>
</br>
<?php


require('C:\xampp\htdocs\ranking\resources\views\Pages\product\database12.blade.php');

	$id=$_REQUEST['id'];

$sql = "DELETE FROM submission WHERE user_id=$id";
if ($link->query($sql) === TRUE) {
	//	echo"<div class=\"bg-light14\">Id delete done successfully</div>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
	}

$sql = "DELETE FROM products WHERE user_id=$id";
if ($link->query($sql) === TRUE) {
	//	echo"<div class=\"bg-light14\">Id delete done successfully</div>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
	}
$sql = "DELETE FROM images WHERE id=$id";
if ($link->query($sql) === TRUE) {
	//	echo"<div class=\"bg-light14\">Id delete done successfully</div>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
	}
$sql = "DELETE FROM university WHERE user_id=$id";

if ($link->query($sql) === TRUE) {
		echo"<div class=\"bg-light14\">Id delete done successfully</div>";
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
	</br>	</br>
	</br>
	
	</br>	</br>

</div>
</div>
</div>
</div>
</div>
@endsection
