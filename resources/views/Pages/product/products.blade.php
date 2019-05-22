
		@extends('layouts.master')
		@section('content')

		<head>
		    <style>
		    .bg-light11 {
		            width: 500px;
		            height: 50px;
		            background-color: lightblue;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		            border: 4px solid black;
		            text-align: center;
								font-style: italic;
		        }

						        body {

						  background-color: #baf4c8;
						        }
		    }
		    </style>
		</head>
<div class='container margin-top-20'>
			<div class="row">
				<div class="col-md-4">
		@include('partials.product-sidebar')
<br>
<br>
<br>
<br>
<br>
<br>
<?php
echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
 ?>
		<!DOCTYPE html>
<html>
<style>
#div1 {
  font-size:50px;
	color: green;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div id="div1" class="fa"></div>

<script>
function hourglass() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf251;";
  setTimeout(function () {
      a.innerHTML = "&#xf252;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf253;";
    }, 2000);
}
hourglass();
setInterval(hourglass, 3000);
</script>
</body>
</html>
		</div>
			<div class="col-md-8">
<div class="width">
	<h2>


																							 <div class="bg-light11">


																												  	List Of Programmers
																													 </div>
																													 </h2>
																													 <br>


	<div class="row">

		@foreach($products as $product)
		<div class="col-md-4">
			<div class="card" style="">
				@php
			require('C:\xampp\htdocs\ranking\resources\views\Pages\product\database12.blade.php');
	$NAME="$product->user_id";

						$sql = "SELECT * FROM images ";

						if($result = mysqli_query($link, $sql)){

								if(mysqli_num_rows($result) > 0){
										while($row = mysqli_fetch_array($result)){
												if($row['id']==$NAME){
					echo '<img src="images/products/'.$row['Image'] . '" alt="error" width="221" height="250">';
										}
									}
										mysqli_free_result($result);
								}
						}
					mysqli_close($link);
				@endphp
		<div class="card-body">
				<h4 class="card-title">
					{{$product->user_name}}
					<br>
					ID: {{$product->user_id}}
				</h4>


		<form id="Form" action="details" method="get">

 <input type="hidden" name="Name" value={{$product->user_id}} />
<p><input type="Submit"  class="btn btn-outline-warning" value="Details" /></p>
		</form>

				<!--<a href="details" class="btn btn-outline-warning">Add to cart</a>-->
		</div>
</div>
		</div>

		@endforeach

	</div>
</div>

				</div>
		</div>
		</div>

		@endsection
