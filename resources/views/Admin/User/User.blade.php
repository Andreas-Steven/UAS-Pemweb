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
            <h1 class="m-0 text-dark">User List</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container"> 

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
                                <td>{{ $Row->gender }}</td>
                                <td>{{ $Row->role }}</td>
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