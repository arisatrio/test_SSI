<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="card">
                    <div class="card-header">
                        Form Add Employee
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                                @csrf
                                @method('PUT')
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ari" name="name" value="{{ $employee->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{ $employee->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Gender</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Address</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{ $employee->address }}</textarea>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Save</button>
                                  </form>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
