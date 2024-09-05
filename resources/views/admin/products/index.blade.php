@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="my-4">Daftar Produk</h1>
    <a href="{{ route('admin.products.create') }}" class="btn mb-3" style="background-color: #b79e79;">Tambah Produk</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle" style="background-color: #b79e79;">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->description }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="text-center">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="img-thumbnail" width="50" height="50">
                            @else
                                <span class="text-muted">Tidak Ada Gambar</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
