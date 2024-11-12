
@include('layout.header')
<div class="section w-100">
    <div class="container-fluid px-3 px-md-5"> <!-- Added padding for small screens -->
        <div class="d-flex justify-content-between mb-3">
            <!-- Left-aligned "Add Product" button -->
            <a href="{{ route('register') }}" class="btn btn-primary mt-3">User Add</a>
        
            <!-- Right-aligned "Back" button -->
            <a href="javascript:history.back()" class="btn btn-primary mt-3">&larr; Back</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6"> <!-- Full width on extra small screens -->
                <div class="mb-3 text-center">
                    <h4>User</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($totaluser as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td><a href='{{"/edit/".$item->id}}' class="btn btn-warning btn-sm">Edit</a></td>
                                <td><a href='{{"/delete/".$item->id}}' class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')