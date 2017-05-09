@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lihat Mahasiswa</div>
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
                    <tr>
                      <td>{{ $mahasiswa->id }}</td>
                      <td>{{ $mahasiswa->nim }}</td>
                      <td>{{ $mahasiswa->nama }}</td>
                      <td>{{ $mahasiswa->alamat }}</td>
                      <td>{{ $mahasiswa->telepon }}</td>
                      <td>{{ $mahasiswa->jenis_kelamin }}</td>
                      <td>{{ $mahasiswa->agama }}</td>
                      <td>{{ $mahasiswa->created_at->format('M d, Y') }}</td>
                      <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-default btn-sm">Edit</a>
                        <form class="" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="submit" value="Hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin dihapus?');">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
