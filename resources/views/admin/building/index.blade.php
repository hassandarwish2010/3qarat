@extends('admin.layouts.layout')
@section('title')

Buildingg panel

@endsection



@section('header')



<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">




@endsection

@section('content')

<div class="content-header">
  <h1>
    Data Tables
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><a href="{{ url('/adminpanel/buildings') }}">Building</a></li>
  </ol>
  </div>

<div class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    
	@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif
              

                 
                
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                
                            <th>#</th>
                
                            <th>Number 	</th>
                
                            <th>Image</th>
                            <th>Num.floors</th>
                            <th>Num.units</th>
                            <th>Compound</th>
                
                            <th width="280px">Action</th>
                
                        </tr>
                        </thead>
                        <tbody>

                
                    @foreach ($building as $key => $building)
                
                    <tr>
                
                        <td>{{ ++$i }}</td>
                        <td>{{ $building->number }}</td>
                        <td>{{ $building->img }}</td>  
                        <td>{{ $building->floorsnum }}</td>
                        <td>{{ $building->unitsnum }}</td>
                        <td>{{ $building->id}}</td>
                           <td>
                
                
                            <a class="btn btn-primary" href="{{ route('building.edit',$building->id) }}">Edit</a>
                
                            
                
                          
                
                            {!! Form::open(['method' => 'DELETE','route' => ['building.destroy', $building->id],'style'=>'display:inline']) !!}
                
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                
                            {!! Form::close() !!}
                
                            
                
                        </td>
                
                    </tr>
                
                    @endforeach

                   </tbody> 


                  </table>
            </div>
            
            
            <!-- /.box-body -->
          </div>
          
          
          
          </div>
        <!-- /.col -->
      </div>
      
      
      <!-- /.row -->

      
    </div>
    <!-- /.content -->
@endsection


@section('footer')

<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>

$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })

</script>

@endsection

