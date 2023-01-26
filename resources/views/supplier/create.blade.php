@extends('dashboard')

@section('main-content')
<div class="breadcrumb-section">
  {{ Breadcrumbs::render('create-supplier') }}
</div>
<div class="col grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <h4 class="card-title">Tambah Data Supplier</h4>
         <form class="forms-sample" action="{{ route('store-supplier') }}" method="POST" enctype="multipart/form-data"> @csrf

           <div class="form-group">
             <label>Nama Supplier</label>
             <input type="text" class="form-control" placeholder="Nama Supplier" name="nama_supplier">
           </div>

           <div class="form-group">
               <label>No Telepon</label>
               <input type="number" class="form-control" placeholder="No Telepon" name="no_telepon">
             </div>

             <div class="form-group">
               <label>Alamat</label>
               <input type="text" class="form-control" placeholder="Alamat Supplier" name="alamat">
             </div>

             <div class="mb-3">
               <label for="formFileSm" class="form-label">Foto</label>
               <input class="form-control form-control-sm" name="foto" type="file">
             </div>

           <button type="submit" class="btn btn-primary me-2 text-white">Submit</button>
           <button class="btn btn-light">Cancel</button>
         </form>
       </div>
     </div>
   </div>
@endsection