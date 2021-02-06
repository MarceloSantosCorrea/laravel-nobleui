<x-layouts.app>
    @push('plugins_css')
        {{--    <link rel="stylesheet" href="{{ asset('assets/vendors/cropperjs/cropper.min.css') }}">--}}
    @endpush
    <div class="page-content"></div>
    @push('plugins_js')
        {{--    <script src="{{ asset('assets/vendors/cropperjs/cropper.min.js') }}"></script>--}}
    @endpush
    @push('scripts')
        {{--    <script src="{{ asset('assets/js/cropper.js') }}"></script>--}}
    @endpush
</x-layouts.app>
