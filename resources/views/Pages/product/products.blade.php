
		@extends('layouts.master')
		@section('content')
<div class='container margin-top-20'>
			<div class="row">
				<div class="col-md-4">
		@include('partials.product-sidebar')

		</div>
			<div class="col-md-8">
<div class="width">
	<h3>
		All product
	</h3>
	<div class="row">

		@foreach($products as $product)
		<div class="col-md-3">
			<div class="card" style="">
	@php
$i=1;
@endphp
				@foreach($product->images as $Image)
				@if($i>0)
		<img class="card-img-top feature-img" src="{{asset('images/products/'.$Image->Image)}}" alt="Card image">
		@endif
		@php
		$i--;
		@endphp
		@endforeach
		<div class="card-body">
				<h4 class="card-title">
					{{$product->title}}

				</h4>
				<p class="card-text">Taka-{{$product->price}}</p>

		<form id="Form" action="details" method="get">

 <input type="text" name="Name" value={{$product->id}} />
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
