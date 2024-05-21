@extends('layouts.main')

@section('content')
    <h2>Dashboard Dosen</h2>
    <div>
        <a class=" btn btn-primary" href="{{route('matakuliah.create')}}">Tambah Mata Kuliah</a>
    </div>
    
    <br>

    @if ($matakuliahs->isEmpty())
        <p>
            <b>Belum ada mata kuliah yang dibuat </b>
        </p>
    @else
        <table class="table">
            <thead> 
                <th scope="col">Nama Mata Kuliah</th>
                {{-- <th scope="col">Hari</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Berakhir</th>
                <th scope="col">SKS</th>
                <th scope="col">Ruangan Kelas</th> --}}
                <th scope="col">Dosen Pengajar</th>
                <th scope="col">Aksi</th>
            </thead>    
        @foreach ($matakuliahs as $matakuliah)
            <tr>
                <td>{{$matakuliah['nama_matakuliah']}}</td>
                {{-- <td>{{$matakuliah['hari']}}</td>
                <td>{{$matakuliah['mulai_kelas']}}</td>
                <td>{{$matakuliah['akhir_kelas']}}</td>
                <td>{{$matakuliah['sks_matakuliah']}}</td>
                <td>{{$matakuliah['ruang_kelas']}}</td> --}}
                <td>{{$matakuliah->dosen->nama_dosen}}</td>
                <td>
                    <a class="btn btn-success" href="{{route("matakuliah.show", $matakuliah->matakuliah_id)}}">Lihat Detail</a>    
                </td>
                
            </tr>
        @endforeach
        </table>
    @endif
    



@endsection