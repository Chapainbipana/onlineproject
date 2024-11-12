@include('layout.header')

<div class="section">
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
        
            <a href="{{ route('products.create') }}" class="btn btn-primary mt-3">Add Product</a>
        
            
            <a href="javascript:history.back()" class="btn btn-primary mt-3">&larr; Back</a>
        </div>
        <div class="row text-center">
            <h4 class="text-center mb-4">Our Product</h4>
            @foreach ($product as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="box border p-3 rounded shadow-sm">
                        <div class="img-box mb-3">
                            <img src="{{asset('storage/images/'.$item->image)}}" alt="{{ $item->name }}" class="img-fluid" height="150px" width="200px">
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
                            <span>  <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary mt-3">Edit Product</a></span>
                            <span>  <a href="{{ route('add.category', $item->id,$item->name ) }}" class="btn btn-secondary mt-3">Add category</a></span>
                            <span><a href="{{ route('products.delete', $item->id) }}" class="btn btn-danger mt-3">Delete Product</a></span>
                        </div>
                    </div>
                </div>   
            @endforeach
        </div> 
    </div>
</div>
@include('layout.footer')
