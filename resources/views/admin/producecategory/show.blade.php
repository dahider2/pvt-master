@extends('admin.default')

@section('content')
 			 <div class="row">
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
                                            <th>Sous-Categorie</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach($allCategories as $category)
                                        <tr class="odd gradeX">
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->parent_id }}</td>
                                            <td>
                                               <a href="{!! url('category/edit/' . $category->id) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! url('category/delete/' . $category->id) !!}" role="button" class="btn btn-danger"><i class="fa fa-pencil"></i> </a>
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