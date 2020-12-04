@extends('main')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Penjualan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('penjualan') }}">Home</a></li>
          <li class="breadcrumb-item active">Data Penjualan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Penjualan</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <a href="{{ route('penjualan.create') }}" class="btn btn-primary">add new</a>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Faktur</th>
                            <th>No Faktur</th>
                            <th>Nama Konsumen</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($penjualan as $no => $item)
                        <tr>
                            <td>{{ $penjualan->firstItem()+$no }}</td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>{{ $item->nofaktur }}</td>
                            <td>{{ $item->namakonsumen }}</td>
                            <td>{{ $item->barang->namabarang }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>Rp.{{ number_format($item['hargajual'],0,',','.') }}</td>
                            <td>Rp.{{ number_format($item['total'],0,',','.') }}</td>
                            <td>
                                <form action="{{ route('penjualan.destroy' , $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">del</button>

                                </form>
                            </td>
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
