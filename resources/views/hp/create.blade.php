@extends('template')

@section('title', 'management hp')

@section('css')

@endsection


@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah Data Handphone</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('hp.index') }}"> Kembali</a>
            {{-- <a class="btn btn-info btn-sm" href="{{ route('hp.index') }}">Kembali</a> --}}
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('hp.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Handphone :</strong>
                <input type="text" name="nm_hp" class="form-control" placeholder="NAMA HP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis :</strong>
                <input type="text" name="jenis" class="form-control" placeholder="JENIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="number" name="harga" class="form-control" placeholder="HARGA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok :</strong>
                <input type="number" name="stok" class="form-control" placeholder="STOK">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection