@extends('layouts.app')

@section('content')

<div class="container">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Penjualan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('master') }}">Master</a></li>
          <li class="breadcrumb-item active">Penjualan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Penjualan</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('penjualan.index') }}">
                        @csrf

                        {{-- <div class="form-group row">
                            <label for="nofaktur" class="col-md-4 col-form-label text-md-right">No Faktur</label>

                            <div class="col-md-6">
                                <input id="nofaktur" type="text" class="form-control @error('nofaktur') is-invalid @enderror" name="nofaktur" value="{{ old('nofaktur') }}" required autocomplete="nofaktur">

                                @error('nofaktur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

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
    {{-- </div> --}}
    {{-- <div class="row"> --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <tr>
                            {{-- <th>No</th> --}}
                            <th>Tanggal Faktur</th>
                            <th>No Faktur</th>
                            <th>Nama Konsumen</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                        </tr>
                        @foreach ($penjualan as $no => $item)
                        <tr>
                            {{-- <td>{{ $penjualan->firstItem()+$no }}</td> --}}
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>{{ $item->nofaktur }}</td>
                            <td>{{ $item->namakonsumen }}</td>
                            <td>{{ $item->barang->namabarang }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>Rp.{{ number_format($item['hargajual'],0,',','.') }}</td>
                            <td>Rp.{{ number_format($item['total'],0,',','.') }}</td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $penjualan->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
