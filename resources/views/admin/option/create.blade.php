@extends('admin.default')

@section('content')
 			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ajout de Caracteristique D'une annonce
                        </div>
                        <div class="panel-body">
                            @include('common.errors')
                            @include('common.success')

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('option') }}" method="POST" role="form">
                                        {{ csrf_field() }}
            
                                        <div class="form-group">
                                            <label>Nom de la Carateristique</label>
                                            <input class="form-control" placeholder="Ex:Model" name = "name" required value="{{ old('name')}}"/>
                                        </div>
                                        
                                            <button type = "submit" class="btn btn-default">Enregistrer
                                            </button>

    								</form>
    							</div>
   					 		</div>
   					 	</div> 
    				</div>
    			</div> 
    		</div>

@endsection