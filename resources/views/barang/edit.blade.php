@extends('dashboard')

@section('main-content')
<div class="breadcrumb-section">
  {{ Breadcrumbs::render('edit') }}
<div class="col grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <h4 class="card-title">Edit Barang</h4>
         <form class="forms-sample" action="{{ route('updateBarang', $barang->kode_barang) }}" method="POST" enctype="multipart/form-data">
         @csrf
          @method('PUT')
          
           <div class="form-group">
             <label>Nama Barang</label>
             <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}">
           </div>

           <div class="form-group">
               <label>Harga</label>
               <input type="number" class="form-control" placeholder="Harga" name="harga" value="{{ old('harga', $barang->harga) }}">
             </div>
             
             <div class="form-group">
               <label>Stok</label>
               <input type="number" class="form-control" placeholder="Stok" name="stok" value="{{ old('stok', $barang->stok) }}">
             </div>

             <div class="mb-5">
               <label for="formFileSm" class="form-label">Foto</label>
               <div class="mb-3">
                <img src="{{ asset('storage/images/barang/'.$barang->foto) }}" width="50" alt="">
               </div>
               <input class="form-control form-control-sm" name="foto" type="file">
             </div>

             <div class="form-group">
               <label>Deskripsi</label>
               <textarea type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" value="huhu">
              {{ old('deskripsi', $barang->deskripsi) }}
               </textarea>
             </div>

           <button type="submit" class="btn btn-primary me-2">Submit</button>
           <button class="btn btn-light">Cancel</button>
         </form>
       </div>
     </div>
   </div>
@endsection