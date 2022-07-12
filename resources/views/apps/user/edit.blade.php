@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom:40px; min-height: 600px"">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <form action="{{ route('user') }}" method="POST">
                    @csrf @method('PUT')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $user->name }}">
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>
@endsection