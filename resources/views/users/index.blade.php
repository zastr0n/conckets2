<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>tanggal lahir</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->name}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->no_telp}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->tgl_lahir}}</td>
                                <td>{{$d->role}}</td>
                                <td>
                                    <a href="{{route('users.edit',['id'=>$d->id])}}" class="bg-transparent hover:bg-orange-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded"> Edit</a>
                                    <a href="{{route('users.destroy',['id'=>$d->id])}}" class="bg-transparent hover:bg-red-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded"> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#example').dataTable()
    </script>
</x-app-layout>