@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Keranjang Belanja</h2>
    
    @if(session('cart') && count(session('cart')) > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach(session('cart') as $id => $details)
                <tr>
                    <td>{{ $details['name'] }}</td>
                    <td>
                        <form action="{{ route('cart.update', $id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="form-control w-50 d-inline-block" min="1">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </form>
                    </td>
                    <td>{{ number_format($details['price'], 2) }}</td>
                    <td>{{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-right">
        <h4>Total: Rp {{ number_format($total, 2) }}</h4>
    </div>

    <div class="mt-4">
        <a href="{{ route('checkout') }}" class="btn btn-success">Lanjut ke Pembayaran</a>
    </div>

    @else
        <div class="alert alert-info">Keranjang belanja Anda kosong.</div>
    @endif
</div>
@endsection
