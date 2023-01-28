@extends('dashboard')

@section('main-content')
<div class="breadcrumb-section" style="border-width : 0;">
     {{ Breadcrumbs::render('penjualan') }}
</div>
@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
     {{ session('error') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@elseif(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
     {{ session('success') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<form action="{{ route('penjualan') }}" method="get" role="search">
<div class="input-group mb-3">
     <input type="text" class="form-control" placeholder="Cari ..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
     <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
   </div> 
</form>
<div class="row">
     <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
               <div class="card-body">
                    <h4 class="card-title">Data Penjualan</h4>
                    <a href="{{ route('create-penjualan') }}" type="button" class="btn btn-primary btn-icon-text text-white">
                         <i class="ti-file btn-icon-prepend"></i>
                         Tambah Data Penjualan
                       </a>
                    <div class="table-responsive">
                         <table class="table table-striped centered">
                              <thead>
                                   <tr>
                                       
                                        <th>Invoice</th>
                                        <th>Pembeli</th>
                                        <th>Umur</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Barang</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                      
                                   </tr>
                              </thead>
                              <tbody>
                                    @foreach($penjualans as $penjualan)
                                   <tr>
                                        <td>{{ $penjualan->no_invoice }}</td>
                                        <td>{{ $penjualan->nama_pembeli }}</td>
                                        <td>{{ $penjualan->umur }}</td>
                                        <td>{{ $penjualan->no_telepon }}</td>
                                        <td>{{ $penjualan->alamat }}</td>
                                        <td>{{ $penjualan->nama_barang }}</td>
                                        <td>{{ $penjualan->total_harga }}</td>
                                     
                                           <td> 
                                                <form action="" onclick=" return confirm('apakah yakin?')" method="POST">
                                                  <a href="{{ route('cetak-invoice', $penjualan->id_penjualan) }}" class="btn btn-primary btn-sm text-white">
                                                       Cetak Invoice
                                                     </a>
                                                     
                                                  @method('delete')
                                                  @csrf
                                                  {{-- <button class="btn btn-primary btn-rounded text-white">
                                                       Cetak Invoice
                                                  </button> --}}
                                                </form> 
                                             
                                               
                                         </td>
                                   </tr>
                                    @endforeach
                              </tbody>
                         </table>
                    </div>
                    <div class="mt-4">
                         {{ $penjualans->links() }}
                    </div>
                   <div class="mt-4">
                   </div>
               </div>
          </div>
     </div>
</div>


@endsection