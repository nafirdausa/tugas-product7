<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 border border-3 border-black p-2">
                    {{-- user --}}
                    <p>Nama : {{ $akun->nama_akun }}</p>
                    <p>email:  {{ $akun->email }}</p>
                    <p>gender :  {{ $akun->gender }}</p>
                    <p>umur :  {{ $akun->umur}} tahun</p>
                    <p>tanggal lahir  :  {{ $akun->tgl_lahir }}</p>
                    <p>Alamat  :  {{ $akun->alamat }}</p>
                </div>
                <div class="col-6 border border-3 border-black p-2">
                    {{-- user --}}
                    <p>Nama toko : {{ $toko->nama_toko }}</p>
                    <p>rate:  {{ $toko->rate }}</p>
                    <p>produk terbaik :  {{ $toko->produk_terbaik }}</p>
                    <p>deskripsi:  {{ $toko->deskripsi}}</p>
                </div>
            </div>
         
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>