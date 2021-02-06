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
                        <h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
                        <form class="forms-sample" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"
                                       class="form-control"
                                       id="name"
                                       name="name"
                                       value="{{ old('name') }}"
                                       autocomplete="name"
                                       placeholder="Name"
                                       required
                                       autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email"
                                       id="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required
                                       placeholder="E-mail"
                                       autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       id="password"
                                       name="password"
                                       required
                                       autocomplete="new-password"
                                       placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm"
                                       type="password"
                                       class="form-control"
                                       name="password_confirmation"
                                       autocomplete="new-password"
                                       placeholder="Confirn Password"
                                       required>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <button type="submit"
                                        class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sing up
                                </button>
                                <button type="button"
                                        class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                    <i class="btn-icon-prepend" data-feather="twitter"></i>
                                    Sign up with twitter
                                </button>
                            </div>

                            <a href="{{ route('login') }}" class="d-block mt-3 text-muted">
                                Already a user? Sign in
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest>
