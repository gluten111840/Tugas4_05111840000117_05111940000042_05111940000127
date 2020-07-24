@extends('layout.master')
@section('title')
Login
@endsection
@section('css')
<style>
    .content{
          height: 70vh;
          }
</style>
@endsection
@section('main')
<div class="content text-center ">
  <form class="form-signin " style="margin" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Login User</h1>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="">
           <input type="checkbox" value="remember-me">Remember me
         </label> 
        <button class="btn btn-primary " type="submit">Login</button>
    </form>
</div>
@endsection