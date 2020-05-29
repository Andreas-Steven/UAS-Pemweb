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
                <div class="container">

                {{-- CONTENT START --}}
                <div class="container-fluid"> {{--https://stackoverflow.com/questions/45673354/bootstrap-4-invalid-feedback-with-input-group-not-displaying--}}
                    <div style="border-bottom: 1px solid black;">
                        <p style="text-align: center;"> 
                            <font size="7" color="black"> Ubah Data Produk </font>
                        <a href="{{ route('product') }}" style="float:right;margin-right: 15px;margin-top: 35px;">
                            <button class="btn btn-primary"> 
                                <span class="glyphicon glyphicon-menu-left"></span>
                                Back
                            </button>
                        </a>
                        </p>
                    </div>
                </div>

                <div class="container" style="margin-top: 35px;">
                    <form class="form-horizontal" method="post" action="/Update/{{ $product->ID }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->Name }}">
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="harga">Harga Produk</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $product->Price }}">
                                @error('harga')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="stock">Stock Produk</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $product->Stock }}">
                                @error('stock')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="descriptions">Deskripsi Produk</label>
                            <div class="col-sm-10">
                                <textarea id="descriptions" class="form-control @error('descriptions') is-invalid @enderror"  name="descriptions" rows="4" cols="50">{{ $product->Descriptions }}</textarea>
                                @error('descriptions')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="file">Foto Produk</label> <br>
                            <img width="200px" style="padding-left: 10px;" src="{{ url('FotoProduk/' . $product->Image) }}">
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="OldPhoto" name="OldPhoto" value="{{ $product->Image }}">
                                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file">
                            </div>
                        </div>

                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary submit">Ubah Data Produk</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- CONTENT END --}}

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