@extends('main')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Barang</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('barang') }}">Home</a></li>
          <li class="breadcrumb-item active">Edit Barang</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Barang</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('barang.update', $barang->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="barang_id" class="col-md-4 col-form-label text-md-right">Kode Barang</label>

                            <div class="col-md-6">
                                <input id="barang_id" type="text" class="form-control @error('barang_id') is-invalid @enderror" name="barang_id" value="{{ $barang->barang_id }}" required autocomplete="barang_id" autofocus>

                                @error('barang_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="namabarang" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" value="{{ $barang->namabarang }}" required autocomplete="namabarang">

                                @error('namabarang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hargajual" class="col-md-4 col-form-label text-md-right">Harga Jual</label>

                            <div class="col-md-6">
                                <input id="hargajual" type="text" class="form-control @error('hargajual') is-invalid @enderror" name="hargajual" value="{{ $barang->hargajual }}" required autocomplete="hargajual">

                                @error('hargajual')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hargabeli" class="col-md-4 col-form-label text-md-right">Harga Beli</label>

                            <div class="col-md-6">
                                <input id="hargabeli" type="text" class="form-control @error('hargabeli') is-invalid @enderror" name="hargabeli" value="{{ $barang->hargabeli }}" required autocomplete="hargabeli">

                                @error('hargabeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="satuan" class="col-md-4 col-form-label text-md-right">Satuan</label>

                            <div class="col-md-6">
                                <input id="satuan" type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ $barang->satuan }}" required autocomplete="satuan">

                                @error('satuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategory" class="col-md-4 col-form-label text-md-right">Kategory</label>

                            <div class="col-md-6">
                                <input id="kategory" type="text" class="form-control @error('kategory') is-invalid @enderror" name="kategory" value="{{ $barang->kategory }}" required autocomplete="new-kategory">

                                @error('kategory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
