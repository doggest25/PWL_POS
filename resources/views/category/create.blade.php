@extends('layout.app')


{{--Customize layout sections--}}

@section('subtitle', 'kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
        </div>

        <form  method="post" action="../kategori">
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode kategori</label>
                    <input type="text" class="@error('kodeKategori') is-invalid @enderror" id="kodeKategori" name="kodeKategori" placeholder="">
                    @error('kodeKategori')
                    <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                        
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@endsection