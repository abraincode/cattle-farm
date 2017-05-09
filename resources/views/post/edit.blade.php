@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Mahasiswa</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="PUT" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
                            <label for="nim" class="col-md-4 control-label">NIM</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control" name="nim" value="{{ $mahasiswa->nim }}" required autofocus>

                                @if ($errors->has('nim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <textarea name="alamat" rows="8" cols="80" id="alamat" type="text" class="form-control" value="{{ $mahasiswa->alamat }}" required></textarea>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                            <label for="telepon" class="col-md-4 control-label">Telepon</label>

                            <div class="col-md-6">
                                <input id="telepon" type="text" class="form-control" name="telepon" value="{{ $mahasiswa->telepon }}" required>

                                @if ($errors->has('telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                              <div class="radio">
                                <label><input type="radio" name="jenis_kelamin" value="{{ $mahasiswa->jenis_kelamin }}">Laki-laki</label>
                                <label><input type="radio" name="jenis_kelamin" value="{{ $mahasiswa->jenis_kelamin }}">Perempuan</label>
                              </div>
                            </div>

                            @if ($errors->has('jenis_kelamin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="agama" class="col-md-4 control-label">Agama</label>

                            <div class="col-md-6">
                              <select class="form-control" id="agama" name="agama">
                                <option selected="selected">-- Pilih --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                              </select>
                            </div>

                            @if ($errors->has('agama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('agama') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Perbarui
                                </button>
                            </div>
                        </div>
                      {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
