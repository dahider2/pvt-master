@extends('admin.default')

@section('content')
 			 <div class="row">
                 @include('common.errors')
                 @include('common.success')

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

                                            <th>Categorie</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach($options as $option)
                                        <tr class="odd gradeX">
                                            <td>{{ $option->name }}</td>        
                                            <td>
                                               <a href="{!! route('editOption',['id'=> $option->id]) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! route('destroyOption',['id' =>$option->id]) !!}" role="button" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
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