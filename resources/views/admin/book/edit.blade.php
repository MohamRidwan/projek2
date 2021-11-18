@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-">Edit Data Barang</h1>
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
                    <form action="{{route('books.update',$book->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Barang</label>
                            <input type="text" name="barang" value="{{$book->barang}}" class="form-control @error('barang') is-invalid @enderror">
                            @error('barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Nama Ruangan</label>
                            <select name="author_id" class="form-control @error('barang') is-invalid @enderror">
                                @foreach ($author as $data)
                                   <option value="{{$data->id}}" {{$data->id == $book->author_id ? 'selected="selected"' : '' }}>{{$data->name}}></option>
                                @endforeach
                            </select>
                            @error('author_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="Barang Baru">Barang Baru</option>
                                <option value="barang Bekas">Barang Bekas</option>
                                <option value="barang Rusak">Barang Rusak</option>
                            </select>
                             @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="form-group">
                            <label for="">Masukan kategori</label>
                            <select name="kategori" class="form-control @error('kategori') is-invalid @enderror">
                                <option value="Elaktronik">Elaktronik</option>
                                <option value="Belajar">Belajar</option>
                                <option value="Tumbuhan">Tumbuhan</option>
                            </select>
                             @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="form-group">
                            <label for="">Masukan Jumlah Unit</label>
                            <input type="number" name="jumlah_unit" value="{{$book->jumlah_unit}}" class="form-control @error('jumlah_unit') is-invalid @enderror">
                             @error('jumlah_unit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Cover Buku</label>
                            <br>
                            <img src="{{ $book->image() }}" height="75" style="padding:10px;" />
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
