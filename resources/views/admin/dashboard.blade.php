

@include('admin.header')
@extends('admin.layout')
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">Admin Dashboard</h4>
        <ul>
            <li><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('products.show') }}"><i class="fas fa-cogs"></i> Manage Products</a></li>
            <li><a href="{{ route('user.display') }}"><i class="fas fa-boxes"></i> Catogory Products </a></li>
            <li><a href="{{ route('user.display') }}"><i class="fas fa-users"></i> Customers</a></li>
            <li><a href="/logout"><i class="fas fa-sign-out-alt"></i> SingOut</a></li>

        </ul>
    </div>
   

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h1></h1>
            <p></p>
    
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <a href="{{ route('products.show') }}" class="text-white">
                            <h5 class="card-title"> <i class="fas fa-cogs"></i> Total Products</h5>
                            <p>{{ $totalProducts }}</p>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text">Track all the orders placed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <a href="{{ route('user.display') }}" class="text-white">
                            <h5 class="card-title"><i class="fas fa-users"></i>Total User</h5>
                            <p>{{ $totalUsers }}</p>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.footer')

    



    

