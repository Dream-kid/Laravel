@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
<div class="card">
  <div class="card-header">
    Add Product
  </div>
<div class="card-body">
         <form action="{{route('admin.product.store')}}" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
 <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> 

  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

<button type="submit" class="btn btn-primary">Add product</button>
</form>
</div>
</div>
     </div>
      </div>
      <!-- main-panel ends -->
      @endsection