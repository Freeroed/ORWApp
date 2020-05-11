@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
  <div>
    <form action="{{url('products/new')}}">
      <button type="submit" class="btn btn-outline-primary">Create new</button>
    </form>
     @if(session('cart'))
    <form action="{{url('products/cart')}}">
      <button type="submit" class="btn btn-outline-secondary">Card</button>
    </form>
    @endif
  </div>
 <div class="row">
  
   @foreach($products as $product)
   <div class="col-xs-18 col-sm-6 col-md-6">
     <div class="thumbnail">
       <img src="{{ $product->photo }}" width="280" height="230">
       <div class="caption">
         <h4>{{ $product->name }}</h4>
         <p>{{ \Illuminate\Support\Str::limit(strtolower($product->descriprion), 50) }}</p>
         <p><strong>Price: </strong> {{ $product->price }} rub.</p>
         <p class="btn-holder" ><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button" style="width:30%">Add to cart</a> </p>  
         <form action="{{url('products',$product->id)}}" method="POST">
          @csrf
          @method('DELETE')
         <button  type="submit" class="btn btn-danger btn-block text-center" style="width:30%" >delete</button></form>
       </div>
     </div>
   </div>
   @endforeach
 </div>
</div>

@endsection
