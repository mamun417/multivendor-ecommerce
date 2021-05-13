<form id="registerForm" action="{{ route('register') }}">
    @csrf
    @method('POST')

    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
        <header class="text-center mb-7">
            <h2 class="h4 mb-0">Welcome to Electro.</h2>
            <p>Fill out the form to get started.</p>
        </header>

        <div class="form-group">
            <div class="js-form-message js-focus-state">
                <label class="sr-only" for="signupEmail">Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="signupNameLabel">
                            <span class="fas fa-user"></span>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="name" id="signupName"
                           placeholder="Name" aria-label="name"
                           aria-describedby="signupNameLabel"
                           data-msg="Please enter your full name."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success">
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="js-form-message js-focus-state">
                <label class="sr-only" for="signupEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="signupEmailLabel">
                            <span class="fas fa-user"></span>
                        </span>
                    </div>
                    <input type="email" class="form-control" name="email" id="signupEmail"
                           placeholder="Email" aria-label="Email"
                           aria-describedby="signupEmailLabel"
                           data-msg="Please enter a valid email address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success">
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="js-form-message js-focus-state">
                <label class="sr-only" for="signupPassword">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="signupPasswordLabel">
                            <span class="fas fa-lock"></span>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password"
                           id="signupPassword" placeholder="Password" aria-label="Password"
                           aria-describedby="signupPasswordLabel"
                           data-msg="Your password is invalid. Please try again."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success">
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="js-form-message js-focus-state">
                <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="signupConfirmPasswordLabel">
                            <span class="fas fa-key"></span>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password_confirmation"
                           id="signupConfirmPassword" placeholder="Confirm Password"
                           aria-label="Confirm Password"
                           aria-describedby="signupConfirmPasswordLabel"
                           data-msg="Password does not match the confirm password."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success">
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="mb-2">
            <button class="btn btn-block btn-sm btn-primary transition-3d-hover" type="submit">
                Get Started
            </button>
        </div>

        <div class="text-center mb-4">
            <span class="small text-muted">Already have an account?</span>
            <a class="js-animation-link small text-dark" href=""
               data-target="#login"
               data-link-group="idForm"
               data-animation-in="slideInUp">
                Login
            </a>
        </div>
    </div>
</form>

@include('auth.auth-script', ['form' => 'registerForm']) {{-- form = id --}}
