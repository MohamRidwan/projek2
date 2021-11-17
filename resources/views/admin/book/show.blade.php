@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Barang</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Barang</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Barang</label>
                        <input type="text" name="barang" value="{{$book->barang}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Ruangan</label>
                        <input type="text" name="" class="form-control" value="{{$book->author->name}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Status</label>
                        <input type="text" name="status" value="{{$book->status}}" class="form-control" readonly>

                    </div>
                    <div class="form-group">
                        <label for=""> Kategori</label>
                        <input type="text" name="kategori" value="{{$book->kategori}}" class="form-control" readonly>

                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah Unit</label>
                        <input type="number" name="jumlah_unit" value="{{$book->jumlah_unit}}" class="form-control" readonly>

                    </div>
                    <div class="form-group">
                        <label for=""> Cover Buku</label>
                        <br>
                        <img src="{{ $book->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/books')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
