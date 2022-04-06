    @extends('contacts.layout')
@section('content')
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

                        
                                    </tr>
                    
                                    
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{ url('/') }}" class="btn btn-success btn-sm"  title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> inlogpagina
                        </a>
                </div>
                
            </div>
        </div>
    </div>