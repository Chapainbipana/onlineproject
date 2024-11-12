@include('layout.header')
@include('layout.navbar')
<body class="bg-light">

    <div class="section">
        <div class="container">
            <div class="d-flex justify-content-between mb-3">
                <!-- Left-aligned "Add Product" button -->
                {{-- <a href="{{ route('products.create') }}" class="btn btn-primary mt-3">Add Product</a> --}}
            
                <!-- Right-aligned "Back" button -->
                <a href="javascript:history.back()" class="btn btn-primary mt-3">&larr; Back</a>
            </div>
            <div class="row text-center">
                <h4 class="text-center mb-4">Product</h4>
                   
                @foreach ($product as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="box border p-3 rounded shadow-sm">
                            <div class="img-box mb-3">
                                <img src="{{asset('storage/images/'.$item->image)}}" alt="{{ $item->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="detail-box">
                                <h6 class="text-primary">
                                    {{ $item->name }}
                                </h6>
                                <p>
                                    {{ $item->description }}
                                </p>
                                <h6>Price
                                    <span class="text-success">
                                        RS{{ number_format($item->price, 2) }}
                                    </span>
                                </h6>
                                
                                <span>  <a href="" class="btn btn-primary mt-3"> Product Detail</a></span>
                                <span><a href="{{ route('products.addtocart', $item->id) }}" class="btn btn-danger mt-3">Add to card</a></span>
                            </div>
                        </div>
                    </div>   
                @endforeach
    
            </div> 
        </div>
    </div>
</body>
    @include('layout.footer')