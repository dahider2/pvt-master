@extends('layouts.master')

@section('content')

<!-- breadcrumbs -->
<<<<<<< HEAD

<!-- //breadcrumbs -->
<!-- Submit Ad -->
<div class="submit-ad main-grid-border">
  <div class="container-fluid">
    <h2 class="w3-head">Post an Ad</h2>
      @include('common.success')
    <div class="post-ad-form">
      <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
=======
<div class="w3layouts-breadcrumbs text-center">
  <div class="container">
    <span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Post your Ad</span></span>
  </div>
</div>
<!-- //breadcrumbs -->
<!-- Submit Ad -->
<div class="submit-ad main-grid-border">
  <div class="container">
    <h2 class="w3-head">Post an Ad</h2>
    <div class="post-ad-form">
      <form>
>>>>>>> 88b73087593182dc8cec3cad79a3f254479a676a
        <label>Select Category <span>*</span></label>
        <select class="">
          <option>Select Category</option>
          <option>Mobiles</option>
          <option>Electronics and Appliances</option>
<<<<<<< HEAD

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
=======
          <option>Cars</option>
          <option>Bikes</option>
          <option>Furniture</option>
          <option>Pets</option>
          <option>Books, Sports and hobbies</option>
          <option>Fashion</option>
          <option>Kids</option>
          <option>Services</option>
          <option>Real, Estate</option>
        </select>
        <div class="clearfix"></div>
        <label>Ad Title <span>*</span></label>
        <input type="text" class="phone" placeholder="">
        <div class="clearfix"></div>
        <label>Ad Description <span>*</span></label>
        <textarea class="mess" placeholder="Write few lines about your product"></textarea>
        <div class="clearfix"></div>
      <div class="upload-ad-photos">
      <label>Photos for your ad :</label>
        <div class="photos-upload-view">
          <form id="upload" action="index.html" method="POST" enctype="multipart/form-data">

          <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

          <div>
            <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
            <div id="filedrag">or drop files here</div>
          </div>

          <div id="submitbutton">
            <button type="submit">Upload Files</button>
          </div>

          </form>
>>>>>>> 88b73087593182dc8cec3cad79a3f254479a676a

          <div id="messages">
          <p>Status Messages</p>
          </div>
          </div>
        <div class="clearfix"></div>
          <script src="js/filedrag.js"></script>
      </div>
        <div class="personal-details">
<<<<<<< HEAD
        <!-- <form> -->
          <label>Your Name <span>*</span></label>
          <input type="text" name="name" class="name" placeholder="">
          <div class="clearfix"></div>
          <label>Your Mobile No <span>*</span></label>
          <input type="text" name="phone" class="phone" placeholder="">
          <div class="clearfix"></div>
          <label>Your Email Address<span>*</span></label>
          <input type="text" name="email" class="email" placeholder="">
=======
        <form>
          <label>Your Name <span>*</span></label>
          <input type="text" class="name" placeholder="">
          <div class="clearfix"></div>
          <label>Your Mobile No <span>*</span></label>
          <input type="text" class="phone" placeholder="">
          <div class="clearfix"></div>
          <label>Your Email Address<span>*</span></label>
          <input type="text" class="email" placeholder="">
>>>>>>> 88b73087593182dc8cec3cad79a3f254479a676a
          <div class="clearfix"></div>
          <p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> and <a href="privacy.html" target="_blank">Privacy Policy</a></p>
        <input type="submit" value="Post">
        <div class="clearfix"></div>
<<<<<<< HEAD
         <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</form>
=======
        </form>
        </div>
    </div>
  </div>
</div>
>>>>>>> 88b73087593182dc8cec3cad79a3f254479a676a

@stop
