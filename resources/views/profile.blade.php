<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container mt-3">
			<div class="text-center">
				<a href="/admin/{{$akun->id}}/list-product" class="text-center"><button class="btn btn-success">Kembali Ke Halaman Admin</button></a>
			</div>
            <div class="row mt-5">
                <div class="col border p-3 rounded border-dark border-3 mx-3">
					<div class="d-flex">
						<div class="w-50">
							<p class="fw-bold">Nama</p>
							<p class="fw-bold">Email</p>
							<p class="fw-bold">Gender</p>
							<p class="fw-bold">Umur</p>
							<p class="fw-bold">Tanggal Lahir</p>
							<p class="fw-bold">Alamat</p>
						</div>
						<div>
							<p>{{ $akun->nama_akun }}</p>
							<p>{{ $akun->email }}</p>
							<p>{{ $akun->gender }}</p>
							<p>{{ $akun->umur}} tahun</p>
							<p>{{ $akun->tgl_lahir }}</p>
							<p>{{ $akun->alamat }}</p>
						</div>
					</div>
                </div>

                <div class="col border p-3 rounded border-dark border-3">
					<div class="d-flex">
						<div class="w-50">
							<p class="fw-bold">Nama toko</p>
							<p class="fw-bold">Rate</p>
							<p class="fw-bold">Produk Terbaik</p>
							<p class="fw-bold">Deskripsi</p>
						</div>
						<div>
							<p>{{ $toko->nama_toko }}</p>
							<p>{{ $toko->rate }}</p>
							<p>{{ $toko->produk_terbaik }}</p>
							<p>{{ $toko->deskripsi}}</p>
						</div>
					</div>
                </div>
            </div>
         
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>