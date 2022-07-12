@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">SELAMAT DATANG APP Laundry Harum</h5>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-md-3">
                                Username 
                            </div>
                            <div class="col-md-8">
                                {{ auth()->user()->name }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Email
                            </div>
                            <div class="col-md-8">
                                {{ auth()->user()->email }}
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection