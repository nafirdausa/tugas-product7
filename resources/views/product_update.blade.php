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
                <h2 class="fs-5 fw-bold text-center">Update Data Produk</h2>
                <form action="/product/{{$list->id}}/update" method="POST">
                    @method('PUT')
                    @csrf()
                    <div class="mb-3">
                        <label for="gambar" class="form-label fw-semibold">Gambar Produk</label>
                        <input type="text" class="form-control {{$errors->has('gambar') ? 'is-invalid' : ''}}" id="gambar" name="gambar" value="{{$list->gambar}}">
                        {{-- check error --}}
                        @if ($errors->has('gambar'))
                            <div class="invalid-feedback">
                            {{ $errors->first('gambar') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" value="{{$list->nama}}">
                        {{-- check error --}}
                        @if ($errors->has('nama'))
                            <div class="invalid-feedback">
                            {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control {{$errors->has('berat') ? 'is-invalid' : ''}}" id="berat" name="berat" value="{{$list->berat}}">
                        {{-- check error --}}
                        @if ($errors->has('berat'))
                            <div class="invalid-feedback">
                            {{ $errors->first('berat') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control {{$errors->has('harga') ? 'is-invalid' : ''}}" id="harga" name="harga" value="{{$list->harga}}">
                        {{-- check error --}}
                        @if ($errors->has('harga'))
                            <div class="invalid-feedback">
                            {{ $errors->first('harga') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control {{$errors->has('stok') ? 'is-invalid' : ''}}" id="stok" name="stok" value="{{$list->stok}}">
                        {{-- check error --}}
                        @if ($errors->has('stok'))
                            <div class="invalid-feedback">
                            {{ $errors->first('stok') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="kondisi" class="form-label fw-semibold">Kondisi</label>
                        <select class="form-control {{$errors->has('kondisi') ? 'is-invalid' : ''}}" id="kondisi" name="kondisi">
                            <option value="Baru" {{$list->kondisi == 'Baru' ? 'selected' : ''}}>Baru</option>
                            <option value="Bekas" {{$list->kondisi == 'Bekas' ? 'selected' : ''}}>Bekas</option>
                        </select>
                        {{-- check error --}}
                        @if ($errors->has('kondisi'))
                            <div class="invalid-feedback">
                            {{ $errors->first('kondisi') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control {{$errors->has('deskripsi') ? 'is-invalid' : ''}}" id="deskripsi" name="deskripsi" rows="3">{{$list->deskripsi}}</textarea>
                        {{-- check error --}}
                        @if ($errors->has('deskripsi'))
                            <div class="invalid-feedback">
                            {{ $errors->first('deskripsi') }}
                            </div>
                        @endif
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
