@extends('admin.admin')



@section('content')
 <form method="POST" action="{{route('add-doctor-post')}}" >
    @csrf
  <table class="table">
     <tbody>
         <tr>
          {{-- <input type="text" name="email">
          <input type="text" name="password">
          <input type="text" name="region_id">
          <input type="text" name="city_id"> --}}
             <td><small>name</small><input type="text" name="name"></td>
             <td><small>Email</small><input type="text" name="email"></td>
             <td><small>Password</small><input type="text" name="password"></td>
             <td><small>Region</small><input type="text" name="region_id"></td>
             <td><small>City</small><input type="text" name="city_id"></td>
             <td>
                 <select name="role" id="" class="form-control input-lg">
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