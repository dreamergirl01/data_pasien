@extends('template.templateform')
@section('title')
    Tambah Data
@endsection
@section('content')
    <div class="flex items-center h-screen  w-full bg-teal-lighter dark:bg-green-500">
        <div class="w-full bg-white rounded shadow-lg p-4 m-32">
            <form class="mb-4" action="{{route('dokter.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-xs text-grey-darkest" for="first_name">Nama Dokter</label>
                    <input class="border py-2 px-3 text-grey-darkest rounded-md" type="text" name="nama_dokter" value="{{old('nama_dokter')}}" id="" placeholder="nama dokter">
                    <span>{{$errors->first('nik')}}</span>
                </div>
                <button class="block bg-teal hover:bg-green-500 text-white border bg-green-700 uppercase text-xs mx-auto  p-2 rounded"
                    type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
