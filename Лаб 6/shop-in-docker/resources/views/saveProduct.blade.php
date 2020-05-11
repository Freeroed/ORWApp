@extends('layout')
@section('title', 'Products')
@section('content')

<div class="row justify-content-center">
	<div>
		<div class="card-body">
			<form action="{{url('products/new')}}" method="POST"> @csrf
				<div class="form-group">
					<label>Name of product</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" style="height:150px"  name="decriprion"></textarea>
				</div>
				<div class="form-group">
					<label>ImageUrl</label>
					<input type="text" name="photo" class="form-control" placeholder="www...">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="number" step="0.01" name="price" class="form-control">
				</div>
				<button class="btn btn-outline-primary">Save</button>
			</form>
		</div>
	</div>
 </div>
 @endsection