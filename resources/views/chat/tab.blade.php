<!DOCTYPE html>
<html lang="en">
<head>
<title> @yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><!-- bootstrap-CSS -->

 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" /><!-- fontawesome-CSS -->
<link href="{{ asset('css/chat.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link href="{{ asset('css/dataTables.bootstrap.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css')}}"><!-- bootstrap-select-CSS -->

<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<!-- //meta tags -->
<!--fonts-->

<!--//fonts-->
<script type="text/javascript">
    
    $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });


});

</script>
</head>
<body>
    @include('layouts.master-hearder')
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xs-12 user-details">
            <div class="user-image">
                <img src="{{ asset('img/find_user.png') }}" alt="ma photo" title="Moi" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3 style="margin-top: 8%;"> {{ Auth::user()->name }}</h3>
                    <span class="help-block">Abidjan, CI</span>
                </div>
                <ul class="navigation">
                    <li >
                        <a {{-- data-toggle="tab"  --}}href="{{ url('profile/ads')}}">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                     <li>
                        <a {{-- data-toggle="tab" --}} href="{{ url('profile/chat')}}">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    </li>
                    <li>
                        <a {{-- data-toggle="tab --}}" href="{{ url('profile/setting')}}">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>
                    </li>
                   
                    <li>
                        <a {{-- data-toggle="tab" --}} href="#events">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </a>
                    </li>
                </ul>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            
                             @yield('content')
                        </div>
                        {{-- <div id="email" class="tab-pane">
                            <h4>Send Message</h4>
                            @include('chat.chat')
                        </div>
                        <div id="settings" class="tab-pane">
                            <h4>Settings</h4>
                            @include('chat.setting')
                        </div>
                        
                        <div id="events" class="tab-pane">
                            <h4>Events</h4>
                            @include('chat.tab-form')
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.js')}}"></script>
    <script>
            $(document).ready(function () {
                
                $('#dataTables').dataTable();
                $('#dataTables1').dataTable();
                $('#dataTables2').dataTable();


                    
                 });

         

    </script>
</body>
</html>