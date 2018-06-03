@extends('admin.default')

@section('content')
 			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ajout Du Pays
                        </div>
                        <div class="panel-body">
                            @include('common.errors')
                            @include('common.success')

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('country.store') }}" method="POST" role="form">
                                        {{ csrf_field() }}
            
                                        <div class="form-group">
                                            <label>Nom du Pays</label>
                                            <input class="form-control" placeholder="Ex:telephone" name = "name" required value="{{ old('name')}}"/>
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