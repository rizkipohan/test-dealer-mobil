@extends('template')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <table class="table">
                <tr>
                    <td>Produk terbanyak hari ini:</td>
                    <td>:<td>
                    <td>{{$terbanyak->name}}</td>
                </tr>
                <tr>
                    <td>Penjualan hari ini:</td>
                    <td>:<td>
                    <td>{{$terbanyak->penjualan_sum_qty}}</td>
                </tr>
                <tr>
                    <td>Total penjualan hari ini:</td>
                    <td>:<td>
                    <td>{{$terbanyak->penjualan_sum_qty * $terbanyak->price}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
