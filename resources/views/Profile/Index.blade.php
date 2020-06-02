@extends('Index-Profile')

@section('title', 'KIBAR')

@section('content')
    <!-- Tag body ini gunanya untuk mengisikan semua konten yang ada di dalam web-->
    <div id="NamaHalaman"> 
        <h1  align="center"  >Profile</h1><!--Judul Halaman Web-->
        <hr class="hr"> <!--Untuk Membuat Garis-->
    </div>

    <div id="Profile">
        <div>
            <img id="Photo_Profile" src="{{ url('FotoProfile/' . $user->picture) }}" alt="image in here"><!--tag img src itu sesuaikan nama file di dalam folder dan file gambar harus di dalam folder yang sama dengan file web kita-->
            
        </div>
        <hr class="hr1"> <!--Untuk Membuat Garis-->
        
        <p id="DataDiri">Name</p>
        <h3><p id="DataDiri">{{ $user->firstname }} {{ $user->lastname }}</p></h3>
        <br>
        <p id="DataDiri">Birth Date</p>
        <h3><p id="DataDiri">{{ $user->birthday }}</p></h3> <p class="ubahDataDiri" >
        <br>
        <p id="DataDiri">Gender</p>
        <h3><p id="DataDiri">
            @if($user->gender == 'male')         
                <td>Male</td>         
            @else
                <td>Female</td>        
            @endif
        </p></h3>
        <br>
        <p id="DataDiri">Email</p>
        <h3><p id="DataDiri">{{ $user->email }}</p></h3> <p class="ubahDataDiri" >
        <br>
        {{--<p id="DataDiri">Password</p>
        <br> <p class="ubahDataDiri" >
        <br>--}}

        <a class="btn btn-primary submit" href="{{ $user->id }}/Edit">Change Profile</a>
    </div>
@stop