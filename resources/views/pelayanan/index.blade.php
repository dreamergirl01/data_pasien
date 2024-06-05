@extends('template.template')
@section('title')
    Halaman Dokter
@endsection
@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data Pelayanan</div>
        <div>
            <a href="{{route('pelayanan.tambah')}}" class="bg-green-600 hover:bg-green-300 text-white p-2 border rounded-md">Tambah
                Data</a>
        </div>
    </div>

    <table class="table mt-16 w-full">
        <thead>
            <tr class="border p-3 bg-green-600 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Jenis Pelayanan</th>
                <th class="border p-3">Nama Pasien</th>
                <th class="border p-3">Nama Dokter</th>
                <th class="border p-3">Tanggal Pelayanan</th>
                <th class="border p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelayanan as $p => $e)
            <tr>
                <td>{{$p + 1}}</td>
                <td>{{$e->jenis_pelayanan}}</td>
                <td>{{$e->nama_pasie}}</td>
                <td>{{$e->nama_dokter}}</td>
                <td>{{$e->tanggal_pelayanan}}</td>
                <td>
                    <div class="flex gap-3 justify-center">
                        <a href="{{route('pelayanan.edit', $e->id)}}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                        <a href="{{route('pelayanan.delete',$e->id)}}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
