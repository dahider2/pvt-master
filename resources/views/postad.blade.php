@extends('layouts.master')

@section('content')

<!-- breadcrumbs -->

<!-- //breadcrumbs -->
<!-- Submit Ad -->
<div class="submit-ad main-grid-border">
  <div class="container-fluid">
    <h2 class="w3-head">Post an Ad</h2>
      @include('common.success')
    <div class="post-ad-form">
      <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label>Select Category <span>*</span></label>
        <select class="">
          <option>Select Category</option>
          <option>Mobiles</option>
          <option>Electronics and Appliances</option>

        </select>
        <div class="clearfix"></div>
        <label>Ad Title <span>*</span></label>
        <input type="text" name="title" class="phone" placeholder="">
        <div class="clearfix"></div>
        <label>Ad Description <span>*</span></label>
        <textarea class="mess" name="description" placeholder="Write few lines about your product"></textarea>
        <div class="clearfix"></div>
        <div class="upload-ad-photos">
        <label>Photos for your ad :</label>
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
          <label>Your Name <span>*</span></label>
          <input type="text" name="name" class="name" placeholder="">
          <div class="clearfix"></div>
          <label>Your Mobile No <span>*</span></label>
          <input type="text" name="phone" class="phone" placeholder="">
          <div class="clearfix"></div>
          <label>Your Email Address<span>*</span></label>
          <input type="text" name="email" class="email" placeholder="">
          <div class="clearfix"></div>
          <p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> and <a href="privacy.html" target="_blank">Privacy Policy</a></p>
        <input type="submit" value="Post">
        <div class="clearfix"></div>
         <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</form>

@stop
