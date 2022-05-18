@extends('lms.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>SMA NEGERI 1 SINGGAHAN</h2>
            </div>
            <div class="float-left my-2">
                <form action="{{ route('lms.index') }}">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search . . . " name="search" value="{{ request('search')}}">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('lms.create') }}"> Input lms</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-error">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama Mapel</th>
            <th>Nama Guru</th>
            <th width="500px">Action</th>
            </tr>
            @foreach ($paginate as $mpl)
            <tr>
                <td>{{ $mpl ->nama_mapel}}</td>
                <td>{{ $mpl ->nama_guru }}</td>
                <td>

                        <a class="btn btn-info" href="{{ route('lms.show',$mpl->nama_mapel) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('lms.edit',$mpl->nama_mapel) }}">Edit</a>

                </td>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $paginate->links()}}
@endsection
