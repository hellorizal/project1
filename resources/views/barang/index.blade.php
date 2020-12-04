@extends('main')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Barang</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('barang') }}">Home</a></li>
          <li class="breadcrumb-item active">Barang</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <a href="{{ route('barang.create') }}" class="btn btn-primary">add new</a>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Satuan</th>
                            <th>Kategory</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($barang as $no => $item)
                        <tr>
                            <td>{{ $barang->firstItem()+$no }}</td>
                            <td>{{ $item->barang_id }}</td>
                            <td>{{ $item->namabarang }}</td>
                            <td>Rp.{{ number_format($item['hargajual'],0,',','.') }}</td>
                            <td>Rp.{{ number_format($item['hargabeli'],0,',','.') }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->kategory }}</td>
                            <td>
                                <form action="{{ route('barang.destroy' , $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">del</button>
                                    <a href="{{ route('barang.edit' , $item->id) }}" class="btn btn-warning">edit</a>
                                </form>
                            </td>
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
