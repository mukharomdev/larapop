@extends('layouts.master')
@section('title','Beranda')
@section('activeBeranda','active')
@section('pageBeranda','page')
@section('content')
   <div class ="container-fluid">
   <img src="{{asset('/img/wahyudin-unnes.png')}}"  class="img-responsive" alt="Responsive image"   width="307" height="240"/>

   <p class="lead">Selamat datang di situs Alumni SMAN 1 Banjarharjo angkatan 2005,semoga silaturahmi kita tetap terjaga.</p>
    <p class="lead">
      <a href="{{route('login')}}" class="btn btn-lg btn-light fw-bold border-white bg-white">Selengkapnya ...</a>
    </p>
    </div>
@endsection