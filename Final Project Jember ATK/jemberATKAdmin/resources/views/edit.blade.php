@extends('layouts.admin')

@section('content')
    <form action="{{route('produk.update', $id->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputName">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="nama" value="{{$id->nama}}">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" placeholder="Harga ..." name="harga" value="{{$id->harga}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pilih Category</label>
                        <select class="form-control" name="kategori_id" value="{{$id->kategori_id}}">
                          <option value="1">pulpen tulis</option>
                          <option value="1">buku tulis</option>
                          <option value="1">option 3</option>
                          <option value="1">option 4</option>
                          <option value="1">option 5</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Harga Nameset</label>
                        <input type="text" class="form-control" placeholder="Harga ..." name="harga_nameset" value="{{$id->harga_nameset}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Berat</label>
                        <input type="text" class="form-control" placeholder="berat ..." name="berat" value="{{$id->berat}}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="jenis" value="{{$id->jenis}}"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar" value="{{$id->gambar}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('produk.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection