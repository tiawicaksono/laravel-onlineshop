<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}" defer></script>
    {{-- <script src="{{ asset('js/jquery.fileuploader.min.js') }}" defer></script> --}}
    <script src="{{ asset('js/login.js') }}" defer></script>
    {{-- <script src="{{ asset('js/jquery.fileuploader.js') }}" defer></script> --}}
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/jquery.fileuploader.css') }}" rel="stylesheet"> --}}
</head>
    <body>
        <div id="container" class="container">
            <!-- FORM SECTION -->
            <div class="row">
                <!-- SIGN UP -->
                <div class="col align-items-center flex-col sign-up">
                    <div class="form-wrapper align-items-center">
                        <div class="form sign-up">
                            <form id="submit_form">
                                <div class="input-group">
                                    <i class='bx bxs-user'></i>
                                    <input type="text" placeholder="Name" id="txtUsername" name="txtUsername" required>
                                </div>
                                <div class="input-group">
                                    <i class='bx bx-mail-send'></i>
                                    <input type="email" placeholder="Email" name="txtEmail" id="txtEmail" required>
                                </div>
                                <div class="input-group">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" placeholder="Password" id="txtPassword" name="txtPassword" required>
                                    {{-- pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" --}}
                                </div>
                                <div class="input-group">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Confirm password" required>
                                </div>
                                {{-- <input type="file" name="file" placeholder="Choose File" id="file"> --}}
                                <button type="submit" name="btnSignup" id="btnSignup">
                                    Sign up
                                </button>
                            </form>
                                <p>
                                    <span>
                                        Already have an account?
                                    </span>
                                    <b onclick="toggle()" class="pointer">
                                        Sign in here
                                    </b>
                                </p>
                            
                        </div>
                    </div>
                
                </div>
                <!-- END SIGN UP -->
                <!-- SIGN IN -->
                <div class="col align-items-center flex-col sign-in">
                    <div class="form-wrapper align-items-center">
                        <div class="form sign-in">
                            <form id="signin-form">
                                <div class="input-group">
                                    <i class='bx bxs-user'></i>
                                    <input type="text" placeholder="Email" id="sigin_email" name="sigin_email">
                                </div>
                                <div class="input-group">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" placeholder="Password" id="sigin_password" name="sigin_password">
                                </div>
                                <button type="submit" name="btnSignin" id="btnSignin">
                                    Sign in
                                </button>
                            </form>
                            <p>
                                <b>
                                    Forgot password?
                                </b>
                            </p>
                            <p>
                                <span>
                                    Don't have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    Sign up here
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="form-wrapper">
            
                    </div>
                </div>
                <!-- END SIGN IN -->
            </div>
            <!-- END FORM SECTION -->
            <!-- CONTENT SECTION -->
            <div class="row content-row">
                <!-- SIGN IN CONTENT -->
                <div class="col align-items-center flex-col">
                    <div class="text sign-in">
                        <h2>
                            Welcome
                        </h2>

                    </div>
                    <div class="img sign-in">
            
                    </div>
                </div>
                <!-- END SIGN IN CONTENT -->
                <!-- SIGN UP CONTENT -->
                <div class="col align-items-center flex-col">
                    <div class="img sign-up">
                    
                    </div>
                    <div class="text sign-up">
                        <h2>
                            Join with us
                        </h2>

                    </div>
                </div>
                <!-- END SIGN UP CONTENT -->
            </div>
            <!-- END CONTENT SECTION -->
        </div>
    </body>
</html>