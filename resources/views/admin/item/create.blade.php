@extends('admin.default')

@section('content')
 			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Classifier Les annonces
                        </div>
                        <div class="panel-body">
                            @include('common.errors')
                            @include('common.success')

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('classifier') }}" method="POST" role="form">
                                        {{ csrf_field() }}
            
                                         <div class="form-group">
                                               {!! Form::label('Sous-categorie') !!}
                                    {!! Form::select('id',$categories, old('id'), ['class'=>'form-control', 'placeholder'=>'Select Sous-category']) !!}
                                            </div>
                                             <div class="form-group">
                                               {!! Form::label('Caracteristique') !!}
                                    {!! Form::select('optionId',$options, old('name'), ['class'=>'form-control','placeholder'=>'Selectionner Caracteristique']) !!}
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