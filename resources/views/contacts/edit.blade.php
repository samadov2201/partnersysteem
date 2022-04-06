<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('bewerk') }}
        </h2>
    </x-slot>
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
           <!-- form with a post method to edit partners --> 

      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Partner</label></br>
        <input type="text" name="Partner" id="Partner" value="{{$contacts->Partner}}" class="form-control"></br>
        <label>contactpersoon</label></br>
        <input type="text" name="contactpersoon" id="contactpersoon" value="{{$contacts->contactpersoon}}" class="form-control"></br>
        <label>mobiel</label></br>
        <input type="text" name="mobiel" id="mobiel" value="{{$contacts->mobiel}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$contacts->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success float-end">
        <a href="{{ url('/contact/') }}" class="btn btn-danger "  title="back">
        <i class="fa fa-plus" aria-hidden="true"></i> terug
        </a>
    </form>
   
  </div>
</div>
 
</x-app-layout>