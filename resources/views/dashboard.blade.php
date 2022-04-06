<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Partner</th>
                                        <th>Contactpersoon</th>
                                        <th>Mobiel</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Partner }}</td>
                                        <td>{{ $item->contactpersoon }}</td>
                                        <td>{{ $item->mobiel }}</td>
                                        <td>{{ $item->email }}</td>

                                        <td>
                                            <a href="{{ url('/contact/' . $item->id)  }}" title="View partners"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Bekijk</button></a>
                                            <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bewerk</button></a>
 
                                            <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Verwijder</button>
                                            </form>
                                        </td>


                                    </tr>
                    
                                    
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm"  title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> voeg partner toe
                        </a>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
