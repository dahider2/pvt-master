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
    <h2 class="w3-head">Post an Ad</h2>
    <div class="post-ad-form">
      <form method="POST" action="" enctype="multipart/form-data">
          {{ csrf_field() }}

            <label>Select Category <span>*</span></label>
            <select class="" name="titre">
              <option>Select Category</option>
              <option>Mobiles</option>
              <option>Electronics and Appliances</option>

            </select>
            <div class="clearfix"></div>
            <label>Le titre de votre article <span>*</span></label>
            <input type="text" name="title" class="phone" placeholder="">
            <div class="clearfix"></div>
            <label>Decrivrez votre article <span>*</span></label>
            <textarea class="mess" name="description" placeholder="Decrire votre article ici ..."></textarea>
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
            <div class="personal-details">
            <!-- <form> -->
              <label>Ton Nom <span>*</span></label>
              <input type="text" name="name" class="name" placeholder="">
              <div class="clearfix"></div>
              <label>Ton Numero <span>*</span></label>
              <input type="text" name="phone" class="phone" placeholder="">
              <label>Prix <span>*</span></label>
              <input type="text" name="price" class="price" placeholder="">
              <div class="clearfix"></div>
              <label>Ville <span>*</span></label>
              <input type="text" name="city" class="city" placeholder="">
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

@stop
