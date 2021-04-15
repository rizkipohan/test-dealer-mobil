@extends('template')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">
                Tambah Mobil
            </button>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" name="" class="form-control" id="name" placeholder="Nama Mobil" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="" class="form-control" id="price" placeholder="Harga Mobil" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" min="1" name="" class="form-control" id="stock" placeholder="stock" required>
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
                        <th>harga</th>
                        <th>stock</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->stock}}</td>
                        <td>
                            <a href="{{url('mobil/edit/'.$item->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url('mobil/delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
<script>
    $(document).ready(function(){

        var name = $('#name');
        var price = $('#price');
        var stock = $('#stock');

        $('#add').click(function(){
            $.post("{{ route('mobil_add') }}",
            {
                name: name.val(),
                price: price.val(),
                stock: stock.val()
            },
            function(data, status){
                name.empty();
                price.empty();
                stock.empty();
                location.reload();
                alert("Status: " + status);
            });
        });

    });
</script>
@endsection
