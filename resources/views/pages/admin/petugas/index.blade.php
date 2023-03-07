@extends('layouts.admin')

@section('title')
    Data Petugas
@endsection

@section('content')
    <main class="main" id="main">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-gray-800">Data Petugas</h1>
                    <p class="">Data dari seluruh petugas</p>
                </div>
                <div>
                    <a href="{{ route('staff.create') }}" class="btn btn-warning">Tambah Petugas</a>
                </div>


            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body p-3">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-petugas" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Roles</th>
                                    <th>Email</th>
                                    <th>No. Telepon</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $petugas)
                                    <tr>
                                        <td>{{ $petugas->name }}</td>
                                        <td>{{ $petugas->roles }}</td>
                                        <td>{{ $petugas->email }}</td>
                                        <td>{{ $petugas->phone }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('staff.edit', ['staff' => $petugas->id]) }}"
                                                class="btn btn-warning btn-sm mx-2">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalLogout{{ $petugas->id }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalLogout{{ $petugas->id }}" tabindex="-1"
                                                aria-labelledby="modalLogoutLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title fs-5" id="exampleModalLabel">Yakin Hapus?
                                                            </h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Kamu yakin akan menghapus petugas <span
                                                                class="text-capitalize">{{ $petugas->name }}</span>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ route('staff.destroy', $petugas->id) }}"
                                                                method="POST">
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
        </div>
    </main>
@endsection

{{-- @section('contents')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Petugas
    </h2>

    <div class="my-4 mb-6">
      <a href="{{ route('petugas.create')}} "
        class="px-5 py-3  font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
        Tambah Petugas
      </a>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">NIK</th>
              <th class="px-4 py-3">No. Hp</th>
              <th class="px-4 py-3">Email</th>
              <th class="px-4 py-3">Role</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($data as $petugas)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3 text-sm">
                {{ $petugas->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->nik }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->phone }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->email }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $petugas->roles }}
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
@endsection --}}
