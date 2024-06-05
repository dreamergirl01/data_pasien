@extends('template.template')
@section('title')
    Halaman Dokter
@endsection
@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data Dokter</div>
        <div>
            <a href="{{route('dokter.tambah')}}" class="bg-green-600 hover:bg-green-300 text-white p-2 border rounded-md">Tambah
                Data</a>
        </div>
    </div>

    <table class="table mt-16 w-full">
        <thead>
            <tr class="border p-3 bg-green-600 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Nama Dokter</th>
                <th class="border p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokter as $d => $o)
            <tr>
                <td>{{$d + 1}}</td>
                <td>{{$o->nama_dokter}}</td>
                <td>
                    <div class="flex gap-3 justify-center">
                        <a href="{{route('dokter.edit', $o->id)}}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                        <a href="{{route('dokter.delete',$o->id)}}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
