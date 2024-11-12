@include('layout.header')
<div class="d-flex justify-content-center align-items-center vh-100">
<form method="POST" action="{{ route('register') }}" class="w-45 mx-auto m-5 p-4 border rounded bg-secondary shadow ">
    @csrf
    <div class="icon">
        <i class="user-icon"></i>
    </div>
    <div class="mb-3 text-center">
        <h4>Registration Form</h4>
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

    <!-- Confirm Password -->
    <div class="form-group mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
    </div>

    <!-- Submit Button -->
    
    <div class="d-flex justify-content-start mb-3">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
    <div class="d-flex justify-content-start mb-3">
        <a href="javascript:history.back()" class="btn btn-primary">&larr; Back</a>
    </div>
    <div>
        <p class="mb-0">You Have an Already account? <a href="/login" class="text-white-50 fw-bold">Sign In</a>
        </p>
      </div>
</form>
</div>
@include('layout.footer')