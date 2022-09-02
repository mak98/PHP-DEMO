
    {{-- <form method="post" action="{{route("login")}}">
      <button class="ltype" id="aclogin" type="button" style="float:left;border-bottom-color:rgb(48, 48, 145);" onclick="acclogin()">Account Number</button>
      <button class="ltype" id="idlogi" style="float:left;border-bottom-color:#ccc;" type="button" onclick="idlogin()">User ID</button>
      <input type="hidden" name="des" value="account_number">
      @csrf
      <input type="email" placeholder="Enter Email" id="email" name="email" required>
      <label for="email" style="background-color:white;"><b>Email</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required>
      <label for="psw" style="background-color:white;"><b>Password</b></label>
      <button type="submit" class="login" value="Login">Login</button>
  </form> --}}

@extends('layouts.app')
@section('title',"Login")
@section('content')
    @if ($errors->any())
                    <div class="alert alert-danger pb-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="container mt-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <div class="card px-5 py-5" id="form1">
                                <form method="post" action="{{route("login")}}">
                                    @csrf
                                <div class="form-data">
                                    <div class="forms-inputs mb-4"> 
                                        <label for="email" class="form-label"><b>Email</b></label>
                                        <input type="email" class="form-control"  placeholder="Enter Email" id="email" name="email" required>
                                    </div>
                                    <div class="forms-inputs mb-4">
                                        <label for="password" class="form-label"><b>Password</b></label>
                                        <input type="password" class="form-control"  placeholder="Enter Password" id="password" name="password" required>
                                    </div>
                                    <div class="mb-3"> 
                                        <button class="btn btn-dark w-100" type="submit" value="Login">Login</button> 
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
