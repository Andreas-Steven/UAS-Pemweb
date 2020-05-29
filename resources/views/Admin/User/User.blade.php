@extends('Index-Admin')
@section('title', 'Admin View')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid"> 

                <div class="container-fluid"> {{--https://stackoverflow.com/questions/45673354/bootstrap-4-invalid-feedback-with-input-group-not-displaying--}}
                  <div style="border-bottom: 1px solid black;">
                      <p style="text-align: center;"> 
                          <font size="7" color="black"> Daftar User </font>
                      </p>
                  </div>
                </div>

                <table id='doc' rule='all' class='table table-striped' style='width : 100%' >
                    <thead class='thead-dark'>
                        <tr>
                            <th><strong>No</th>
                            <th><strong>First Name</th>
                            <th><strong>Last Name</th>
                            <th><strong>Gender</th>
                            <th><strong>Role</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($user as $Row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $Row->firstname }}</td>
                                <td>{{ $Row->lastname }}</td> 
                                {{--<td>{{ $user->gender }}</td>--}}
                                @if($Row->gender == 'male')         
                                     <td>Male</td>         
                                @else
                                    <td>Female</td>        
                                @endif
                                {{--<td>{{ $Row->role }}</td>--}}
                                @if($Row->role == 'admin')         
                                     <td>Admin</td>         
                                @else
                                    <td>Customer</td>        
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
@stop