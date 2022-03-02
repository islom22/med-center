@extends('show')


@section('sidebar')
<div class="sidebar">

  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <i class="fas fa-users-cog bg-dark fa-2x"></i>
    </div>
    <div class="info">
      <a href="#" class="d-block">
        {{Auth::user()->login}}
      </a>
    </div>
  </div>
</div>
@endsection

@section('content')
 <div class="container">
     <h2>Patients</h2>
     <hr>
   <div class="list-group">
     @foreach ($patients as $patient)
      <h3><a href="/patient/{{$patient->id}}" class="list-group-item">{{$patient->name}} {{$patient->surname}}</a></h3>    
     @endforeach
   </div>
 </div>




@endsection