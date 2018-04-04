@extends('layouts.master')


@section('content')
<!-- sign up form -->
<section>
 <div id="agileits-sign-in-page" class="sign-in-wrapper">
   <div class="agileinfo_signin">
   <h3>Sign Up </h3>
     <form  method="post">

        {{ csrf_field() }}
        
       <input type="text" name="Name" placeholder="Your Name" required="">
       <input type="email" name="Email" placeholder="Your Email" required="">
       <input type="tel" name="tel" placeholder="Mobile" required="">
       <input type="password" name="Password" placeholder="Password" required="">
       <input type="password" name="Password" placeholder="Confirm Password" required="">
       <div class="signin-rit">
         <span class="agree-checkbox">
           <label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="terms.html" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="privacy.html" target="_blank">Privacy Policy</a></label>
         </span>
       </div>
       <input type="submit" value="Sign Up">
     </form>
   </div>
 </div>
</section>
<!-- //sign up form -->
@stop
