@extends('layouts.app')

<style>
#login
{
    background-color: black;
    color: white;
    width: 25%
}
</style>

<div class="container-fluid" style="background-image: url({{ asset ('img/bg.jpg') }}); height: 550px; background-position: cover; opacity: 0.8">
        <div class="container" style="margin-top: 5%">
    <div class="row text-center">
        <h1 style="color: darkblue;margin-top: 5%; font-weight: bold;">
            Welcome!!
        </h1>
        <h1>
            Lets Start Texting
        </h1>
        <h3 style="margin-left: 42%">
        <form action="{{URL::to('login')}}">
            <input type="submit" value="Login" class="btn btn-block" id="login"></input>
        </form>
        </h3>
    </div>
    <footer class="footer" style="font-weight: bold;">
      <div class="container">
        <p class="text-muted">&copy Share Android 2016</p>
      </div>
    </footer>
        </div>

</div>