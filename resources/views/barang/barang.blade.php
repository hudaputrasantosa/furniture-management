@extends('dashboard')

@section('main-content')
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
<div class="row">
     <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
               <div class="card-body">
                    <h4 class="card-title">Data Barang</h4>
                    <a href="{{ route('createBarang') }}" type="button" class="btn btn-primary btn-icon-text text-white">
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
                                             
                                                <form action="{{ url('barang/hapus/'.$barang->kode_barang) }}" onclick=" return confirm('apakah yakin?')" method="POST">
                                                  <a href="{{ route('barangEdit', $barang->kode_barang) }}" class="btn btn-warning btn-sm btn-icon">
                                                       <i class="ti-world"></i>
                                                     </a>
                                                  @method('delete')
                                                  @csrf
                                                  <button class="btn btn-danger btn-rounded btn-icon">
                                                       <i class="ti-world"></i>
                                                  </button>
                                                </form>
                                                {{-- <a href="{{ url('barang/hapus/'.$barang->kode_barang) }}">Apuss</a> --}}
                                               
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>


@endsection