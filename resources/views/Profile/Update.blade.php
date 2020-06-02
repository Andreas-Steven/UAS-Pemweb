@extends('Index-Profile')
@section('title', 'KIBAR')

@section('content')
    <div id="Profile">
        <form class="form-horizontal" method="post" action="/UpdateProfile/{{ $user->id }}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="fname">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fname" name="fname" value="{{ $user->firstname }}">
                    @error('fname')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="lname">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname" name="lname" value="{{ $user->lastname }}">
                    @error('lname')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="birth">Birth Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('birth') is-invalid @enderror" id="birth" name="birth" value="{{ $user->birthday }}">
                    @error('birth')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{--<div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender</label>
                <div class="col-sm-10">
                    <select style="margin-top:8px;"class="custom-select {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" value="{{ $user->geder }}">
                        <option selected>Choose Your Gender</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="3">Prefer not to choose</option>
                    </select>
                    @error('gender')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>--}}
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="file">Foto Profile</label> <br>
                <img width="200px" style="padding-left: 10px;" src="{{ url('FotoProfile/' . $user->picture) }}">
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="OldPhoto" name="OldPhoto" value="{{ $user->picture }}">
                    <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file">
                </div>
            </div>

            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary submit">Change Profile</button>
                </div>
            </div>
        </form>
     </div>
@stop