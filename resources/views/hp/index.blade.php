@extends('template')

@section('title', 'management hp')

@section('css')

@endsection

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <a class="btn btn-info btn-sm" href="{{ route('hp.create') }}">Tambah Data</a>
    <tr>
        <th width="20px" class="text-center">No</th>
        <th width="280px" class="text-center">Nama Handphone</th>
        <th width="280px" class="text-center">Jenis</th>
        <th width="280px" class="text-center">Harga</th>
        <th width="280px" class="text-center">Stok</th>
        <th width="280px" class="text-center">Aksi</th>
    </tr>

    @foreach ($hp as $hps)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $hps->nm_hp }}</td>
        <td>{{ $hps->jenis }}</td>
        <td>{{ $hps->harga }}</td>
        <td>{{ $hps->stok }}</td>
        <td class="text-center">
            <form action="{{ route('hp.destroy', $hps->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('hp.show', $hps->id) }}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{ route('hp.edit', $hps->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection