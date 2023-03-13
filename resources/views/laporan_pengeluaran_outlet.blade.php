@extends('layout')
@section('content')




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
    <h2 style="margin-right: 25em; ">{{$outlett->nama_outlet}}</h2>
    <a href="#tambah" style="margin-left: 50em; margin-top: -4em;" class="btn btn-primary">Tambah Pengeluaran</a>
</div>

<!-- Tambah -->
<div class="overlay" id="tambah">
    <div class="wrapper">
        <h2>Pengluaran</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/tambahPengeluaran" method="POST" style="margin-left: 20rem; margin-top: 7rem; color: black;  transition: all 0.5s ease-out;background: white;height: 430px">
                    @csrf
                    <div style="margin-left: 10px;">
                    <h2>Pengeluaran</h2>
                    <hr>
                    <input class="form-control" type="hidden" value="{{$lihat[0]->outlet_nama ?? 'belum ada data'}}" name="outs" placeholder="id_outlet" required>
                    <label> Masukan Harga</label><br>
                    <input class="form-control" type="text" name="harga" placeholder="Masukan Harga" required><br>
                    <label>Tanggal Mulai Pengeluaran</label>
                    <input type="date" class="form-control" name="tanggal">
                    <label> Masukan Alasan</label><br>
                    <textarea class="form-control" style="height: 90px;" type="text" name="alasan" required></textarea><br>
                    <input style="margin-left: 700px;" class="btn btn-primary" type="submit" value="Tambah"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<h2 style="background: #21ff5c; width: 400px; border-radius: 5px; font-size: 28px">{{session('berhasil')}}</h2>
<table id="table" width="900px" style="text-align: center; background: #a19d9d; color: white; margin-left: 10em; margin-top: 3em;">

    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Harga</th>
        <th>Alasan</th>
    </tr>

    @php
    $no = 1;
    $total = 0;


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

    @foreach($lihat as $key)
    @php 
        $total += $key->total_bayar;
    @endphp
    
    @endforeach

    @foreach($pengeluaran as $p)
    @php
    $total -= $p->hargaz;
    @endphp

    <tr>
        <td>{{$no++}}</td>
        <td>{{tgl_indo($p->tanggal)}}</td>
        <th>Rp.{{number_format($p->hargaz)}}</td>
        <td>{{$p->alasan}}</td>
    </tr>
    @endforeach
   
    <tr>
        <th>Total</th>
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