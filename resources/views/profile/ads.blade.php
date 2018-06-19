@extends('profile.tab')
@section('content')
<strong><h3 class="text-center text-primary">Mes Annonces</h3></strong>

<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-thumbs-up"></h4><br/>Actives
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-thumbs-down"></h4><br/>Inactives
                </a>
                <a href="#" class="list-group-item text-center">
                 <i class="fas fa-eye"></i><br/>VIP
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                                                      <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Annonces actives
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th>Evoyeur</th>
                                            <th>Annonce</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           {{-- @foreach($allCategories as $category)
                                        <tr class="odd gradeX">
                                            <td>{{ $category->name }}</td>
                                            @if($category->parent_id != 0 )
                                                <td>{{ $category->parent->name }}</td>
                                            @else
                                                <td>{{ $category->parent_id }}</td>
                                            @endif
                                            <td>
                                               <a href="{!! route('editCategory',['id'=> $category->id]) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! url('category/delete/' . $category->id) !!}" role="button" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                             @endforeach  --}}
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
                                                   <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Annonces Inactives
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables1">
                                    <thead>
                                        <tr>
                                            <th>Evoyeur</th>
                                            <th>Annonce</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           {{-- @foreach($allCategories as $category)
                                        <tr class="odd gradeX">
                                            <td>{{ $category->name }}</td>
                                            @if($category->parent_id != 0 )
                                                <td>{{ $category->parent->name }}</td>
                                            @else
                                                <td>{{ $category->parent_id }}</td>
                                            @endif
                                            <td>
                                               <a href="{!! route('editCategory',['id'=> $category->id]) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! url('category/delete/' . $category->id) !!}" role="button" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                             @endforeach  --}}
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                                                     <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Annonces VIP
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables2">
                                    <thead>
                                        <tr>
                                            <th>Evoyeur</th>
                                            <th>Annonce</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           {{-- @foreach($allCategories as $category)
                                        <tr class="odd gradeX">
                                            <td>{{ $category->name }}</td>
                                            @if($category->parent_id != 0 )
                                                <td>{{ $category->parent->name }}</td>
                                            @else
                                                <td>{{ $category->parent_id }}</td>
                                            @endif
                                            <td>
                                               <a href="{!! route('editCategory',['id'=> $category->id]) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! url('category/delete/' . $category->id) !!}" role="button" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                             @endforeach  --}}
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    </center>
                </div>
              
            </div>
        </div>
  </div>
@endsection