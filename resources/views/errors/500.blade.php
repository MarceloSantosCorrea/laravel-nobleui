<x-layouts.guest>
    <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
        <img src="{{ asset('assets/images/404.svg') }}" class="img-fluid mb-2" alt="404">
        <h1 class="font-weight-bold mb-22 mt-2 tx-80 text-muted">500</h1>
        <h4 class="mb-2">Internal server error</h4>
        <h6 class="text-muted mb-3 text-center">Oopps!! There wan an error. Please try agin
            later.</h6>
        <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
    </div>
</x-layouts.guest>
