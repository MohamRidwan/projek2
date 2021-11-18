@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">profil</h1>
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
                            <h1 class="m-0">Profil</h1>
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
                                Profil
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                  <center><img src="{{asset('assets/dist/img/no_foto.png')}}" alt="AdminLTE Logo" class="" height="200" width="150" style="opacity: .8"> </center>
                                  <br>
                                  <table class="table">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>{{Auth::user()->name}}</td>

                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{Auth::user()->email}}</td>

                                        </tr>
                                        @php $no=1; @endphp

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
