@extends('layout')
@section('content')

<style>
    table {
  border-collapse: collapse;
  width: 90%;
  text-align: center;
  margin-top: 5em;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #574f4f;
}

.pemasukan{
    margin-left: 10em;
}
.pemasukan h2{
    margin-left: 17em;
    color: white;
}
</style>

<div class="pemasukan">
    <br><br><br>
<h2>Riwayat Pemasukan </h2>
<hr style="border: 1px solid black; margin-left: -10em;">
<form action="/search_pemasukan" method="GET" style="margin-left: 20em;">
@csrf
    <label style="color: white;font-weight: 500; margin-left: -2em;">Dari Tanggal</label>
    <label style="color: white;font-weight: 500; margin-left: 35em;">Sampai Tanggal</label><br>
    <input type="date" class="form-control" value="{{\Carbon\Carbon::now()->toDateString()}}" style="width: 20%; margin-left: -5px;" name="dari" />
    <input type="date" class="form-control" value="{{\Carbon\Carbon::now()->addDay(30)->toDateString()}}" style="width: 20%; margin-top: -40px;" name="sampai" />
    <button style="display: none;" class="btn btn-success"><i class="fas fa-search nav-icon"></i></button>
</form>



<form action="/cari_laporan_outlet" method="GET">
@csrf
<input style="margin-top: 3em; width: 10%; margin-right: 47em;" class="form-control" type="number" name="cari"  placeholder="Id Outlet" />
<h2 style="color: white;margin-top: -40px; margin-left: 18em;">O-</h2>
<button style="display: none;"></button>
</form>

    <table id="table" style="text-align: center; background: #a19d9d; color: white">
        <tr>
            <th style="color: black;">No</th>
            <th style="color: black;">Id Outlet</th>
            <th style="color: black">Nama Outlet</th>
            <th style="color: black;">Total Pemasukan</th>
            <th style="color: black;">Tanggal</th>
            <th style="color: black;">Hapus</th>
        </tr>
        @php
            $no = 1;
            $total_harga = 0;
            $pemasukan = 0;
            $pengeluaran = 0;

            foreach($lihat as $lol){
                $pemasukan += $lol->total_bayar;
            }

            foreach($lihats as $lolz){
                $pengeluaran += $lolz->hargaz;
            }

            $total = $pemasukan - $pengeluaran;


            function tgl_lol($tanggal){
                $bulan =array( 
                1 =>
                'Januari',
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
                'Desember',
                );

                $lol = explode('-', $tanggal);
                return $lol[2].' '.$bulan[(int)$lol[1]].' '.$lol[0];
            }
        @endphp

        @foreach($lihat as $k)
            @php
                 $total_harga += $k->total_bayar;
            @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>O-{{$k->outlet_nama}}</td>
            <td>{{$k->outletz->nama_outlet}}</td>
            <td>Rp. {{number_format($k->total_bayar)}}</td>
            <td>{{tgl_lol($k->tanggal_bayar)}}</td>
            <td><a href="#" class="btn btn-danger hapus" data-id="{{$k->id_transaksi_detail}}"><i class="fa fa-trash"></a></i></a></a></td>
        </tr>
        @endforeach
        <tr>
            <th style="color: black;">Total</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="color: black;">Rp. {{number_format($total_harga)}}</th>
        </tr>

        <tr>
            <th style="color: black;">Total Sekarang</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="color: black;">Rp. {{number_format($total)}}</th>
        </tr>
    </table>

    <br><br>
    <button id="downloadexcel" class="btn btn-success" style="margin-left: 35em;">Download</button>

    
    </div>

   <script>

document.getElementById('downloadexcel').addEventListener('click',function() {
        var table2excel = new TablePemasukan();
        table2excel.export(document.querySelectorAll("#table"));
    });

    $('.hapus').click(function(){
       var id=$(this).attr('data-id');
       
       swal({
        title: "Apakah Kamu Yakin?",
        icon: "warning",
        text: "Jika Anda Yakin Ingin Menghapus Data Ini Maka Data Akan Hilang Selamanya",
        buttons: true,
        dangerMode:true,
       })
       .then((kalauTerhapus) => {
        if(kalauTerhapus){
            swal('Berhasil Menghapus',{icon: "success"});
            window.location = "/hapus_pemasukan/"+id;
        }else{
            swal('Data Anda Aman');
        }
       })
    })
   </script>
@endsection