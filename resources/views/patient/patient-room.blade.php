@extends('patient.showPatient')


@section('content')
<div class="container">

  @if($patient->first()->role == 0)
  <h2 style="text-align: center">Your request is being considered by doctors</h2>
  @endif 
  @if($patient->first()->role == 4)
  <h2 style="text-align: center">Diagnoses given to you</h2><hr>
  <p>According to the diagnosis made by the main doctor <strong>{{$patient->diagnos_main}}</strong></p><hr>
  <p>According to the diagnosis made by the eye doctor <strong>{{$patient->diagnos_eye}}</strong></p><hr>
  <p>According to the diagnosis made by the x-ray doctor <strong>{{$patient->diagnos_xray}}</strong></p><hr>
  <p>According to the diagnosis made by the cardiolog doctor <strong>{{$patient->diagnos_cardiolog}}</strong></p>
  @endif    


@endsection