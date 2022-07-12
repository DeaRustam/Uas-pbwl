@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Kategori</h5></div>
            <div class="card-text">
                <a href="{{ route('category.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga/Kg</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>Rp. {{ number_format($item->price) }}</td>
                            <td style="width: 25%">
                            <a href="{{ route('category.edit', $item->id) }}">
                                <button class="btn btn-sm btn-warning">Edit</button>
                            </a>
                            <form action="{{ route('category') }}" method="POST" style="display: inline">
                                @csrf @method('DELETE')
                                <input type="text" name="id" value="{{ $item->id }}" style="display:none">
                                <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection