
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <!-- Logo and Brand Name -->
        <a class="navbar-brand d-flex align-items-center" href="#">
           <img src="{{asset('storage/images/logo.jpg')}}" alt="logo" width="100" height="70" class="d-inline-block align-text-top me-2">
        
        </a>
        <!-- Toggler Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.product.display')}}">Product</a>
                </li>
                
            
                
                <!-- About and Contact Links -->
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                
                <!-- Cart and User Account Links with Icons -->
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{route('products.cart.view')}}">
                        <i class="bi bi-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></span>
                    </a>
                </li>
                              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle"></i> Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                    <li><a class="dropdown-item" href="/login">SignIn</a></li>
                    <li><a class="dropdown-item" href="/logout"> SignOut</a></li>
                    
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>