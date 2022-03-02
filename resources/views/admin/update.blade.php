@extends('admin.admin')



@section('content')

 <form method="post" action="/admin-update/{{$doctors->id}}" >
    @csrf
  <table class="table">
     <tbody>
         <tr>
             <td><small>name</small><input type="text" value="{{$doctors->name}}" name="name"></td>
             <td><small>Email</small><input type="text" value="{{$doctors->email}}" name="email"></td>
             <td><small>Password</small><input type="text" value="{{$doctors->password}}" name="password"></td>
             <td><small>Region</small><input type="text" value="{{$doctors->region_id}}" name="region_id"></td>
             <td><small>City</small><input type="text" value="{{$doctors->city_id}}" name="city_id"></td>
             <td>
                 <select name="role" id="" value="{{$doctors->role}}" class="form-control input-lg">
                     <option value="1">Main Doctor</option>
                     <option value="2">Eye Doctor</option>
                     <option value="3">Cardiolog</option>
                     <option value="4">X-ray Doctor</option>
                 </select>
             </td>
             <td class="pl-0">               
                <div class="form-group row mb-0 mt-4 mr-3 d-flex  " style="text-align: right">
                  <div class="col-md-8 offset-md-4 mr-4">
                    <button type="submit" class="btn btn-primary px-4">
                      {{ __('Next') }}
                    </button>
                  </div>
                </div>
                </td>
         </tr>
     </tbody>
  </table>     
</form>    




@endsection