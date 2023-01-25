@extends('dashboard')

@section('main-content')
<div class="breadcrumb-section" style="border-width : 0;">
     {{ Breadcrumbs::render('home') }}
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
<form action="{{ route('barang') }}" method="get" role="search">
<div class="input-group mb-3">
     <input type="text" class="form-control" placeholder="Cari ..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
     <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
   </div> 
</form>
<div class="row">
     <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
               <div class="card-body">
                    <h4 class="card-title">Data Barang</h4>
                    <a href="{{ route('create') }}" type="button" class="btn btn-primary btn-icon-text text-white">
                         <i class="ti-file btn-icon-prepend"></i>
                         Tambah Data
                       </a>
                    <div class="table-responsive">
                         <table class="table table-striped centered">
                              <thead>
                                   <tr>
                                        {{-- <th>Kode</th> --}}
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                      
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach($barangs as $barang)
                                   <tr>
                                        {{-- <td>{{ $barang->kode_barang }}</td> --}}
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->harga }}</td>
                                        <td>{{ $barang->stok }}</td>
                                        <td>
                                        <img src=" {{ asset('storage/images/barang/'.$barang->foto) }}" alt=""> 
                                        </td>
                                        <td>{{ $barang->deskripsi }}</td>
                                        <td>
                                            
                                                <form action="{{ url('barang/hapus/'.$barang->kode_barang) }}" onclick="return confirm('Apakah yakin untuk meghapus/mengedit?')" method="POST">
                                                  <a href="{{ route('edit', $barang->kode_barang) }}" class="btn btn-warning btn-sm">
                                                       <i class="mdi mdi-pencil"></i>
                                                     </a>
                                                     
                                                  @method('delete')
                                                  @csrf
                                                  <button class="btn btn-danger btn-rounded">
                                                       <i class="mdi mdi-close-circle"></i>
                                                  </button>
                                                </form>
                                                {{-- <a href="{{ url('barang/hapus/'.$barang->kode_barang) }}">Apuss</a> --}}
                                               
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
                    <div class="mt-4">
                         {{ $barangs->links() }}
                    </div>
                   <div class="mt-4">
                   </div>
               </div>
          </div>
     </div>
</div>


@endsection