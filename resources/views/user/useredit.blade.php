@include('layout.header')
<div class="d-flex justify-content-center align-items-center vh-100">
<form method="POST" action="{{ route('user.edit', ['id' => $dataEdit->id]) }}" class="w-45 mx-auto m-5 p-4 border rounded bg-secondary shadow ">
    @csrf
    
    <div class="mb-3 text-center">
        <h4>Edit Information</h4>
    </div>
    <input type="hidden" name="id" value="{{ $dataEdit->id }}">
    <!-- Name -->
    <div class="form-group mb-3">
        <label for="name" class="form-label">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{$dataEdit->name}}" required autofocus>
    </div>

    <!-- Email Address -->
    <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{$dataEdit->email}}">
    </div>

    

   

    <!-- Submit Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
{{-- back button --}}

    <div class="d-flex justify-content-start mb-3">
        <a href="javascript:history.back()" class="btn btn-primary">&larr; Back</a>
    </div>
    
</form>
</div>
@include('layout.footer')