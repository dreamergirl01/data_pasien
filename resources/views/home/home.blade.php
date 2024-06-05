@extends('template.template')
@section('title')
    Halaman Home
@endsection
@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data User</div>
        <div>
            <a href="{{route('tambah.pasien')}}" class="bg-green-600 hover:bg-green-300 text-white p-2 border rounded-md">Tambah
                Data</a>
        </div>
    </div>

    <table class="table mt-16 w-full">
        <thead>
            <tr class="border p-3 bg-green-600 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Nik</th>
                <th class="border p-3">Nama Pasien</th>
                <th class="border p-3">Tanggal Lahir</th>
                <th class="border p-3">Jenis Kelamin</th>
                <th class="border p-3">Alamat</th>
                <th class="border p-3">Telepon</th>
                <th class="border p-3">Foto</th>
                <th class="border p-3">Status</th>
                <th class="border p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $p => $a)
            <tr>
                <td>{{$p + 1}}</td>
                <td>{{$a->nik}}</td>
                <td>{{$a->nama_pasien}}</td>
                <td>{{$a->tgl_lahir}}</td>
                <td>{{$a->jenis_kelamin}}</td>
                <td>{{$a->alamat}}</td>
                <td>{{$a->telepon}}</td>
                <td>
                    <img src="{{asset('foto/' . $a->foto)}}" width="100" alt="">
                </td>
                <td>{{$a->status}}</td>
                <td>
                    <div class="flex gap-3 justify-center">
                        <a href="{{route('edit.pasien', $a->id)}}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                        <a href="{{route('delete.pasien',$a->id)}}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
