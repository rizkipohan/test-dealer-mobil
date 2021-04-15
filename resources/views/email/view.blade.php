@component('mail::message')

Berikut ini adalah invoice anda:

@component('mail::table')
<table>
    <tr>
        <td>Nama Mobil</td>
        <td>:</td>
        <td>{{$data->mobil->name}}</td>
    </tr>
    <tr>
        <td>Harga Satuan</td>
        <td>:</td>
        <td>{{$data->mobil->price}}</td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td>:</td>
        <td>{{$data->qty}}</td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td>:</td>
        <td>{{$data->total_price}}</td>
    </tr>
</table>
@endcomponent

@endcomponent
