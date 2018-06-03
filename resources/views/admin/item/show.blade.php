@extends('admin.default')

@section('content')
 			 <div class="row">
                 @include('common.errors')
                 @include('common.success')

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Classification Des Annonces
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

                                            <th>Categorie</th>
                                            <th>Categorie Parente</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach($datas as $data)
                                          
                                        <tr class="odd gradeX">
                                            <td>{{ $data->category->name }}</td>
                                            <td>{{ $data->name }}</td>
                                            
                                            <td>
                                               <a href="{!! route('editClassifier',['id'=> $data->id]) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! route('destroyClassifier', ['id'=> $data->id]) !!}" role="button" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                             @endforeach 
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
@endsection