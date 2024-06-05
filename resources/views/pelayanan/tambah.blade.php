@extends('template.templateform')
@section('title')
    Tambah Data
@endsection
@section('content')
    <div class="flex items-center h-screen  w-full bg-teal-lighter dark:bg-green-500">
        <div class="w-full bg-white rounded shadow-lg p-4 m-32">
            <form class="mb-4" action="{{route('pelayanan.save')}}" method="post">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="first_name">Nama Pasien</label>
                    <select class="border py-2 px-3 text-grey-darkest rounded-md" name="id_pasien" id="">
                        <option value="">--Pilih Nama Pasien--</option>
                        @foreach ($pasien as $p)
                        <option value="{{$p->id}}">{{$p->nama_pasien}}</option>
                        @endforeach
                    </select>
                    <span>{{$errors->first('nama_pasien')}}</span>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="first_name">Jenis Pelayanan</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="text" name="jenis_pelayanan" value="{{old('jenis_pelayanan')}}" id="" placeholder="jenis pelayanan">
                    <span>{{$errors->first('jenis pelayanan')}}</span>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="first_name">Nama dokter</label>
                    <select class="border py-2 px-3 text-grey-darkest rounded-md" name="id_dokter" id="">
                        <option value="">--Pilih Nama Dokter--</option>
                        @foreach ($dokter as $d)
                        <option value="{{$d->id}}">{{$d->nama_dokter}}</option>
                        @endforeach
                    </select>
                    <span>{{$errors->first('nama_dokter')}}</span>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="first_name">Tanggal Pelayanan</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="date" name="tanggal_pelayanan" value="{{old('tanggal_pelayanan')}}" id="" placeholder="tanggal pelayanan">
                    <span>{{$errors->first('tanggal pelayanan')}}</span>
                </div>
                <button class="block bg-teal hover:bg-green-500 text-white border bg-green-700 uppercase text-xs mx-auto  p-2 rounded"
                    type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
