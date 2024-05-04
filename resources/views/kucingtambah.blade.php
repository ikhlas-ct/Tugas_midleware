<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Kucing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <form action="{{ route('form_kucing') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row mx-auto w-50 justify-content-center bg-info rounded">
                <div class="col-8 my-5">
                    <h1 class="mb-3 text-center">Tambah Kucing Baru</h1>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" name="gambar" id="gambar" class="form-control">
                        @error('gambar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" name="umur" id="umur" class="form-control">
                        @error('umur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label">Berat</label>
                        <input type="number" name="berat" id="berat" class="form-control">
                        @error('berat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control">
                        @error('harga')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control">
                        @error('stock')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kondisi" class="form-label">Kondisi</label>
                        <select name="kondisi" id="kondisi" class="form-select">
                            <option selected disabled>Pilih Kondisi</option>
                            <option value="baru">Baru</option>
                            <option value="bekas">Bekas</option>
                            <option value="lama">Lama</option>
                        </select>
                        @error('kondisi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
                        @error('deskripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="width: 150px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>
