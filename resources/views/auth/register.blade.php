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

                <div >

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex flex-column align-items-center justify-content-center bg-br-primary ht-100v">

                            <div class="login-wrapper wd-500 wd-xs-450 pd-15 bg-white h-40 rounded-top">{{ __('Register') }}</div>

                            <div class="login-wrapper wd-500 wd-xs-450 pd-25 pd-xs-40 bg-white rounded-bottom  shadow-base">

                                    <x-package-input
                                    type="name" name="name" value="{{ old('name') }}"
                                    placeholder="{{ __('Name') }}"
                                    required="true"
                                    :message=`{{ $message }}`
                                    />
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
                                    <div class="form-group mb-3">
                                        <input id="password-confirm"
                                          class="form-control "
                                          placeholder="{{ __('Confirm Password')  }}"
                                          type="password" class="form-control"
                                          name="password_confirmation"
                                          required autocomplete="new-password">
                                    </div>


                                <button type="submit" class="btn btn-info btn-block">Register</button>

                                <div class="mg-t-60 tx-center">Already a member? <a href="{{ route('login') }}"class="tx-info">Sign In</a></div>


                           </div><!-- login-wrapper -->
                        </div><!-- d-flex -->
                     </form>

</div>

