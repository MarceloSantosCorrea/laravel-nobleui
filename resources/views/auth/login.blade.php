<x-layouts.guest>
    <div class="col-md-8 col-xl-6 mx-auto">
        <div class="card">
            <div class="row">
                <div class="col-md-4 pr-md-0">
                    <div class="auth-left-wrapper">

                    </div>
                </div>
                <div class="col-md-8 pl-md-0">
                    <div class="auth-form-wrapper px-4 py-5">
                        <a href="#" class="noble-ui-logo d-block mb-2">Maxim <span>Web</span></a>
                        <h5 class="text-muted font-weight-normal mb-4">
                            Welcome back! Log in to your account.
                        </h5>
                        <form class="forms-sample" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email"
                                       name="email"
                                       class="form-control  @error('email') is-invalid @enderror"
                                       id="email"
                                       placeholder="Email"
                                       required
                                       autocomplete="email"
                                       autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       required
                                       id="password"
                                       autocomplete="current-password"
                                       placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember"
                                           class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                    Remember me
                                </label>
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                        class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login
                                </button>
                                <button type="button"
                                        class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                    <i class="btn-icon-prepend" data-feather="twitter"></i>
                                    Login with twitter
                                </button>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="d-block mt-3 text-muted">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="d-block mt-3 text-muted">
                                    {{ __('Not a user? Sign up') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest>
