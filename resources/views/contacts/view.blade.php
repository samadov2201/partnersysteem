<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('bekijk') }}
        </h2>
    </x-slot>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Partner : {{ $contacts->Partner }}</h5>
        <p class="card-text">contactpersoon : {{ $contacts->contactpersoon }}</p>
        <p class="card-text">mobiel : {{ $contacts->mobiel }}</p>
        <p class="card-text">email : {{ $contacts->email }}</p>
        <a href="{{ url('/contact/') }}" class="btn btn-danger "  title="back">
                            <i class="fa fa-plus" aria-hidden="true"></i> terug
        </a>
  </div>
       
    </hr>
  
  </div>
</div>
</x-app-layout>