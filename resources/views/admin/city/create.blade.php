@extends('admin.default')

@section('content')
 			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ajout D'une Ville
                        </div>
                        <div class="panel-body">
                            @include('common.errors')
                            @include('common.success')

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('city.store') }}" method="POST" role="form">
                                        {{ csrf_field() }}
            
                                         <div class="form-group">
                                               {!! Form::label('Pays:') !!}
                                    {!! Form::select('country',$countries, old('id'), ['class'=>'form-control', 'placeholder'=>'Select Ville']) !!}
                                            </div>          
                                        <div class="form-group">
                                            <label>Nom du Quartier</label>
                                            <input class="form-control" placeholder="Ex:Abidjan" name = "name" required value="{{ old('name')}}"/>
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