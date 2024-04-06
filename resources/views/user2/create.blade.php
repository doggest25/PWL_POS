@extends('layout.app')


{{--Customize layout sections--}}

@section('subtitle', 'user')
@section('content_header_title', 'user')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat User baru</h3>
        </div>

        <form  method="post" action="/admin/user">
            @csrf
            <div class="card-body">
                <<div class="form-group">
                    <label for="level_id">Level</label>
                    <select class="form-control" id="level_id" name="level_id">
                        @foreach($levels as $level)
                            <option value="{{ $level->level_id }}">{{ $level->level_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="">
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