@extends('dashboard')

@section('main-content')
<div class="row">

     <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
               <div class="card-body">
                    <h4 class="card-title">Data Barang</h4>
                    <button type="button" class="btn btn-primary btn-icon-text text-white">
                         <i class="ti-file btn-icon-prepend"></i>
                         Tambah Data
                       </button>
                    <div class="table-responsive">
                         <table class="table table-striped centered">
                              <thead>
                                   <tr>
                                        <th>Kode</th>
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
                                        <td>{{ $barang->kode_barang }}</td>
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->harga }}</td>
                                        <td>{{ $barang->stok }}</td>
                                        <td>{{ $barang->foto }}</td>
                                        <td>{{ $barang->deskripsi }}</td>
                                        <td>
                                             <button type="button" class="btn btn-warning btn-sm btn-icon">
                                                  <i class="ti-world"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                                  <i class="ti-world"></i>
                                                </button>
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