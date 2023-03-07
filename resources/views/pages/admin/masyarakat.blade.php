@extends('layouts.admin')

@section('title')
    Data Masyarakat
@endsection

@section('content')
    <main class="main" id="main">

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Masyarakat</h1>
            <p class="mb-4"></p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-light p-3 shadow">
                <div class="row table-responsive p-1">
                    <table class="table table-bordered" id="data-masyarakat" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No. Telepon</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $masyarakat)
                                <tr>
                                    <td>{{ $masyarakat->name }}</td>
                                    <td>{{ $masyarakat->nik }}</td>
                                    <td>{{ $masyarakat->phone }}</td>
                                    <td>{{ $masyarakat->email }}</td>
                                    <td class="d-flex justify-content-center">
                                        {{-- <a href="{{ route('pengaduans.show', $item->id) }}" class="btn btn-warning btn-sm mx-2">
                                            <i class="fas fa-eye" aria-hidden="true"></i>
                                        </a> --}}
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalDelete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalDelete" tabindex="-1"
                                            aria-labelledby="modalDeleteLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Yakin Hapus?
                                                        </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Kamu yakin akan menghapus akun dari <span
                                                            class="text-capitalize">{{ $masyarakat->name }}</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('masyarakat.destroy', $masyarakat->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-gray-400">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
@endsection
