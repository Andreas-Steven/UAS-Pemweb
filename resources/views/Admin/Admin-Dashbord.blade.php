@extends('Index-Admin')

@section('content')
<div class="content-wrapper">
  <!-- Content header -->
  <div class="container-fluid"> {{--https://stackoverflow.com/questions/45673354/bootstrap-4-invalid-feedback-with-input-group-not-displaying--}}
    <div style="border-bottom: 1px solid black;">
        <p style="text-align: center;"> 
            <font size="7" color="black"> Riwayat Penjualan </font>
        </p>
    </div>
  </div>
  <!-- Content header -->
  <!-- Main content -->

  <br><br><br><br><br><br>

  <div class="container">
      {!! $usersChart->container() !!}
  </div>
  {!! $usersChart->script() !!}

  <!-- Main Content -->
</div>
@stop