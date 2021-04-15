@extends('template')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <form action="{{url('mobil/update/'.$items->id)}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="name" class="form-control" id="" placeholder="Nama" value="{{$items->name}}" required>
                </div>
                <div class="form-group mb-3">
                    <input type="number" name="price" class="form-control" id="" placeholder="Harga" value="{{$items->price}}" required>
                </div>
                <div class="form-group">
                    <input type="number" name="stock" class="form-control" id="" placeholder="Stok" value="{{$items->stock}}" required>
                </div>
                <div class="form-group d-grid mt-2">
                    <button type="submit" id="btnadditemtype" class="btn btn-success">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
