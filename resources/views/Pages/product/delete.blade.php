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
	<form action="deletethem" method="get">
	<input type="number" placeholder="Enter Your Id" name="id">
		<?php echo"<br>" ?>
		<input type="submit">
	</form>
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
		</br>
		

</div>
</div>
</div>
</div>
</div>
@endsection
