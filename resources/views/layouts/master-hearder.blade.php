<header>
		<div class="w3ls-header"><!--header-one-->
			<div class="w3ls-header-left">
				<p><a href="mobileapp.html"><i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					@guest

						<li class="dropdown head-dpdn">
							<a href="{{ Route('login') }}" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>Se Connecter</a>
						</li>
						<li class="dropdown head-dpdn">
							<a href="{{ Route('register') }}" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i>Nouveau Membre?</a>
						</li>

					@else
                            <li class="dropdown head-dpdn">
								<a  aria-expanded="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}" role="button"  >
                                    Se Deconnecter
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              
                               
                            </li>

                             <li class="dropdown head-dpdn">
								<a href="{{ url('profile/ads') }}" aria-expanded="false"><i class="fa  fa-chart-line" aria-hidden="true"></i>Mon Espace</a>
								</li>

							@if (Auth::user()->isAdmin())
								<li class="dropdown head-dpdn">
								<a href="{{ url('admin') }}" aria-expanded="false"><i class="fa  fa-chart-line" aria-hidden="true"></i>Administration</a>
								</li>
	                             
							@endif
                    @endguest


					<li class="dropdown head-dpdn">
						<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="#"><span class="active uls-trigger"><i class="fa fa-language" aria-hidden="true"></i>languages</span></a>
					</li>
					<li class="dropdown head-dpdn">
						<div class="header-right">
	<!-- Large modal -->
			<div class="agile-its-selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				<i class="fa fa-globe" aria-hidden="true"></i>Select City</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" action="#" method="get">
										<div class="form-group">
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Select City</option>
													<option>Birmingham</option>
													<option>Anchorage</option>
													<option>Phoenix</option>
													<option>Little Rock</option>
													<option>Los Angeles</option>
													<option>Denver</option>
													<option>Bridgeport</option>
													<option>Wilmington</option>
													<option>Jacksonville</option>
													<option>Atlanta</option>
													<option>Honolulu</option>
													<option>Boise</option>
													<option>Chicago</option>
													<option>Indianapolis</option>
												</optgroup>
												
													
											</select>
										</div>
									  </form>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
					</li>
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
		<div class="container" >
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="/"><span>Paye V</span>end tout</a></h1>
				</div>

      
				<a class="post-w3layouts-ad" href="postad">Poster un produit</a>
				</div>
				<div class="clearfix"></div>
			</div>
		
	</header>
	<!-- //header -->