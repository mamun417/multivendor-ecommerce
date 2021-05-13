<form id="loginForm" action="{{ route('login') }}">
    @csrf

    <div id="login" data-target-group="idForm">
        <header class="text-center mb-7">
            <h2 class="h4 mb-0">Welcome Back!</h2>
            <p>Login to manage your account.</p>
        </header>

        <div class="form-group">
            <div class="js-form-message js-focus-state">
                <label class="sr-only" for="signinEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="signinEmailLabel">
                            <span class="fas fa-user"></span>
                        </span>
                    </div>
                    <input type="email" class="form-control" name="email" id="signinEmail"
                           placeholder="Email" aria-label="Email"
                           aria-describedby="signinEmailLabel" required
                           data-msg="Please enter a valid email address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success">
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="js-form-message js-focus-state">
                <label class="sr-only" for="signinPassword">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="signinPasswordLabel">
                            <span class="fas fa-lock"></span>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password"
                           id="signinPassword" placeholder="Password" aria-label="Password"
                           aria-describedby="signinPasswordLabel" required
                           data-msg="Your password is invalid. Please try again."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success">
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="d-flex justify-content-end mb-4">
            <a class="js-animation-link small link-muted" href="javascript:;"
               data-target="#forgotPassword"
               data-link-group="idForm"
               data-animation-in="slideInUp">
                Forgot Password?
            </a>
        </div>

        <div class="mb-2">
            <button onclick="$('#loginForm').submit()" class="btn btn-block btn-sm btn-primary transition-3d-hover"
                    type="submit">
                Login
            </button>
        </div>

        <div class="mb-2">
            <a href="{{ route('admin.login') }}" class="btn btn-block btn-sm btn-secondary transition-3d-hover">
                As a Vendor
            </a>
        </div>

        <div class="text-center mb-4">
            <span class="small text-muted">Do not have an account?</span>
            <a class="js-animation-link small text-dark" href=""
               data-target="#signup"
               data-link-group="idForm"
               data-animation-in="slideInUp">
                Signup
            </a>
        </div>
    </div>
</form>

@include('auth.auth-script', ['form' => 'loginForm']) {{-- form = id --}}
