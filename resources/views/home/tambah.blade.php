@extends('template.templateform')
@section('title')
    Tambah Data
@endsection
@section('content')
    <div class="flex items-center h-screen  w-full bg-teal-lighter dark:bg-green-500">
        <div class="w-full bg-white rounded shadow-lg p-4 m-32">
            <form class="mb-4" action="{{route('simpan.pasien')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="first_name">Nik</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="text" name="nik" value="{{old('nik')}}" id="nik" placeholder="nik">
                    <span>{{$errors->first('nik')}}</span>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="last_name">Nama Pasien</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="text" name="nama_pasien" value="{{old('nama_pasien')}}" id="nama_pasien" placeholder="nama pasien">
                    <span>{{$errors->first('nama_pasien')}}</span>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="email">Tanggal Lahir</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="date" name="tgl_lahir" value="{{old('tanggal_lahir')}}" id="tgl_lahir" placeholder="tanggal lahir">
                    <span>{{$errors->first('tgl_lahir')}}</span>
                </div>
                <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="password">Jenis Kelamin</label>
                    <select class="border py-2 px-3 text-grey-darkes rounded-md" name="jenis_kelamin"  id="">
                        <option value="">--Pilih Jenin Kelamin--</option>
                        <option value="P">P</option>
                        <option value="L">L</option>
                    </select>
                    <span>{{$errors->first('jenis_kelamin')}}</span>
                </div>
                <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="password">Alamat</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="text" name="alamat" value="{{old('alamat')}}" id="alamat" placeholder="alamat">
                    <span>{{$errors->first('alamat')}}</span>
                </div>
                <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="password">Telepon</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="text" name="telepon" value="{{old('telepon')}}" id="telepon" placeholder="telepon">
                    <span>{{$errors->first('telepon')}}</span>
                </div>
                <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="password">Foto</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="file" name="foto" value="{{old('foto')}}" id="foto" placeholder="foto">
                </div>
                <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="password">Status</label>
                    <select name="status" id="">
                        <option value="">--Silahkan Pilihh Status--</option>
                        <option value="rawat jalan">Rawat Jalan</option>
                        <option value="inap">Inap</option>
                        <option value="keluar">Keluar</option>
                    </select>
                    <span>{{$errors->first('status')}}</span>
                </div>
                <button class="block bg-teal hover:bg-green-500 text-white border bg-green-700 uppercase text-xs mx-auto  p-2 rounded"
                    type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
