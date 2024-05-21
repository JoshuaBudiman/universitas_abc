@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Tambah Mata Kuliah Baru</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('matakuliah.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label>Nama Mata Kuliah: </label>
                        <input type="text" class="form-control" name="nama_matakuliah" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Hari: </label>
                        <input type="text" class="form-control" name="hari" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jam Mulai Kelas: </label>
                        <input type="text" class="form-control" name="mulai_kelas" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jam Akhir Kelas: </label>
                        <input type="text" class="form-control" name="akhir_kelas" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jumlah SKS: </label>
                        <input type="number" class="form-control" name="sks_matakuliah" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Ruangan Kelas: </label>
                        <input type="text" class="form-control" name="ruang_kelas" required>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        
                    <input type="hidden" name="dosen_id" value="1">
                    
                    <button type="submit" class="btn btn-success">Buat Mata Kuliah</button>
                </form>
            </div>

        </div>
    </div>
@endsection