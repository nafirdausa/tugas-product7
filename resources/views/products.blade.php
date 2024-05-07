<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User-Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   
   <div class="mx-lg-5 mt-lg-5 mb-lg-3">
<div class="rounded bg-info pt-3 pb-3">
<h2 class="text-center fw-bold mt-2">PRODUCTS</h2>
<div class="mt-3 bg-dark mx-auto rounded" style="height: 3px;width: 75px"></div>
@foreach($list as $item)
<div >
    <a href="/admin/1/list-product" style="position:absolute; top:80px; left:70px;"><button class="btn btn-primary rounded ">Halaman Pengguna Admin</button></a>
    <a href="/admin/2/list-product" style="position:absolute; top:80px; right:70px;"><button class="btn btn-success rounded ">Halaman Pengguna Merchant</button></a>
</div>
@endforeach
{{-- <div style="position:absolute; top:80px; right:70px;">
    <a href="{{route('product')}}"><button class="btn btn-success rounded ">Halaman Pengguna Merchant</button></a>
</div> --}}
    <div class="grid mx-3 mt-4">
                <div class="row row-gap-4">
                    @foreach ($list as $item)
                        <div class="col-3">
                            <div class="card bg-white w-100">
                                <img class="rounded" src="{{ $item['gambar'] }}">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title fw-bold my-auto" style="font-size: 24px">{{ $item['nama'] }}
                                        </p>
                                        @if($item['kondisi'] == 'Baru')
                                            <p class="my-auto rounded bg-success px-2 py-1 fw-semibold" style="font-size: 16px">
                                                {{ $item['kondisi'] }}
                                            </p>
                                        @else
                                            <p class="my-auto rounded bg-warning px-2 py-1 fw-semibold" style="font-size: 16px">
                                                {{ $item['kondisi'] }}
                                            </p>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="my-auto rounded bg-success px-2 py-1 fw-semibold" style="font-size: 16px">
                                            {{ $item['stok'] }}
                                        </p>
                                        <p class="my-auto rounded bg-info px-2 py-1 fw-semibold" style="font-size: 16px">Rp.
                                            {{ number_format($item['harga'], 0, ',', '.') }}
                                        </p>
                                        <p class="my-auto rounded bg-secondary px-2 py-1 fw-semibold" style="font-size: 16px">
                                            {{ $item['berat'] }} gram
                                        </p>
                                    </div>
                                    <p class=""
                                        style="overflow: hidden;max-width: 400px; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; margin: 20px auto;">
                                        {{ $item['deskripsi'] }}
                                    </p>
                                    <button class="btn btn-primary w-100">Pesan Sekarang</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
