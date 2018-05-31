@extends('layouts.master')

@section('content')
 <div id="agileits-sign-in-page" class="sign-in-wrapper">
   <div class="agileinfo_signin">
   <h3>Sign In</h3>
     <form  method="post" action="{{ route('login') }}">
       @csrf

       <input type="email" placeholder="Your Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
            <strong class="text-warning">{{ $errors->first('email') }}</strong>
            </span>
         @endif

       <input type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong class="text-warning">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
       <input type="submit" value="Sign In">
     </form>
     <form>
       <div class="forgot-grid">
         <label class="checkbox"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
         <div class="forgot">
           <a href="{{ route('password.request') }}" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
         </div>
         <!-- Modal -->
         <div class="modal fade" id="myModal2" role="dialog">
           <div class="modal-dialog">
           <!-- Modal content-->
           <div class="modal-dialog modal-lg">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h3 class="w3ls-password">Get Password</h3>
                 <p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>
                 <form action="#" method="post">
                   <input type="text" class="user" name="email" placeholder="Email" required="">
                   <input type="submit" value="Submit">
                 </form>
               </div>
             </div>
           </div>
           </div>
         </div>
         <div class="clearfix"> </div>
       </div>
     </form>
     <h6> Nouveau Membre? <a href="{{ route('register') }}">Creer Un Compte</a> </h6>
   </div>
 </div>

@stop
