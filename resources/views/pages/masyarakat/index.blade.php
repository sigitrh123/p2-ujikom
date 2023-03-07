@extends('layouts.masyarakat')

@section('title')
Dashboard
@endsection
@section('content')

<section>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card shadow-sm rounded-3 border-0 mt-5">
            <div class="card-body">
                <h2 class="fw-semibold mb-3">Laporkan Aduanmu</h2>
                <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <textarea class="form-control" id="description" rows="3" placeholder="Masukkan laporanmu dengan benar dan sertakan kronologi nya dengan jelas" value="{{ old('description')}}"
                    name="description"></textarea>
                    <div class="mt-3">
                        <label for="image" class="form-label">Sertakan Bukti Gambar</label>
                        <input class="form-control" type="file" id="image" value="{{ old('image')}}" name="image" >
                      </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn fw-semibold">Lapor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- <main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
    </h2>


    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
      @csrf

      <div class="px-4 py-3 mb-8 bg-red-300 rounded-lg shadow-xl border-2 dark:bg-gray-800">
        <label class="block text-sm">
          <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
           Form Laporan
          </h2>
          <textarea
            class="block w-full mt-1 text-sm border-2 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Isi laporan Anda dan sertakan lokasi dengan jelas" value="{{ old('description')}}"
            name="description"></textarea>
        </label>

        <label for="image" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Foto</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="file" value="{{ old('image')}}" name="image" />
        </label>
        <button
        style="width: 100%"
         type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
          Laporkan
        </button>
        <button
        style="width: 100%"
         type="back"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-red">
          <a href="/">Kembali ke halaman utama</a>
        </button>

      </div>
    </form>
</main> --}}
@endsection
