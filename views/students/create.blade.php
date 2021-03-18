@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa Ilkom')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Mahasiswa Ilkom</h1>   
                <form method="POST" action="/students">
                @csrf
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" placeholder="Masukkan Nama" name="Nama" value="{{old('Nama')}}">
                             @error('Nama')<div class = "invalid-feedback">{{$message}}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" class="form-control @error('Nim') is-invalid @enderror" id="Nim" placeholder="Masukkan Nim" name="Nim" value="{{old('Nim')}}">
                            @error('Nim')<div class = "invalid-feedback">{{$message}}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <input type="text" class="form-control @error('Kelas') is-invalid @enderror" id="Kelas" placeholder="Masukkan Kelas" name="Kelas" value="{{old('Kelas')}}">
                            @error('Kelas')<div class = "invalid-feedback">{{$message}}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="Skor">Skor</label>
                            <input type="text" class="form-control @error('Skor') is-invalid @enderror" id="Skor" placeholder="Masukkan Skor" name="Skor" value="{{old('Skor')}}">
                            @error('Skor')<div class = "invalid-feedback">{{$message}}</div>@enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection

   