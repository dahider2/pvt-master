@extends('admin.default')

@section('content')
 			 <div class="row">
                 @include('common.errors')
                 @include('common.success')

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Pays
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

                                            <th>Ville</th>
                                            <th>Pays</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach($datas as $data)
                                        <tr class="odd gradeX">
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->country->name }}</td>
                                            <td>
                                               <a href="{!! route('city.edit',['id'=> $data->id]) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! route('city.destroy',[$data->id]) !!}" role="button" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('destroy-form').submit();"><i class="fa fa-trash"></i> </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['city.destroy', $data->id],'id'=>'destroy-form']) !!}
                                        @csrf
                                        
                                    </form>
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