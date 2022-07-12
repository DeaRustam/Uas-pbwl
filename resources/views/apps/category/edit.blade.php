@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; min-height: 550px">
    <div class="col-md-12">
        <div class="card text-left" style="width: 600px">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Data Kategori</h4>
            <p class="card-text">
                <form action="{{ route('category') }}" method="POST">
                    @csrf @method('PUT')
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <label for="">Harga/Kg</label>
                        <input type="text" class="form-control" name="price" value="{{ $category->price }}">
                      </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                    </div>
                </form>
            </p>
        </div>
        </div>
    </div>
</div>
@endsection