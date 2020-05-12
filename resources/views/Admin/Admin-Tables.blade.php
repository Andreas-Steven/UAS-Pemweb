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
            <h1 class="m-0 text-dark">Product List</h1>
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

                <a href="{{ url('/Add') }}" style="float:right;margin-right: 15px;">
                    <button class="btn btn-primary"> 
                        <i class="nav-icon fas fa-plus"></i>
                        Produk
                    </button>
                </a>

                <br><br>    

                <table id='doc' rule='all' class='table table-striped' style='width : 100%' >
                    <thead class='thead-dark'>
                        <tr>
                            <th><strong>No</th>
                            <th><strong>Nama Produk</th>
                            <th><strong>Harga</th>
                            <th><strong>Stock</th>
                            <th><strong>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($product as $Row)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                                <td>{{ $Row->Name }}</td>
                                <td>Rp @IDR($Row->Price)</td> 
                                <td>{{ $Row->Stock }}</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <a href="{{ $Row->ID }}/Edit" style='margin-right:10px;color:rgb(0,200,255);'><button class='btn'><i class="nav-icon fas fa-edit"></i></button></a>
                                            </td>
                                   
                                            <td>
                                                <form action="Delete/{{ $Row->ID }}"  method='POST'>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class='btn' type="submit" style='margin-right:10px;color:rgb(255,0,0);'><i class="nav-icon fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
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