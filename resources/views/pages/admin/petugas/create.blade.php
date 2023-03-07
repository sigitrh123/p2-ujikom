@extends('layouts.admin')

@section('content')
    <main class="main" id="main">
        <div class="container">
            <div class="card p-4 ">
                <div class="card-header">
                    <h4 class="card-title">Tambah Petugas</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('staff.store') }}">
                        @csrf

                        <div class="form-group row mt-4">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>

                            <div class="col-md-7">
                                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                    name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>

                            <div class="col-md-7">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Alamat Email</label>

                            <div class="col-md-7">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Nomor Telepon</label>

                            <div class="col-md-7">
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>

                            <div class="col-md-7">
                                <input id="roles" type="text"
                                    class="form-control @error('roles') is-invalid @enderror" name="roles"
                                    value="{{ old('roles') }}" required autocomplete="roles">

                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-7">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Konfirmasi Password</label>

                            <div class="col-md-7">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning btn-sm float-end mt-4 me-5">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
