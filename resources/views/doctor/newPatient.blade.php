@extends('show')


@section('sidebar')
<div class="sidebar">
    <div class="user-panel">
        <div class="image">
          <i class="fas fa-users-cog bg-dark fa-2x"></i>
        </div>
        <div class="info">
         <h1>maindoctor</h1>
        </div>
    </div>

   
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column " >
        <li class="nav-item menu-open">
          <a  class="nav-link ">
            <i class="nav-icon fas fa-user-md"></i>
            <p>
              New patients
            </p>
          </a>            
        </li>
      </ul>
    </nav>
    
</div>






@endsection

@section('content')
<div class="container">
    <h2>New Patients</h2>
    <hr>
    <div class="list-group">
        <div class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone Number</th>
              </tr>
            </thead>
            <tbody>
             <div class="container">
              @foreach ($patients as $patient)
              <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->name}}</td>
                <td>{{$patient->surname}}</td>
                <td>{{$patient->phone}}</td>
                <form action="">
                  <td><button type="submit" class="btn btn-primary">Start medical examination</button></td>
                </form>
              </tr>  
                @endforeach
             </div>
              
            </tbody>
        </div>
    </div>
</div>




@endsection