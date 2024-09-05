@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card text-white" style="background-color: #b79e79">
                <div class="card-header">Total Orders</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalOrders }} Orders</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white"style="background-color: #b79e79">
                <div class="card-header">Total Quantity Sold</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalQuantitySold }} Items</h5>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="{{ route('admin.products.index') }}" class="btn"style="background-color: #b79e79">Manage Products</a>
</div>
@endsection
