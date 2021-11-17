@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Barang</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div clas@extends('layouts.admin')
            @section('header')
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">Data Barang</h1>
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
                            <div class="card-header">
                                Data Barang
                                <a href="{{route('books.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Barang</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Barang</th>
                                            <th>Ruangan</th>
                                            <th>Status</th>
                                            <th>Kategori</th>
                                            <th>Jumlah unit</th>
                                            <th>Cover Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                        @php $no=1; @endphp
                                        @foreach($books as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->barang}}</td>
                                            <td>{{$data->author->name}}</td>
                                            <td>{{$data->status}}</td>
                                            <td>{{$data->kategori}}</td>
                                            <td>{{$data->jumlah_unit}}</td>
                                            <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Cover"></td>
                                            <td>

                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                    </table>
                    </div>
                </div>
            </div>
        </div>


@endsection
