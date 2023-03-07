@extends('layouts.masyarakat')

@section('title')
Data Pengaduan
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="card shadow-sm rounded-3 border-0 mt-5">
                <div class="card-body">
                    <h2 class="fw-semibold mb-3">Data Aduanmu</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{ Storage::url($item->image) }}" alt="" loading="lazy"  class="w-50 mx-auto"></td>
                            <td>{{ $item->created_at->format('l, d F Y - H:i:s') }}</td>
                            @if($item->status =='Belum di Proses')
                                <td><span class="badge bg-danger">{{ $item->status }}</span></td>
                            @elseif ($item->status =='Sedang di Proses')
                                <td><span class="badge bg-warning">{{ $item->status }}</span></td>
                            @else
                                <td><span class="badge bg-success">{{ $item->status }}</span></td>
                            @endif
                            <td>
                                <a href="{{ route('pengaduan.show', $item->id)}}" class="btn btn-success btn-sm fw-semibold">Lihat</a>
                            </td>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center text-secondary">
                                    Data Kosong
                                </td>
                            </tr>
                            @endforelse
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
