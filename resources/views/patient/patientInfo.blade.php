@extends('patient.showPatient')
 
@section('content')

<form action="{{route('room-post')}}" method="post">
      @csrf
    <div class="container">
        <div class="row justify-content-center ">
            <div class="card py-5">
                <div class="card-body">
                    <h4 class="text-center ">More Information</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="phone" value="{{$phone}}" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="name"  class="form-control" placeholder="First name" required> 
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="surname"  class="form-control" placeholder="Last name" required> 
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <input type="text" name="region_id"  class="form-control" placeholder="Region" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="city_id"  class="form-control" placeholder="City" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0 mx-auto mt-3 d-flex " style="text-align: center">
            <div class=" mx-auto">
                <button type="submit" class="btn btn-primary">
                    {{ __('Next') }}
                </button>                                  
            </div>
        </div>
    </div>
</form>









@endsection