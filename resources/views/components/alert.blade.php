<div class="alert alert-{{ $fill ? 'fill-': '' }}{{ $type }} {{ $dismiss ? 'alert-dismissible fade show': null }}" role="alert">
    @if($icon != '')
        <i data-feather="{{ $icon }}"></i>
    @endif
    {{ $message }}
    {{ $slot }}
    @if($dismiss)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif
</div>
