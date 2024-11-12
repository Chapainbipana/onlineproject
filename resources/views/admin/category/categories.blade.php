 @extends('admin.layout') 

 @section('content') 
    <h1>Product Categories</h1>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
 @endsection