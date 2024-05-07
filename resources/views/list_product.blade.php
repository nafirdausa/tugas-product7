<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5 bg-info rounded p-3">
        <div class="d-flex justify-content-between my-3">
            <div><h1 class="fs-3">List Product</h1></div>
            <div>
                <a href="/profile/{{ $akun_id }}"><button class="btn btn-primary">Lihat Profile</button></a>
                <a href="{{route('tambah_products')}}"><button class="btn btn-dark">Tambah Produk</button></a>
                <a href="{{route('product_user')}}"><button class="btn btn-secondary">Kembali ke Produk</button></a>
            </div>    
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Stok</th>
                <th scope="col">Berat</th>
                <th scope="col">Harga</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($list as $index => $item)
            <tr>
                <th scope="row">{{$index + 1}}</th>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['stok'] }}</td>
                <td>{{ $item['berat'] }}</td>
                <td>{{ $item['harga'] }}</td>
                <td>
                    @if($item['kondisi'] == 'Baru')
                    <p class="my-auto rounded bg-success px-1 py-1 fw-semibold" style="width: 43px;">
                        {{ $item['kondisi'] }}
                    </p>
                    @else
                    <p class="rounded bg-dark px-1 py-1 fw-semibold text-white" style="width: 53px;">
                        {{ $item['kondisi'] }}
                    </p>
                    @endif
                </td>
                <td class="d-flex p-3 justify-content-start">
                    <a href="/product/{{$item->id}}/update"><button type="submit" class="btn btn-warning mx-1">Update</button></a> 
                    <form action="/product/{{$item->id}}/delete" method="POST">
                        @csrf
                        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                </td>
                
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>