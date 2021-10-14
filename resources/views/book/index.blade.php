@extends('layouts.admin')

@section('judul')
    Index
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($buku as $data)
                            Nama buku : {{ $data->nama }} <br>
                            Jumlah Halaman : {{ $data->halaman }} Halaman <br>
                            Translate Judul : {{ $data->translate ?? 'Belum ada translate' }}
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
