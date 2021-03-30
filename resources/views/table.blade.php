@extends('layouts.app')

@section('content')
<div class="block">
        <h3>Created Sales<h3>
        <table border="1">
            <tr>
                <td>Sale Number</td>
                <td>Description</td>
                <td>Amount</td>
                <td>Currency</td>
                <td>Payment Link</td>
            </tr>
            @foreach($sales as $sale)
            <tr>
                <td>{{ $sale['payme_sale_id']}}</td>
                <td>{{ $sale['product_name']}}</td>
                <td>{{ $sale['sale_price']}}</td>
                <td>{{ $sale['currency']}}</td>
                <td>{{ $sale['sale_url']}}</td>
            </tr>
            @endforeach
        </table>
</div>
@endsection 