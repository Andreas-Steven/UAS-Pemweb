@extends('Index-Home')

@section('title', 'KIBAR')

@section('content')
    <link rel="stylesheet" href="{{ asset('/css/ItemDetail.css') }}" />
    <div id="Profile">
          <div>
            <img id="Item_Pic" src="{{ url('FotoProduk/' . $product->Image) }}"  alt="Item Picture"><!--tag img src itu sesuaikan nama file di dalam folder dan file gambar harus di dalam folder yang sama dengan file web kita-->
          </div>
          
          <hr class="hr1"> <!--Untuk Membuat Garis-->
          <h3 class="NamaItem">{{ $product->Name }}</h3>              <!--Ini isinya Nama Barang-->
          <hr class="hr1">
          <p class="DataDiri1">Rp @IDR($product->Price)</p> 
          <br>
         <form class="form" method="post" action="/ItemDetail" enctype="multipart/form-data">
            @csrf
            <lable class="DataDiri1" for="jumlah">Jumlah</text> 
            {{--<button class="KurangJumlahBarang" >-</button>--}}
            <input type="number" class="JumlahBarang1 @error('name') is-invalid @enderror" id="jumlah" name="jumlah" value="1">
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            <input type="hidden" class="JumlahBarang1" id="product_id" name="product_id" value="{{ $product->ID }}">
            <input type="hidden" class="JumlahBarang1" id="user_id" name="user_id" value="{{ Cookie::get('ID') }}">
            <input type="hidden" class="JumlahBarang1" id="nama" name="nama" value="{{ $product->Name }}">
            <input type="hidden" class="JumlahBarang1" id="harga" name="harga" value="{{ $product->Price }}">
            <input type="hidden" class="JumlahBarang1" id="foto" name="foto" value="{{ $product->Image }}">
            {{--<button class="TambahJumlahBarang" >+</button>--}}
            <hr class="hr1">
            <H3 class="Desc">Description</H3>
            <br>
            <div id="Description">
                <textarea id="Deskripsi" readonly autofocus wrap="soft">{{ $product->Descriptions }}</textarea></br> <!--Ini isinya deskripsi barang yang ada di database-->
                <!--<textarea class="Description">  </textarea> --> 
            </div>
        <hr class="hr1"> <!--Untuk Membuat Garis-->
        <button type="submit" class="ToKeranjang">Tambah Ke Keranjang</button>
        {{--<input class="ToKeranjang" type="submit" value="Tambah Ke Keranjang">--}}
        </form>
    </div>
@stop