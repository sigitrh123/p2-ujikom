


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | Pengadu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/pengadu.svg')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')

</head>

  <body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="min-vh-100 mt-0" style="background-color: #f7d09c;">
    <div class="container">
        <div class="card w-100 w-md-50 mx-md-auto rounded-3 shadow-md">
            <div class="card-body">
                <h2 class="fw-bold text-center text-black fs-2 mb-2">Masuk</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik" :value="old('nik')" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name" :value="old('name')" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" :value="old('email')" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No Telpon</label>
                        <input type="phone" class="form-control" id="phone" placeholder="Masukkan No Telpon" name="phone" :value="old('phone')" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password_confirmation" placeholder="Masukkan Ulang Password" name="password_confirmation" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn-get-started">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>


  @include('includes.landing.javascript')

</body>

</html>
