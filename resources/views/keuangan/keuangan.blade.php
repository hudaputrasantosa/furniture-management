@extends('dashboard')

@section('main-content')
<div class="breadcrumb-section" style="border-width : 0;">
     {{ Breadcrumbs::render('keuangan') }}
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

     <form class="row g-3" method="GET" enctype="multipart/form-data" action="{{ route('keuangan') }}">
          <div class="col-auto">
               <label for="tahun1" class="visually-hidden">Date</label>
               <input name="tahun1" type="date" class="form-control" id="tahun1" placeholder="tahun1" required>
          </div>
          <div class="col-auto">
               sampai dengan
          </div>
          <div class="col-auto">
            <label for="tahun2" class="visually-hidden">Date</label>
            <input name="tahun2" type="date" class="form-control" id="tahun2" placeholder="Password" required>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3 text-white">Cari</button>
          </div>
     </form>

<div class="row">
     <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
               <div class="card-body">
                    <h4 class="card-title">Laporan Keuangan</h4>
                    <button type="submit" class="btn btn-warning mb-3">Cetak Laporan Keuangan</button>
                    <div class="table-responsive">
                         <table class="table table-striped centered">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Nama Customer</th>
                                        <th>Jenis Barang</th>
                                        <th>Total Harga</th>
                                      
                                      
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                   $i = 1; 
                                   @endphp
                                    @foreach($datas as $data)
                                   
                                   <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->nama_pembeli }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->total_harga }}</td>
                                        
                                   </tr>                               
                                    @endforeach
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                        <td><b>Total</b></td>
                                        <td><b>{{ $datas->pluck('total_harga')->sum() }}</b></td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
                    <div class="mt-4">
                        {{ $datas->links() }} 
                    </div>
                   <div class="mt-4">
                   </div>
               </div>
          </div>
     </div>
</div>


@endsection