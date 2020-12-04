@extends('main')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Penjualan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('penjualan') }}">Home</a></li>
          <li class="breadcrumb-item active">Penjualan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Penjualan</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('penjualan.index') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nofaktur" class="col-md-4 col-form-label text-md-right">No Faktur</label>

                            <div class="col-md-6">
                                <input id="nofaktur" type="text" class="form-control @error('nofaktur') is-invalid @enderror" name="nofaktur" value="{{ old('nofaktur') }}" required autocomplete="nofaktur">

                                @error('nofaktur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="namakonsumen" class="col-md-4 col-form-label text-md-right">Nama Konsumen</label>

                            <div class="col-md-6">
                                <input id="namakonsumen" type="text" class="form-control @error('namakonsumen') is-invalid @enderror" name="namakonsumen" required autocomplete="namakonsumen">

                                @error('namakonsumen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="barang_id" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <select id="barang_id" class="form-control @error('barang_id') is-invalid @enderror" name="barang_id">
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id }}">{{ $item->barang_id }} - {{ $item->namabarang }} - {{ number_format($item['hargajual'],0,',','.') }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">Jumlah</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" required autocomplete="jumlah">

                                @error('jumlah')
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
