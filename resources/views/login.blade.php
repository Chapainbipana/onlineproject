@include('layout.header')
<div class="d-flex justify-content-center align-items-center vh-100">
<form method="POST" action="{{ route('login') }}" class="w-45 mx-auto m-5 p-4 border rounded bg-secondary shadow ">
    @csrf
    <div class="icon">
        <i class="user-icon"></i>
    </div>
    <div class="mb-3 text-center">
        <h4>Login Form</h4>
    </div>
    <!-- Name -->
    <div class="form-group mb-3">
        <label for="name" class="form-label">Name</label>
        <input id="name" type="text" class="form-control" name="name" required autofocus>
    </div>

    <!-- Email Address -->
    <div class="form-group mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" class="form-control" name="email" required>
    </div>

    <!-- Password -->
    <div class="form-group mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>
    </div>

    
    <!-- Submit Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">login</button>
    </div>
   
    <div>
        <p class="mb-0">Don't have an account?  <a href="/register" class="text-white-50 fw-bold">Sign Up</a>
        </p>
      </div>
</form>
</div>
@include('layout.footer')