@include('layout.header')
@include('layout.navbar')

<div class="container mt-5">
    <!-- Responsive Search Bar -->
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                <button class="btn btn-primary" type="button">Search</button>
            </div>
        </div>
    </div>
</div>

{{-- Carousel Section --}}
<div class="container mt-5 d-flex justify-content-center align-items-center">
    <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel" style="max-width: 90%; height: auto;">
        <div class="carousel-inner">
            <!-- First Image -->
            <div class="carousel-item active">
                <img src="{{asset('storage/images/12.jpg')}}" class="d-block w-100" alt="Image 1" style="object-fit: cover; height: 300px;">
            </div>
            <!-- Second Image -->
            <div class="carousel-item">
                <img src="{{asset('storage/images/124.jpg')}}" class="d-block w-100" alt="Image 2" style="object-fit: cover; height: 300px;">
            </div>
            <!-- Third Image -->
            <div class="carousel-item">
                <img src="{{asset('storage/images/129.jpg')}}" class="d-block w-100" alt="Image 3" style="object-fit: cover; height: 300px;">
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

{{-- product display --}}
{{-- @include('user.productdisplay') --}}

@include('layout.footer')
