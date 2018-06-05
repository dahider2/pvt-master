@extends('admin.default')

@section('content')
 			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modifier Cette Caracteristique
                        </div>
                        <div class="panel-body">
                            @include('common.errors')
                            @include('common.success')

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('updateOption', ['id'=>$option['id']])}}" method="POST" role="form">
                                        {{ csrf_field() }}                                        {{ method_field('PUT') }}           
                                        <div class="form-group">
                                            <label>Nom de la Caracteristique</label>
                                            <input class="form-control" placeholder="Ex:telephone" name = "name" required value="{{  $option['name']}}"/>
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