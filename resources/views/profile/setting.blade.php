@extends('profile.tab')
@section('content')
<strong><h3 class="text-center text-primary">Mes Information personnelles</h3></strong>
<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center" id="set">
                  <h4 class="glyphicon glyphicon-user"></h4><br/>Changer Infos Perso
                </a>
                <a href="#" class="list-group-item text-center">
                  <i class="fas fa-key"></i><br/>Changer Mot de Passe
                </a>
                <a href="#" class="list-group-item text-center">
                  <i class="fas fa-mobile-alt"></i><br/>Changer Numero de Telephone
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a"> Infos Perso</h3>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                 <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Mot de Passe</h3>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a"> Numero de Telephone</h3>
                    </center>
                </div>
              
            </div>
        </div>
  </div>
@endsection