@extends('Index-Home')
@section('title', 'KIBAR')

@section('content')
    <link rel="stylesheet" href="{{ asset('/css/OrderDetail.css') }}" />

    <div id="Profile">
        <h1 class="JudulOD"><b> Order Details</b></h1>
        <hr class="hr1"> <!--Untuk Membuat Garis-->

        <form class="form" method="post" action="/BeliBarang" enctype="multipart/form-data">
            @csrf
            <div>   
                <img id="Item_Pic" src="{{ url('FotoProduk/' . $req->foto) }}"  alt="Item Picture"><!--tag img src itu sesuaikan nama file di dalam folder dan file gambar harus di dalam folder yang sama dengan file web kita-->
                <div class="OrderDetailItems">
                    <br>
                    <li><strong><h3>{{ $req->nama }}</h3></strong></li><br>
                    <li><strong><h4>Rp @IDR($harga)</h4></strong></li>

                    <input type="hidden" class="JumlahBarang1" id="productid" name="productid" value="{{ $req->product_id }}">
                    <input type="hidden" class="JumlahBarang1" id="userid" name="userid" value="{{ $req->user_id }}">
                    <input type="hidden" class="JumlahBarang1" id="nama" name="nama" value="{{ $req->nama }}">
                    <input type="hidden" class="JumlahBarang1" id="totalharga" name="totalharga" value="{{ $harga }}">
                    <input type="hidden" class="JumlahBarang1" id="jumlah" name="jumlah" value="{{ $req->jumlah }}">
                </div>
            </div>

            <br><br><br><br><br><br>

            <hr class="hr1" style="float: inline-end;" > <!--Untuk Membuat Garis-->
            <button type="submit" class="ToPayment">Beli</button>
            {{--<input class="ToPayment" type="submit" value="Beli">--}}
        </form>
    </div>
@stop