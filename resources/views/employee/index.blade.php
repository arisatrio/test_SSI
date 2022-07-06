<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <a href="{{ route('employee.create') }}" class="btn btn-success">Add Employee</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employees as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->id_employee }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>
                                                <a href="{{ route('employee.edit', $item->id) }}"> Edit</a>
                                                <form action="{{ route('employee.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-danger"> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
