@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa Ilkom</h1>

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope ="col">No</th>
                            <th scope ="col">Nama</th>
                            <th scope ="col">Nim</th>
                            <th scope ="col">Kelas</th>
                            <th scope ="col">Skor</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($mahasiswa as $mhs)
                        <tr>
                            <th scope ="row" >{{ $loop->iteration }}</th>
                            <td>{{ $mhs->Nama }}</td>
                            <td>{{ $mhs->Nim }}</td>
                            <td>{{ $mhs->Kelas }}</td>
                            <td>{{ $mhs->Skor }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <label for="max" class="ml-4">Skor Maks: <b>{{ $max }}</b></label>
                    <label for="min" class="ml-4">Skor Min: <b>{{ $min }}</b></label>
                    <label for="rata2" class="ml-4">Rata-Rata: <b>{{ $rata2 }}</b></label>

                    <h2>Tabel Frekuensi</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td scope="col">Skor</td>
                                    <td scope="col">Frekuensi</td>
                                </tr>
                           </thead>
                           <tbody>
                               @foreach ($frekuensi as $skor)
                               
                               <tr>
                                   <td> {{ $skor->skor }} </td>
                                   <td> {{ $skor->frekuensi }}</td>
                                </tr>
                                 
                                @endforeach
                                <tr>
                                    <td> <b>Total Skor:</b>  </td>
                                    <td> {{ $totalskor }}</td>
                                </tr>
                                <tr>
                                    <td> <b>Total Frekuensi:</b>  </td>
                                    <td> {{ $totalfrekuensi }}</td>
                                </tr>
                           </tbody>
                        </table>
            </div>
        </div>
    </div>
@endsection

   