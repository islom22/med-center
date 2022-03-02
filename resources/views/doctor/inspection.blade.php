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
    <h2>Inspection</h2>
    <hr>
   <form action="/patient/edit/{{$patients->id}}" method="GET">
    <div class="row">
        <div class="col-md-6">
          <p>Name:{{$patients->name}}</p>
          <p>Surname:{{$patients->surname}}</p>
          <p>Phone Npmber:{{$patients->phone}}</p>
          <p>Id:{{$patients->id}}</p>
        </div>
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                  <th>#</th>
                  <th scope="col">diagnosis</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @if($patients->diagnos_main)
                <th scope="row">Main Doctor</th>
                <td>{{$patients->diagnos_main}}</td>
                @endif
              </tr>
              <tr>
                @if($patients->diagnos_eye)
                <th scope="row">Eye Doctor</th>
                <td>{{$patients->diagnos_eye}}</td>
                @endif
              </tr>
              <tr>
                @if($patients->diagnos_cardiolog)
                <th scope="row">Cardiolog Doctor</th>
                <td>{{$patients->diagnos_cardiolog}}</td>
                @endif
              </tr>
              <tr>
                @if($patients->diagnos_xray)
                <th scope="row">X-ray Doctor</th>
                <td>{{$patients->diagnos_xray}}</td>
                @endif
              </tr>
              
            </tbody>
          </table>
        </div>
    </div>
    
    <textarea name="diagnosis" id="textarea" cols="30" rows="5" placeholder="diagnosis"></textarea>
    <button type="submit" class="btn btn-primary px-3 " style="float: right; margin-top: 90px">Send</button> 
   </form>
   <hr>
</div>
@endsection