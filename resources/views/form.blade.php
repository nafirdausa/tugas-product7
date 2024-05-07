<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container p-3 mt-2">
        @if (Session::has('error'))
            <div class="row">
                <div class="col-md-4 offset-4 bg-danger mb-2 rounded">
                <p class="align-items-center text-light fw-semibold">{{Session::get('error')}}</p>
                </div>
            </div>
        @endif
    
        <div class="row">
            <div class="col-md-4 offset-4 bg-info p-2 rounded">
                <h2 class="fs-5 fw-bold text-center">Tambah Data Produk</h2>
                <form action="{{route('createproducts')}}" method="POST">
                    @csrf()
                    <div class="mb-3">
                        <label for="gambar" class="form-label fw-semibold">Gambar Produk</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Masukkan gambar produk" name="gambar" id="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Masukkan nama produk" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control form-control-sm" placeholder="Masukkan berat produk" name="berat" id="berat">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control form-control-sm" placeholder="Masukkan harga produk" name="harga" id="harga">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control form-control-sm" placeholder="Masukkan stok produk" name="stok" id="stok">
                    </div>
                    <div class="mb-3">
                        <label for="kondisi" class="form-label fw-semibold">Kondisi</label>
                        <select class="form-select form-select-sm" aria-label="Default select example" name="kondisi">
                            <option selected>Pilih Kondisi Barang</option>
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control form-control-sm" id="deskripsi" rows="3" name="deskripsi" placeholder="Masukkan deskripsi produk"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
