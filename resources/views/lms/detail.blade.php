@extends('lms.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Detail lms
                </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Nama Mapel: </b>{{$lms->nama_mapel}}</li>
                            <li class="list-group-item"><b>Nama Guru: </b>{{$lms->nama_guru}}</li>
                        </ul>
                    </div>
                <a class="btn btn-success mt-3" href="{{ route('lms.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
