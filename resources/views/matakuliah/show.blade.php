@extends('layouts.main')

@section('content')
<h2>Detail Mata Kuliah</h2>
<p>Nama Mata Kuliah : {{$matakuliah['nama_matakuliah']}}</p>
<p>Hari : {{$matakuliah['hari']}}</th>
<p>Jam : {{$matakuliah['mulai_kelas']}}-{{$matakuliah['akhir_kelas']}}</p>
<p>SKS : {{$matakuliah['sks_matakuliah']}}</p>
<p>Ruangan Kelas : {{$matakuliah['ruang_kelas']}}</p>
<p>Dosen Pengajar : {{$matakuliah->dosen->nama_dosen}}</p>
@endsection