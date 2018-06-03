@extends('admin.default')

@section('content')
 			<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Reclassifier Cette Annonce
                        </div>
                        <div class="panel-body">
                            @include('common.errors')
                            @include('common.success')

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('updateClassifier', ['id'=>$default->id])}}" method="POST" role="form">
                                        {{ csrf_field() }}                                        {{ method_field('PUT') }}           
                                        
                                         <div class="form-group">
                                               {!! Form::label('Sous-Category:') !!}
                                     <input class="form-control" placeholder="Ex:Model" name = "name" required disabled value="{{ $default->category->name}}"/>
                                            </div>

                                         <div class="form-group">
                                               {!! Form::label('Options:') !!}
                                    {!! Form::select('optionId',$options, old('id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
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