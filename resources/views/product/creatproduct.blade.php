@include('layout.header')
<div class="container m-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="w-45 mx-auto m-5 p-4 border rounded bg-secondary shadow " >
        @csrf
        <div class="mb-3 text-center">
            <h4>Add New Product</h4>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        
        <div class="d-flex justify-content-between mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="javascript:history.back()" class="btn btn-primary">&larr; Back</a>
        </div>
    </form>
    </div>
</div>