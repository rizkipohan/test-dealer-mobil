@extends('template')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">
                Tambah Data Penjualan
            </button>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penjualan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <select name="" class="form-control" id="mobil" required>
                            <option value=""></option>
                        </select>
                    </div>
                    {{-- <div class="form-group mb-3">
                        <input type="number" min="1" class="form-control" id="qty" placeholder="Quantity" required>
                    </div> --}}
                    <div class="form-group mb-3">
                        <input type="text" name="" class="form-control" id="cust_name" placeholder="customer name" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="" class="form-control" id="cust_email" placeholder="customer email" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="" class="form-control" id="cust_phone" placeholder="customer phone" required>
                    </div>
                    <div class="form-group d-grid mt-2">
                        <button type="button" id="add" class="btn btn-success">
                            Tambahkan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nama mobil</th>
                        {{-- <th>qty</th> --}}
                        <th>total harga</th>
                        <th>nama pembeli</th>
                        <th>email pembeli</th>
                        <th>telepon pembeli</th>
                        {{-- <th>action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->mobil->name}}</td>
                        {{-- <td>{{$item->qty}}</td> --}}
                        <td>{{$item->total_price}}</td>
                        <td>{{$item->customer_name}}</td>
                        <td>{{$item->customer_email}}</td>
                        <td>{{$item->customer_phone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
<script>
    $(document).ready(function(){

        var mobil = $('#mobil');
        var qty = $('#qty');
        var cust_name = $('#cust_name');
        var cust_email = $('#cust_email');
        var cust_phone = $('#cust_phone');


        $.get("{{ route('mobil_optionlist') }}",
            function(data){
               mobil.append(data);
        });

        $('#add').click(function(){
            $.post("{{ route('penjualan_add') }}",
            {
                mobil_id : mobil.val(),
                qty : qty.val(),
                customer_name : cust_name.val(),
                customer_email : cust_email.val(),
                customer_phone : cust_phone.val()
            },
            function(data, status){
                location.reload();
                alert("Status: " + status);
            });
        });

    });
</script>
@endsection
