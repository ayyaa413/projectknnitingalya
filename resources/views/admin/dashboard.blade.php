@extends('admin.layout')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Selamat datang, {{ Auth::user()->name }}!</p>
    <p>Jumlah Pesanan: {{ $ordersCount }}</p>
    <p>Jumlah Barang Terjual: {{ $soldItemsCount }}</p>
@endsection