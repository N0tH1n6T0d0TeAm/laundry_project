@extends('layout')
@section('content')


@php
function tgl_indo($tanggal){
    $bulan=array(
        1=>'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
);
$pecahkan=explode('-',$tanggal);
return $pecahkan[2].' '.$bulan[(int)$pecahkan[1]].' '.$pecahkan[0];
}
@endphp

<style>
    .utama{
        margin-left: 15em;
        background: #d5cdcdbf;
        text-align: center;
        width: 70%;
        line-height: 1em;
        border-radius: 5px;
    }

    table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #574f4f;
}
</style>


<br><br><br>
<div class="utama">
    <br>
    <h2 style="margin-right: 30em;">Pengeluaran</h2>
    <a href="/laporan_pengeluaran" style="margin-left: 50em; margin-top: -4em;" class="btn btn-primary">Tambah Pengeluaran</a>
</div>



<h2 style="background: #21ff5c; width: 400px; border-radius: 5px; font-size: 28px">{{session('berhasil')}}</h2>
<table id="table" width="900px" style="text-align: center; background: #a19d9d; color: white; margin-left: 10em; margin-top: 3em;">

    <tr>
        <th>No</th>
        <th>Outlet</th>
        <th>Tanggal</th>
        <th>Harga</th>
        <th>Alasan</th>
    </tr>

    @php
    $no = 1;
    $total = 0;
    @endphp
    @foreach($lihat as $key)
    @php 
        $total += $key->hargaz;
    @endphp
    <tr>
        <td>{{$no++}}</td>
        <td>{{$key->outf->nama_outlet}}</td>
        <td>{{tgl_indo($key->tanggal)}}</td>
        <td>Rp.{{number_format($key->hargaz)}}</td>
        <td>{{$key->alasan}}</td>
    </tr>
    @endforeach
   
    <tr>
        <th>Total</th>
        <th></th>
        <th></th>
        <th></th>
        <th>Rp.{{number_format($total)}}</th>
       
    </tr>
</table>

<br><br>
<button id="downloadexcel" class="btn btn-success" style="margin-left: 45em;">Download</button>
</center>

<script>
    document.getElementById('downloadexcel').addEventListener('click',function() {
        var table2excel = new TablePengeluaran();
        table2excel.export(document.querySelectorAll("#table"));
    });
</script>
@endsection