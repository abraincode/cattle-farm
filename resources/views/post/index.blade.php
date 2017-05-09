@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Mahasiswa</div>
                <div class="panel-body">
                  <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Dibuat</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($semuamahasiswa as $mahasiswa)
                    <tr>
                      <td>{{ $mahasiswa->id }}</td>
                      <td>{{ $mahasiswa->nim }}</td>
                      <td>{{ $mahasiswa->nama }}</td>
                      <td>{{ $mahasiswa->alamat }}</td>
                      <td>{{ $mahasiswa->telepon }}</td>
                      <td>{{ $mahasiswa->jenis_kelamin }}</td>
                      <td>{{ $mahasiswa->agama }}</td>
                      <td>{{ $mahasiswa->created_at->format('M d, Y') }}</td>
                      <td><a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-success btn-sm">View</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
