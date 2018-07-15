
		<!-- Navigation -->
@include('masterpage.head.navigation')
	<!-- header -->
	<!-- <header> -->
	@include('masterpage.head.header')
	<!-- //header -->
@yield("content")





		<!--footer section start-->
	@include('masterpage.footer.footer')
        <!--footer section end-->
		<!-- Navigation-Js-->
		@include('masterpage.footer.js_scrooling')
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
