@extends('layouts.master')


@section('content')
<!-- sign up form -->
<section>
 <div id="agileits-sign-in-page" class="sign-in-wrapper">
   <div class="agileinfo_signin">
   <h3>Sign Up </h3>
     <form  method="post" action="{{ route('register') }}">
        @csrf

        
       <input type="text" placeholder="Your Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
         @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong class="text-warning">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

       <input type="email" placeholder="Your Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong class="text-warning">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

       <input type="tel" name="mobile" placeholder="Mobile" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong class="text-warning">{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
       <input type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong class="text-warning">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
       <input type="password" id="password-confirm" name="password_confirmation"  placeholder="Confirm Password" required>
       <div class="signin-rit">
         <span class="agree-checkbox">
           <label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="terms.html" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="privacy.html" target="_blank">Privacy Policy</a></label>
         </span>
       </div>
       <input type="submit" value="Sign Up">
     </form>
     <h6> Deja Membre? <a href="{{ route('login') }}">Se Connecter</a> </h6>
   </div>
 </div>
</section>
<!-- //sign up form -->
@stop
