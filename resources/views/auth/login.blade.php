<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <!-- Bracket CSS -->
    <link href="{{ asset('css/bracket.css') }}" rel="stylesheet">
  </head>

<div class="">



                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex  flex-column align-items-center justify-content-center bg-br-primary ht-100v">
                            <div class="login-wrapper wd-300 wd-xs-350 pd-15 bg-white h-40 rounded-top">{{ __('Login') }}</div>

                            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded-bottom shadow-base">

                                    <x-package-input
                                    type="email" name="email" value="{{ old('email') }}"
                                    placeholder="{{ __('E-Mail Address') }}"
                                    required="true"
                                    :message=`{{ $message }}`
                                    />

                                    <x-package-input
                                    type="password" name="password" value="{{ old('oassword') }}"
                                    placeholder="{{ __('Password') }}"
                                    required="true"
                                    :message={{ $message }}
                                    />

                                <div d-flex>
                                    <label>Selecciona un metodo de login </label>
                                    <select name="methodLogin" required>
                                        <option value="local" selected="true">Local</option>
                                        <option value="ldap">Ldap</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info btn-block">Sign In</button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link pt-0" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                                <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ route('register') }}"class="tx-info">Sign Up</a></div>

                           </div><!-- login-wrapper -->
                        </div><!-- d-flex -->
                     </form>




</div>
