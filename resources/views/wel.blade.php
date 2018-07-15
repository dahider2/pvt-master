
<!--  navigation-->
@include('masterpage.head.navigation')
<!-- // navigation  -->

	<!-- header -->
  @include('masterpage.head.header')

	<!-- //header -->

	<!-- Slider -->
@include('masterpage.body.slider')
		<!-- //Slider -->
		<!-- content-starts-here -->
		<div class="main-content">
			   <!--  grid content -->
         @include('masterpage.body.content_grid_view')
			</div>
			<!-- most-popular-ads -->
			@include('masterpage.body.popularads')
			<!-- most-popular-ads -->

			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
        <!--  tendance populaire -->
				    @include('masterpage.body.tendance')
			       </div>
			</div>
      <!-- //slider -->
			<!--partners-->
			@include('masterpage.body.partners')
		<!--//partners-->
		<!-- mobile app -->
			@include('masterpage.footer.mobileapp')
			<!-- //mobile app -->
		</div>
		<!--footer section start-->
		<footer>
			@include('masterpage.footer.footer')
		</footer>
        <!--footer section end-->
		<!--  js smoot scrooling -->
      @include('masterpage.footer.js_scrooling')
    <!--  // js smoot scrooling -->
</body>
</html>
