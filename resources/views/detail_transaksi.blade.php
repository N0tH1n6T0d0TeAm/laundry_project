@extends('layout')
@section('content')
<style>
    
    .tombol{
        background: #1985ff; 
        height: 50px; 
        color: white; 
        border: none; 
        border-radius: 4px;
        font-size: 14px;
    }

    .tombol:hover{
        background: #1985ffb0;
    }

    .button{
        transition: all 0.3s ease-out;
    }
    .overlay{
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0,0,0,0.8);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }

    .overlay:target{
        visibility: visible;
        opacity: 1;
    }
    .close{
      margin-top: 2px; 
      font-size: 30px;     
      border-radius: 10px;
      width: 20px;
      text-align: center;
    } 
    .form-control{
        width: 47rem;
        margin: auto;
    }

    .search{
        width: 27rem;
        margin: auto;
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

.balik{
   margin-left: 82px; 
   margin-top: 10px; 
   outline: none;
   border: none; 
   height: 40px; 
   width: 80px; 
   border-radius: 5px; 
   font-size: 20px; 
   background: #145cff; 
   color: white;
   box-shadow: 0 0 20px rgba(0,0,0,0.5);
}


.balik:hover{
    background: #5287ffb3;
    transition: 0.2s;
}

.print{
   margin-left: 10px; 
   margin-top: 10px; 
   outline: none;
   border: none; 
   height: 40px; 
   width: 200px; 
   border-radius: 5px; 
   font-size: 20px; 
   background: #276027; 
   color: white;
   box-shadow: 0 0 20px rgba(0,0,0,0.5);
}


.print:hover{
    background: #399b3aad;
    transition: 0.2s;
}
</style>

<center>
    <br><br>

    <h2 style="background: #21ff5c; width: 400px; border-radius: 5px; font-size: 28px">{{session('berhasil')}}</h2>
<table width="800px" style="text-align: center; background: #a19d9d; color: white">

@php 
    function tglSemua($tanggal){
        $bulan = array(
            1=>
            'Januari',
            'Februari',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        );
        $lolz = explode('-',$tanggal);
        return $lolz[2].' '.$bulan[(int)$lolz[1]].' '.$lolz[0];
    }

@endphp
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th style="font-size: 30px;">Detail Transaksi</th>
    </tr>

    <tr>
        <th>Nama Outlet</th>
        <th>Nama Member</th>
        <th>Jenis Paket</th>
        <th>Berat</th>
        <th>Total Harga</th>
        <th>Tanggal Transaksi</th>
        <th>Tanggal Bayar</th>
        <th>Batas Waktu</th>
        <th>Status</th>
        <th>Pembayaran</th>
    </tr>
    
    <tr>
        <td>{{$lihatz->outlets == NULL? "DATA HILANG!" : $lihatz->outlets->nama_outlet}}</td>
        <td>{{$lihatz->nama_member}}</td>
        <td>{{$lihatz->jenis_pakets}}</td>
        <td>{{$lihatz->berat}} Kg</td>
        <td>Rp.{{number_format($lihatz->total_bayar)}}</td>
        <td>{{tglSemua($lihatz->tanggal_transaksi)}}</td>
        <td>{{tglSemua($lihatz->tanggal_bayar)}}</td>
        <td>{{tglSemua($lihatz->batas_waktu)}}</td>
        <td>{{$lihatz->status}}</td>
        <td>{{$lihatz->pembayaran}}</td>
    </tr>
</table>

</center>
<hr style="border: 1px solid white; width: 100rem; margin-left: 45px;">
<a href="/data_transaksi"><button class="balik">Balik</button></a>

<a href="/cetak/{{$lihatz->id_transaksi}}"><button class="print" value="{{$lihatz->id_transaksi}}">Generate Laporan</button></a>

@endsection 