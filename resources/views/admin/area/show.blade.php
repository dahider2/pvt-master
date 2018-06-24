@extends('admin.default')

@section('content')
             <div class="row">
                 @include('common.errors')
                 @include('common.success')

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Quartiers Enregistrés
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

                                            <th>Quartiers</th>
                                            <th>Villes</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach($datas as $data)
                                        <tr class="odd gradeX">
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->city->name }}</td>
                                            <td>
                                               <a href="{!! route('area.edit',['id'=> $data->id]) !!}" role="button" class="btn btn-primary"><i class="fa fa-edit "></i>
                                                </a>
                                               <a href="{!! route('area.destroy',[$data->id]) !!}" role="button" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('destroy-form').submit();"><i class="fa fa-trash"></i> </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['area.destroy', $data->id],'id'=>'destroy-form']) !!}
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