@extends('admin.admin')


@section('content')
<a method="get" href="{{route('add-doctor')}}" >
    <button class="btn btn-primary py-2 my-3 mr-5 px-3" style="float: right"> Add Doctor</button>
</a>
<table>
    <thead>
        <tr>
            <th style="width: 200px">Id</th>
            <th style="width: 200px">Name</th>
            <th style="width: 200px">Region</th>
            <th style="width: 200px">City</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
      <tr>    
            <td>{{$doctor->id}}</td>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->region_id}}</td>
            <td>{{$doctor->city_id}}</td>
              <td>
                <div class="ml-30" style="margin: 5px;" >

                    <form method="POST" action="/admin-delete/{{$doctor->id}}"> 
                      @csrf
                      @method('DELETE')
                    <button type="submit"  class="btn  btn-danger active float-right">DELETE</button>
                  </form>
                </div>
              </td>
            </td>
            <td>
    
              <div class="ml-30" style="margin: 5px;">
                <a href="{{ url('admin/'.$doctor->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a>
                @method('get')
              </div>
            </td>
      </tr>  
        @endforeach
    </tbody>
</table>
@endsection