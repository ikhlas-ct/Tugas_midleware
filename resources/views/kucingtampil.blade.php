<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KucingProduck</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row w-100 my-lg-5 bg-info rounded">
            <div class="w-100 my-5">
                <h1 class="fw-bold text-center">Product</h1>
                <a href="{{ route('posts.index') }}" class="btn btn-dark ms-3 float-end">Lihat List</a>
                <a href="{{ route('get_form') }}" class="btn btn-primary float-end">Tambah Kucing</a>

                <div class="border border-top border-dark mx-auto mt-3 mb-5" style="width: 100px"></div>

                    <div class="row row-gap-4">
                        @foreach ($produk as $product)
                        <div class="col-lg-3 mb-4">
                            <div class="card">
                                <img src="{{ $product->gambar }}" class="card-img-top" style="height: 150px;" alt="...">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title"> {{ $product->nama }} </h5>
                                        <p class=" bg-success px-2 py-1 rounded">{{ $product->kondisi }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="bg-success  px-2 py-1 rounded"> {{ $product->stock }} </p>
                                        <p class="bg-info px-2 py-1 rounded" style="overflow-wrap: break-word;">RP. {{ $product->harga }}</p>
                                        <p class="bg-info px-3 py-1 rounded">{{ $product->berat }}</p>
                                    </div>
                                    <p class="card-text">{{ Str::substr($product->deskripsi,0,100) }}</p>
                                    <a href="#" class="btn btn-primary btn-block" style="width: 100%;">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 
