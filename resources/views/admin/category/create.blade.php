@extends('admin.default')

@section('content')
 			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ajout de Categorie
                        </div>
                        <div class="panel-body">
                            @include('common.errors')
                            @include('common.success')

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('category') }}" method="POST" role="form">
                                        {{ csrf_field() }}
            
                                        <div class="form-group">
                                            <label>Nom de la categorie</label>
                                            <input class="form-control" placeholder="Ex:telephone" name = "name" required value="{{ old('name')}}"/>
                                        </div>
                                         <div class="form-group">
                                               {!! Form::label('Categorie Parent:') !!}
                                    {!! Form::select('parent_id',$categories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
                                            </div>
                                            <div class="form-group">
                                               {!! Form::label('Description:') !!}
                                                {!!Form::textarea('description')!!}
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