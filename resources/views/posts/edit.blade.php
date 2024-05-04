@extends('layout.master')
@section('content')
<div class="mt-5">

    @if ($errors->any())
        <div class="alert alert-danger mt-3">Plese check the form below for errors</div>
    @endif

    <div class="card w-50 bg-info mx-auto"  >
        <h1 style="text-align: center">Edit Produk</h1>
        <div class="card-body">
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Produk</label>
                    <input type="text" class="form-control {{$errors->has('gambar') ? 'is-invalid' : ''}}" id="gambar" name="gambar" value="{{$post->gambar}}">
                    {{-- check error --}}
                    @if ($errors->has('gambar'))
                        <div class="invalid-feedback">
                            {{ $errors->first('gambar') }}
                        </div>
                    @endif
                </div>
          
                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama" value="{{$post->nama}}">
                    @if ($errors->has('nama'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>  
                <div class="mb-3">
                    <label for="berat" class="form-label">berat</label>
                    <input type="text" class="form-control {{$errors->has('berat') ? 'is-invalid' : ''}}" id="berat" name="berat" value="{{$post->berat}}">
                    @if ($errors->has('berat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('berat') }}
                        </div>
                    @endif
                </div>  
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="text" class="form-control {{$errors->has('harga') ? 'is-invalid' : ''}}" id="harga" name="harga" value="{{$post->harga}}">
                    @if ($errors->has('harga'))
                        <div class="invalid-feedback">
                            {{ $errors->first('harga') }}
                        </div>
                    @endif
                </div> 

                 <div class="mb-3">
                    <label for="stock" class="form-label">stock</label>
                    <input type="stock" class="form-control {{$errors->has('stock') ? 'is-invalid' : ''}}" id="stock" name="stock" value="{{$post->stock}}">
                    @if ($errors->has('stock'))
                        <div class="invalid-feedback">
                            {{ $errors->first('stock') }}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <select name="kondisi" id="kondisi" class="form-select {{$errors->has('kondisi') ? 'is-invalid' : ''}}">
                        <option value="" disabled selected>Pilih Kondisi</option>
                        <option value="baru" {{ $post->kondisi == 'baru' ? 'selected' : '' }}>Baru</option>
                        <option value="bekas" {{ $post->kondisi == 'bekas' ? 'selected' : '' }}>Bekas</option>
                        <option value="lama" {{ $post->kondisi == 'lama' ? 'selected' : '' }}>Lama</option>
                    </select>
                
                    @if ($errors->has('kondisi'))
                        <div class="invalid-feedback">
                            {{ $errors->first('kondisi') }}
                        </div>
                    @endif
                </div>
                

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control {{$errors->has('deskripsi') ? 'is-invalid' : ''}}" id="deskripsi" name="deskripsi" rows="4">{{$post->deskripsi}}</textarea>
                    @if ($errors->has('deskripsi'))
                        <div class="invalid-feedback">
                            {{ $errors->first('deskripsi') }}
                        </div>
                    @endif
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark mx-auto w-25">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection