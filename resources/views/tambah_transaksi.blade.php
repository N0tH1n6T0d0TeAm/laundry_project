@extends('layout')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css">

<script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>
  <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">

<style>
    form{
        color: white;
        margin-left: 10px;
    }

    .pelanggan{
        margin-left: 20rem;
        margin-top: -5em;
    }

    .paket{
        margin-left: 44rem;
        margin-top: -5em;
    }

    .berat{
        margin-left: 65rem;
        margin-top: -5em;
    }

    .batas_transkasi{
        margin-left: 32rem;
        margin-top: -5em;
    }

    .tanggal_bayar{
        margin-left: 55rem;
        margin-top: -5em;
    }

    .status_bayar{
        margin-left: 32rem;
        margin-top: -5em;
    }
    .penanggung_jawab{
        margin-left:55em;
        margin-top: -5em;
    }

</style>
    


<br>
<form action="/tambah_transaksi" method="POST">
    @csrf
    <h2>Tambah Transaksi Data</h2>
    <hr style="border: 1px solid white; width: 85rem; margin-left: 2px;">
<div class="outlet">
    <p>Pilih Outlet :</p>
  <select class="outs" name="outlet" style="border: 1px solid blue; height: 120px; width: 11rem;border-radius: 5px; text-align: center" required>
  <option>-- Jenis-- </option>
  @foreach($lihat as $out)
  <option value="{{$out->id_outlet}}">{{$out->nama_outlet}}</option>
  @endforeach
  </select>
</div>

<div class="pelanggan">
    <p>Pilih Pelanggan :</p>
    <input list="brow" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center" name="nama_pelanggan" placeholder="Pilih Id Pelanggan">
  <datalist id="brow"  required>
  @foreach($data_pelanggan as $pel)
  <option value="L{{$pel->id}} : {{$pel->nama_pel}}">{{$pel->nama_pel}}</option>
  @endforeach
</datalist>
</div>

<div class="paket">
    <p>Pilih Paket :</p>
  <select name="jenis" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center; cursor:pointer" required>
  <option>-- Paket --</option>
  @foreach($data_paket as $paket)
  <option value="{{$paket->nama_paket}}:{{$paket->harga}}">{{$paket->nama_paket}} - Rp.{{number_format($paket->harga)}}</option>
  @endforeach
  </select>
</div>

<div class="berat">
    <p>Berat :</p>
    <input id="berat" type="number" style="border: 1px solid blue; height: 40px; width: 5rem;border-radius: 5px; text-align: center" name="berat" required> 
   <i >Kg</i>
</div>

<br><br><br>
<div class="tanggal_transkasi">
<p>Tanggal Transaksi : </p>
<input class="tanggal_transaksi"  value="{{\Carbon\Carbon::now()->toDateString()}}" type="date" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center;color:white" name="tanggal_transaksi" disabled>

<input value="{{\Carbon\Carbon::now()->toDateString()}}" type="hidden" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center;" name="tanggal_transaksi">
</div>

<div class="batas_transkasi">
<p>Batas Waktu Mencuci : </p>
<input id="batas_waktu" value="{{\Carbon\Carbon::now()->addDay(2)->toDateString()}}" type="date" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center; color: white;" name="batas_transaksi" disabled>

<input value="{{\Carbon\Carbon::now()->addDay(2)->toDateString()}}" type="hidden" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center;" name="batas_transaksi">
</div>

<div class="tanggal_bayar">
<p>Tanggal Bayar : </p>
<input type="date" value="{{\Carbon\Carbon::now()->toDateString()}}" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center" name="tanggal_bayar">
</div>

<br><br>
<div class="status">
    <p>Status :</p>
  <select name="status" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center; color: black;" disabled required>
  <option value="Diproses">Diproses</option>
  </select>

  <input type="hidden" name="status" value="Diproses">
</div>

<div class="status_bayar">
    <p>Status Bayar :</p>
  <select name="pembayaran" style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center; color: black; cursor: pointer" required>
  <option>-- Pilih --</option>
  <option>Dibayar</option>
  <option>Belum Dibayar</option>
  </select>
</div>


<div class="penanggung_jawab">
    <p>Penanggung Jawab :</p>
  <input type="text"  style="border: 1px solid blue; height: 40px; width: 11rem;border-radius: 5px; text-align: center; color: black;" value="{{auth()->user()->nama_pengguna}}" disabled required>
</div>

<input type="hidden" name="penanggung_jawab" value="{{auth()->user()->nama_pengguna}}">
<br><br>
<button class="btn btn-success">Simpan</button>
<input type="reset" class="btn btn-info">

</form>

<script>
   jQuery('.outs').chosen();

</script>
@endsection