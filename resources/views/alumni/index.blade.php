@extends('layouts.master')
@section('title','Alumni')
@section('activeAlumni','active')
@section('pageAlumni','page')
@section('content')
   @foreach($alumnies as $alumni)
   <h1 class="text-black">{{$alumni->name}}</h1>
   @endforeach
@endsection