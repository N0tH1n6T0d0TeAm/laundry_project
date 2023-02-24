@extends('layout')
@section('content')

<style>
    .container{
        margin-left: 50px;
    }
    .pemasukan{
        margin-left: 10rem;
        color: white;
        opacity: 0.5;
        cursor: pointer;
        width: 20px;
    }
    img{
        height: 230px;
        width: 28em;
        margin-top: 5em;
        border: 2px solid black;
        box-shadow: 0 0 20px rgba(0,0,0,10); 
    }
    .tulisan{
        margin-top: -70px;
        margin-left: 70px;
        font-weight: bold;
        -webkit-text-stroke: 2px black;
    }
    .pemasukan:hover{
        opacity: 1;
        transition: 0.3s;
    }

    .pengeluaran{
        margin-left: 50rem;
        color: white;
        opacity: 0.5;
        cursor: pointer;
    }
    .keluar{
        height: 230px;
        width: 28em;
        margin-top: -13em;
        border: 2px solid black;
        box-shadow: 0 0 20px rgba(0,0,0,10); 
    }
    .tulisan2{
        margin-top: -70px;
        margin-left: 50px;
        font-weight: bold;
        -webkit-text-stroke: 2px black;
    }
    .pengeluaran:hover{
        opacity: 1;
        transition: 0.3s;
    }
    table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #574f4f;
}
</style>
<?php
$pemasukan = 0;
$pengeluaran = 0;

foreach($lihatz as $lol){
    $pemasukan += $lol->total_bayar;
}

foreach($lihats as $lolz){
    $pengeluaran += $lolz->hargaz;
}

$total = $pemasukan - $pengeluaran;
?>
<div class="container">
<div class="pemasukan">
<a style="text-decoration: none; color: white;" href="/pemasukan">
<img src="{{asset('assets/images/pemasukan.jpeg')}}">
<h2 class="tulisan">Pemasukan:Rp.{{number_format($total)}}</h2>
</a>
</div>

<div class="pengeluaran">
<a style="text-decoration: none; color: white;" href="/pengeluaran">
<img class="keluar" src="{{asset('assets/images/pengeluaran.jpg')}}">
<h2 class="tulisan2">Pengeluaran:Rp.{{number_format($pengeluaran)}}</h2>
</a>
</div>
</div>
<hr style="border: 1px solid white; width: 100rem; margin-left: 2em; margin-top: 5em;">
<center>
    <h2 style="color: white; margin-right: 5em;">Riwayat Terakhir</h2>
    <table width="800px" style="text-align: center; background: #a19d9d; color: white">

    

    @php
        function tanggalKita($tanggal){
            $bulan = array(
                1=>
                'Januari',
                'Februari',
                'Maret',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );

            $lolz = explode('-',$tanggal);
            return $lolz[2].' '.$bulan[(int)$lolz[1]].' '.$lolz[0];
        }
    @endphp
    <tr>
        <th>Nama Outlet</th>
        <th>Nama Member</th>
        <th>Jenis Paket</th>
        <th>Tanggal Transaksi</th>
        <th>Status</th>
        <th>Pembayaran</th>
        <th>Penanggung Jawab</th>
    </tr>
   
    @foreach($lihat as $data)
    <tr>
        <td>{{$data->outlets == null? "" : $data->outlets->nama_outlet}}</td>
        <td>{{$data->nama_member}}</td>
        <td>{{$data->jenis_pakets}}</td>
        <td>{{tanggalKita($data->tanggal_transaksi)}}</td>
        <td>{{$data->status}}</td>
        <td>{{$data->pembayaran}}</td>
        <td>{{$data->penanggung_jawab}}</td>
    </tr>
  @endforeach
</table>
</center>
@endsection