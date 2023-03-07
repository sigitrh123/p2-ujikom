@extends('layouts.admin')

@section('title')
    Laporan
@endsection

@section('content')
    <main id="main" class="main">
        {{-- <div class="container grid px-6 mx-auto">
            <div class="my-6 mb-6">
                <a href="{{ url('admin/laporan/cetak') }} "
                    class="px-5 py-3  font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    Export ke PDF
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
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">NIK</th>
                                <th class="px-4 py-3">Nama</th>
                                <th class="px-4 py-3">Pengaduan</th>
                                <th class="px-4 py-3">Tanggal</th>
                                <th class="px-4 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($pengaduan as $item)
                                <tr class="text-gray-700 dark:text-gray-400 ">
                                    <td class="px-4 py-3 text-sm">
                                        {{ $item->id }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $item->user_nik }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $item->name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $item->description }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $item->created_at->format('l, d F Y') }}
                                    </td>

                                    @if ($item->status == 'Belum di Proses')
                                        <td class="px-4 py-3 text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    @elseif ($item->status == 'Sedang di Proses')
                                        <td class="px-4 py-3 text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    @else
                                        <td class="px-4 py-3 text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    @endif
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

        </div> --}}
        <div class="pagetitle">
            <h1>Laporan</h1>
        </div>

        <section class="section dashboard my-4">
            <a href="{{ url('admin/laporan/cetak') }} ">
                <button class="btn btn-warning">
                    <i class="bi-download"></i>
                    <span>Cetak Laporan</span>
                </button>
            </a>
            <div class="w-auto my-3 bg-light shadow rounded p-3">
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
                    <div class="table-responsive">
                        <table class="table table-bordered w-auto">
                            <thead>
                                <tr class="text-secondary-50 ">
                                    <th class="px-2 py-3" style="width:1px">No</th>
                                    <th class="px-2 py-3">NIK</th>
                                    <th class="px-2 py-3" style="width: 11.5rem">Nama</th>
                                    <th class="px-2 py-3" style="width: 15rem">Pengaduan</th>
                                    <th class="px-2 py-3">Tanggal</th>
                                    <th class="px-2 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-light">
                                @forelse ($pengaduan as $item)
                                    <tr class="text-secondary ">
                                        <td class="px-2 py-3 text-center">
                                            {{ $item->id }}
                                        </td>
                                        <td class="px-2 py-3 text-sm">
                                            {{ $item->user_nik }}
                                        </td>
                                        <td class="px-2 py-3 text-break">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-2 py-3 text-break">
                                            {{ $item->description }}
                                        </td>
                                        <td class="px-2 py-3 text-sm">
                                            {{ $item->created_at->format('l, d F Y') }}
                                        </td>

                                        @if ($item->status == 'Belum di Proses')
                                            <td class="px-2 py-3">
                                                <span class="px-2 py-1 fw-semibold btn btn-danger btn-sm text-light">
                                                    {{ $item->status }}
                                                </span>
                                            </td>
                                        @elseif ($item->status == 'Sedang di Proses')
                                            <td class="px-2 py-3 ">
                                                <span class="px-2 py-1 fw-semibold btn btn-warning btn-sm text-light">
                                                    {{ $item->status }}
                                                </span>
                                            </td>
                                        @else
                                            <td class="px-2 py-3 ">
                                                <span class="px-2 py-1 fw-semibold btn btn-success btn-sm text-light">
                                                    {{ $item->status }}
                                                </span>
                                            </td>
                                        @endif
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
        </section>
    </main>
@endsection
