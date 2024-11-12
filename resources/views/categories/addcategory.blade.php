
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Category to Product: {{ $product->name }}</h1>

    <form action="{{ route('products.add_category', $product->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="category_id">Select Category:</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option name="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
@endsection
