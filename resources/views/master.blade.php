@extends('layouts.app')

@section('content')
<div class="container">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Master</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('penjualan/create') }}">Penjualan</a></li>
          <li class="breadcrumb-item active">Master</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang</div>
                    <div class="card-body">
                    <table class="table table-border table-striped">
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Jual</th>
                            <th>Satuan</th>
                            <th>Kategory</th>
                        </tr>
                        @foreach ($barang as $no => $item)
                        <tr>
                            <td>{{ $barang->firstItem()+$no }}</td>
                            <td>{{ $item->barang_id }}</td>
                            <td>{{ $item->namabarang }}</td>
                            <td>Rp.{{ number_format($item['hargajual'],0,',','.') }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->kategory }}</td>
                        </tr>
                         @endforeach
                    </table>
                    {{ $barang->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
