@include('layout.header')
@include('layout.navbar')
<div class="container my-5">
    <h1 class="mb-4 content center">Your Shopping Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cart) > 0)
        <div class="row">
            @foreach($cart as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Product Image -->
                        <img src="{{ asset('storage/images/'.$item->image) }}" alt="{{ $item->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">

                        <!-- Card Body with Product Details -->
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">Price: RS{{ number_format($item->price, 2) }}</p>

                            <!-- Remove Button -->
                            <form action="{{ route('products.cart.remove', $item->id) }}" method="POST" class="mt-auto">
                                @csrf
                                
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Checkout Button -->
        <div class="text-center">
            {{-- <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a> --}}
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@include('layout.footer')