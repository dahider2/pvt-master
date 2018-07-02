@extends('layouts.master')

@section('content')

<!-- breadcrumbs -->
<div class="w3layouts-breadcrumbs text-center">
  <div class="container">
    <span class="agile-breadcrumbs"><a href="{{url('postad')}}"><i class="fa fa-home home_1"></i></a> / <span>Post your Ad</span></span>
  </div>
</div>
<!-- //breadcrumbs -->
<!-- Submit Ad -->
<div class="submit-ad main-grid-border">
  <div class="container">
    <h2 class="w3-head">Faire une annonce </h2>
    <div class="post-ad-form">

      <form method="POST" action="{{ url('/postad') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="clearfix"></div>
        <label>Choisir la categorie <span>*</span></label>
            <select class="" name="category" id="category">
              @foreach($categories as $category)
              <option value='{{ $category->id }}'>{{ $category->name }}</option>
              @endforeach
            </select>

        <div class="clearfix"></div>
        <div id="subcat" name="subcat">
          <label>Choisir la Sous categorie <span>*</span></label>
              <select class="" name="subcategory" id="subcategory">
                <!-- <<option value=""></option> -->
          </select>
        </div>
        <div class="clearfix"></div>

        <!-- <meta name="_token" content="{{ csrf_token() }}"> -->

            <label>Choisir la ville <span>*</span></label>
            <select class="" name="cities" id="cities">
              @foreach($cities as $city)
              <option value='{{$city->id}}'>{{ $city->name }} </option>
              @endforeach
            </select>

            <div class="clearfix"></div>
            <div name="divarea" id="divarea">
                <label>Choisir le quartier <span>*</span></label>
                <select class="" name="area" id="area">
                  <!-- <option></option> -->
                </select>
            </div>


            <div class="clearfix"></div>
            <label>Le titre de votre article <span>*</span></label>
            <input type="text" name="title" class="phone" placeholder="">
            <div class="clearfix"></div>
            <label>Decrivrez votre article <span>*</span></label>
            <textarea class="mess" name="description" placeholder="Decrire votre article ici ..."></textarea>
            <div class="clearfix"></div>

            <label>Prix <span>* </span></label>
            <input type="text" name="price" class="price" placeholder="">
            <div class="clearfix"></div>

            <div class="upload-ad-photos">
            <label>Photos de votre articles :</label>
            <div class="photos-upload-view">
              <div id="upload">
              <!-- <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" /> -->
              <div>
                <input type="file" id="fileselect" name="images[]" multiple="multiple" />
                <!-- <div id="filedrag">or drop files here</div> -->
              </div>
              <!-- <div id="submitbutton">
                <button type="submit">Upload Files</button>
              </div> -->

            </div>

              <div id="messages">
              <p>Status Messages</p>
              </div>
              </div>
            <div class="clearfix"></div>
              <script src="js/filedrag.js"></script>
            </div>
          @if(Auth::user())
          <input type="hidden" name="email" class="" id="email" placeholder="" value="{{ Auth::user()->email }}">
          <input type="hidden" name="name" class="name" placeholder="" value = "{{ Auth::user()->name }}">
          <input type="hidden" name="mobile" class="" placeholder="" value = "{{ Auth::user()->mobile }}" >
          @endif

          @if(!Auth::user())
          <!--  BECAUSE WE DO NOT NEED TO ASK THOSE DETAILS TO THE USER WHO'S ALREADY IN OUR DATABASE-->
                  <div class="personal-details">
            <!-- <form> -->
                  <label>Ton Email  <span>*</span></label>
                  <input type="text" name="email" class="name form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="" >
                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                      <strong class="text-warning">{{ $errors->first('email') }}</strong>
                      </span>
                  @endif

                  <div class="clearfix"></div>
                  <label>Ton mot de passe <span>*</span></label>
                  <input type="text" name="password" class="name form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="" >
                  @if ($errors->has('password'))
                  <span class="invalid-feedback">
                    <strong class="text-warning">{{ $errors->first('password') }}</strong>
                  </span>
                  @endif

              <div id="divdetails">

                  <label>Confirmer Ton mot de passe <span>*</span></label>
                  <input type="text" name="password_confirmation" class="name form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="" >
                  @if ($errors->has('password'))
                  <span class="invalid-feedback">
                    <strong class="text-warning">{{ $errors->first('password') }}</strong>
                  </span>
                  @endif

                  <div class="clearfix"></div>

                  <label>Ton Nom <span>*</span></label>
                  <input type="text" name="name" class="name" placeholder="" >
                  <div class="clearfix"></div>

                  <label>Ton Numero <span>*</span></label>
                  <input type="text" name="mobile" class="phone form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="" >

                  @if ($errors->has('mobile'))
                    <span class="invalid-feedback">
                      <strong class="text-warning">{{ $errors->first('mobile') }}</strong>
                    </span>
                  @endif

                  <!-- <div class="clearfix"></div> -->
              </div>

            @endif
            <div class="clearfix"></div>

              <p class="post-terms">En cliquant sur <strong>publier </strong> vous acceptez nos <a href="terms.html" target="_blank">terme d'utilisation </a> et <a href="privacy.html" target="_blank"> Regles des informations </a></p>
            <input type="submit" value="Publier">
            <div class="clearfix"></div>
             <!-- </form> -->
            </div>

          </div>
        <div class="clearfix"></div>
          <script src="js/filedrag.js"></script>
      </div>

      </div>
    </div>
  </div>
</form>

<!-- <script src="{!! asset('plugins/jQuery/jquery-2.2.3.min.js') !!}"></script>  -->


  <script type="text/javascript">
    jQuery(document).ready(function(){
          $("#subcat").hide();
          $("#divarea").hide();
            jQuery('#cities').on('change',function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
              console.log(jQuery('#category').val());

               jQuery.ajax({
                  url: "{{ url('/postad/get-city-lists') }}",
                  method: 'get',
                  data: {
                     cat_id: jQuery('#cities').val()
                  },
                  success: function(result){
                     console.log(result);
                     if(result.length>1){
                       $("#divarea").slideDown();
                     }else{
                       $("#divarea").hide();
                     }
                     if(result){
                       $('#area').empty();
                       $("#area").append('<option> Select </option>');
                       $.each(result, function(key,value){
                         $("#area").append('<option value="'+value.id+'">'+value.name+'</option>');
                         console.log(key);
                       });
                     }else{
                       $('#area').empty();

                     }
                  }});
               });
            // });

            //ajax call for subCategory

            jQuery('#category').on('change',function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
              console.log(jQuery('#category').val());

               jQuery.ajax({
                  url: "{{ url('/postad/get-sub-cat-lists') }}",
                  method: 'get',
                  data: {
                     parent_id: jQuery('#category').val()
                  },
                  success: function(result){
                     console.log(result);

                     if(result.length>1){
                       $("#subcat").slideDown();
                     }else{
                       $("#subcat").hide();
                     }
                     if(result){
                       $('#subcategory').empty();
                       $("#subcategory").append('<option> Select </option>');
                       $.each(result,function(key,value){
                         $("#subcategory").append('<option value="'+value.id+'">'+value.name+'</option>');
                        //  console.log(key.id);
                       });
                     }else{
                       $('#subcategory').empty();

                     }

                  }});
               });

            // ajax call for email validation
            jQuery('#email').on('change',function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                });
              // console.log(jQuery('#email').val());

               jQuery.ajax({
                  url: "{{ url('/postad/get-email-user') }}",
                  method: 'get',
                  data: {
                     email: jQuery('#email').val()
                  },
                  success: function(result){
                     if(result.id != null){
                       console.log(result);
                       $("#divdetails").slideUp();
                     }
                     else{
                       $("#divdetails").slideDown();
                     }
                  }
                });
               });
            });
            </script>
@stop
