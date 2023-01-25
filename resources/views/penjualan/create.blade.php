@extends('dashboard')

@section('main-content')
{{-- <script>
  $(document).ready(function(){
  $('#kuantitas','#pilihBarang').keyup(function(){

    let kuantitas = Number($('#price').val());
    let barang = $('#pilihBarang');
    

  })
  } )
</script> --}}
<div class="breadcrumb-section">
  {{ Breadcrumbs::render('create-penjualan') }}
</div>
<div class="col grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <h4 class="card-title">Tambah Data Penjualan</h4>
         <form class="forms-sample" action="{{ route('store-penjualan') }}" method="POST" enctype="multipart/form-data"> @csrf

           <div class="form-group">
             <label>Nama Pembeli</label>
             <input type="text" class="form-control" placeholder="Nama Pembeli" name="nama_pembeli">
           </div>

           <div class="form-group">
               <label>Umur</label>
               <input type="number" class="form-control" placeholder="Umur" name="umur">
             </div>

           <div class="form-group">
               <label>No Telepon</label>
               <input type="number" class="form-control" placeholder="No Telepon" name="no_telepon">
             </div>
             
             <div class="form-group">
               <label>Alamat</label>
               <input type="text" class="form-control" placeholder="Alamat" name="alamat">
             </div>

             <div class="form-group">
               <label>Kuantitas</label>
               <input type="number" class="form-control" placeholder="Jumlah Barang" id="kuantitas" value="1" name="kuantitas">
             </div>

             <div class="form-group">
              <label>Nama Barang</label>
              <select class="form-control" name="pilihBarang">
                @foreach($barangs as $barang)
                <option value="{{ $barang->kode_barang }}">{{ $barang->nama_barang.'- Rp. '.$barang->harga }}</option>
                @endforeach
              </select>
            </div>

             {{-- <div class="form-group">
               <label>Total Harga</label>
               <input type="number" class="form-control" id="total_harga" name="total_harga" readonly>
             </div> --}}

           <button type="submit" class="btn btn-primary me-2">Submit</button>
           <button class="btn btn-light">Cancel</button>
         </form>
       </div>
     </div>
   </div>
@endsection