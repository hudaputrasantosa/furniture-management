@extends('dashboard')

@section('main-content')
<div class="breadcrumb-section">
  {{ Breadcrumbs::render('create-pembelian') }}
</div>
<div class="col grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <h4 class="card-title">Tambah Pembelian</h4>
         <form class="forms-sample" action="{{ route('store-pembelian') }}" method="POST" enctype="multipart/form-data"> @csrf

           <div class="form-group">
             <label>Nama Barang</label>
             <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
           </div>

           <div class="form-group">
               <label>Harga</label>
               <input type="number" class="form-control" placeholder="Harga" name="harga">
             </div>
             
             <div class="form-group">
               <label>Kuantitas</label>
               <input type="number" class="form-control" placeholder="Stok" name="kuantitas">
             </div>

             <div class="mb-3">
               <label for="formFileSm" class="form-label">Foto</label>
               <input class="form-control form-control-sm" name="foto" type="file">
             </div>

             <div class="form-group">
               <label>Deskripsi</label>
               <input class="form-control form-control-sm" name="deskripsi" placeholder="Deskripsi" type="text">
             </div>

             <div class="form-group">
               <label>Nama Supplier</label>
               <select class="form-control" name="pilihSupplier">
                 @foreach($suppliers as $supplier)
                 <option value="{{ $supplier->id_supplier }}">{{ $supplier->nama_supplier }}</option>
                 @endforeach
               </select>
             </div>

           <button type="submit" class="btn btn-primary me-2">Submit</button>
           <button class="btn btn-light">Cancel</button>
         </form>
       </div>
     </div>
   </div>
@endsection