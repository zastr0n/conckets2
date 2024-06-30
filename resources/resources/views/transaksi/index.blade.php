<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Pemesan</th>
                                <th>Jumlah Ticket</th>
                                <th>Total Harga</th>
                                <th>Ticket Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->name}}</td>
                                <td>{{number_format($d->jml_tiket)}}</td>
                                <td>{{number_format($d->total_harga)}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->status}}</td>
                                <td>
                                    @if($d->status == 'pending')
                                    <a href="{{route('transaksi.update',['id'=>$d->id,'status'=>'success'])}}" class="bg-transparent hover:bg-orange-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded"> Accept</a>
                                    <a href="{{route('transaksi.update',['id'=>$d->id,'status'=>'cancel'])}}" class="bg-transparent hover:bg-red-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded"> Decline</a>
                                    @endif
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