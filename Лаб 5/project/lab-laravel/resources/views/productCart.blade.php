@extends('layout')
@section('title', 'Products')
@section('content')
 
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:45%">Product</th>
            <th style="width:15%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>
 
                <tr>
                    <td data-th="Name">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }} rub.</td>
                    <td data-th="Quantity">
                        <div> {{ $details['quantity'] }}</div>
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }} rub.</td>
                    
                </tr>
            @endforeach
        @endif
 
        </tbody>
        <tfoot>
        
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-success"> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total {{ $total }} rub.</strong></td>
        </tr>
        </tfoot>
    </table>
 
@endsection
