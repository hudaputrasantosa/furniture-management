@extends('dashboard')

@section('main-content')
<div class="breadcrumb-section" style="border-width : 0;">
     {{ Breadcrumbs::render('pemesanan') }}
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
<form action="{{ route('pemesanan') }}" method="get" role="search">
<div class="input-group mb-3">
     <input type="text" class="form-control" placeholder="Cari ..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
     <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
   </div> 
</form>
<div class="row">
     <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
               <div class="card-body">
                    <h4 class="card-title">Data Pemesanan</h4>
                    <div class="table-responsive">
                         <table class="table table-striped centered">
                              <thead>
                                   <tr>
                                        <th>Pemesan</th>
                                        <th>Umur</th>
                                        <th>No Telepon</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Tanggal Exp</th>
                                        <th>Barang</th>
                                        <th>Aksi</th>
                                      
                                   </tr>
                              </thead>
                              <tbody>
                                    {{-- @foreach($penjualans as $penjualan) --}}
                                   {{-- <tr>
                                        <td>{{ $penjualan->no_invoice }}</td>
                                        <td>{{ $penjualan->nama_pembeli }}</td>
                                        <td>{{ $penjualan->umur }}</td>
                                        <td>{{ $penjualan->no_telepon }}</td>
                                        <td>{{ $penjualan->alamat }}</td>
                                        <td>{{ $penjualan->kode_barang }}</td>
                                        <td>{{ $penjualan->total_harga }}</td>
                                     
                                           <td> 
                                                <form action="" onclick=" return confirm('apakah yakin?')" method="POST">
                                                  {{-- <a href="{{ route('') }}" class="btn btn-warning btn-sm">
                                                       <i class="mdi mdi-pencil"></i>
                                                     </a>
                                                     
                                                  @method('delete')
                                                  @csrf --}}
                                                  {{-- <button class="btn btn-primary btn-rounded">
                                                       Cetak Invoice
                                                  </button>
                                                </form> 
                                             
                                               
                                         </td>
                                   </tr>  --}}
                                    {{-- @endforeach --}}
                              </tbody>
                         </table>
                    </div>
                    <div class="mt-4">
                         {{-- {{ $barangs->links() }} --}}
                    </div>
                   <div class="mt-4">
                   </div>
               </div>
          </div>
     </div>
</div>


@endsection