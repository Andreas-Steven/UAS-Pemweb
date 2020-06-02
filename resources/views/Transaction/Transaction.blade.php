@extends('Index-Home')
@section('title', 'KIBAR')

@section('content')
    <div class="container d-flex p-3 mx-auto flex-column" style="margin-bottom: 10px;">
        <div class="content">
            <div class="title m-b-md">
                KIBAR
                <h2>One Stop Shopping Service</h2>
            </div>
            
        </div>
    </div>
    
    <div class="col-md-12 border">  
        <table id='doc' rule='all' class='table table-striped' style='width : 100%' >
            <thead class='thead-dark'>
                <tr>
                    <th><strong>No</th>
                    <th><strong>Product Name</th>
                    <th><strong>Purchase Amount</th>
                    <th><strong>Price</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($transaction as $Row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $Row->ProductName }}</td>
                        <td>{{ $Row->PurchaseAmount }}</td> 
                        <td>Rp @IDR($Row->TotalPrice)</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop