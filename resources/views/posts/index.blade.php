@extends('layout.master')
@section('content')
    <div class="mt-5">
        {{-- check session --}}
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row mx-auto w-100 justify-content-center bg-info rounded p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h2> List Product</h2>
                <div>
                    <a href="{{ route('form_kucing')}}" class="btn btn-dark ms-3">Tambah Produk    </a>
                    <a href="{{ route('kucing-amademy')}}" class="btn btn-dark ms-3">Kembali Ke Product</a>
                </div>
            </div>
            
            
        <table class="table table-bordered table-striped">
            <thead>
                <tr style="text-align: center">
                    <th>NO</th> 
                    <th>Nama</th>
                    <th>Stock</th>
                    <th>Berat</th>
                    <th>Harga </th>
                    <th>Kondisi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="fw-semibold text-center">
                        <td>{{ $loop->iteration + $posts->firstItem() - 1 }}</td>
                        <td>{{ $post->nama }}</td>
                        <td>{{ $post->stock }}</td>
                        <td>{{ $post->berat }}</td>
                        <td>{{ $post->harga }}</td>
                        <td>
                            @if ($post->kondisi == "baru")
                            <span class="badge bg-success font-weight-bold px-4 py-2 m-1 fs-6">{{ $post->kondisi }}</span>
                            @elseif ($post->kondisi == "lama")
                                <span class="badge bg-secondary px-4 py-2 m-1 fs-6">{{ $post->kondisi }}</span>
                            @elseif ($post->kondisi == "bekas")
                                <span class="badge bg-warning text-dark px-4 py-2 m-1 fs-6">{{ $post->kondisi }}</span>
                            @else
                                <span>{{ $post->kondisi }}</span>
                            @endif
                        </td>
                        <td class="justify-content-md-between text-center"> 
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Update</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
       
        
    </div>
</div>

   
@endsection