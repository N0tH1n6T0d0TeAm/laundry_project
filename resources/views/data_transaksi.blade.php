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
        width: 10rem;
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

</style>


<center>
    <br><br>

    <h2 style="background: #21ff5c; width: 400px; border-radius: 5px; font-size: 28px">{{session('berhasil')}}</h2>
<table width="800px" style="text-align: center; background: #a19d9d; color: white">


@php
    function tgl_indo($tanggal){
        $bulan = array(
            1=>
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
        $ledak = explode('-',$tanggal);
        return $ledak[2].' '.$bulan[(int)$ledak[1]].' '.$ledak[0];
    }
@endphp
    <tr>
        <th><b style="color:black;">RIWAYAT TRANSAKSI</b></th>
        <th></th>
        <th></th>
    
        <form action="/searchTransaksi" method="GET">
        <th><b style="color: black;">MULAI</b> <input type="date" name="datefrom" value="{{\Carbon\Carbon::now()->toDateString()}}" class="form-control search" ></th>
        <th><b style="color: black;">SAMPAI</b> <input type="date" name="dateto" value="{{\Carbon\Carbon::now()->addDay(30)->toDateString()}}" class="form-control search" ></th>
        <th><button class="btn btn-success"><i class="fas fa-search nav-icon"></i></button></th>
        </form>
        
        <th><a href="/tambah_transaksi"><button class="tombol">Tambah Transaksi</button></a></th>
    </tr>

    <tr>
        <th>Nama Outlet</th>
        <th>Nama Member</th>
        <th>Jenis Paket</th>
        <th>Tanggal Transaksi</th>
        <th>Status</th>
        <th>Pembayaran</th>
        <th>Penanggung Jawab</th>
        <th>Aksi</th>
    </tr>
   
    @foreach($lihat as $data)
    <tr>
        <td>{{$data->outlets == null? "DATA HILANG !" : $data->outlets->nama_outlet}}</td>
        <td>{{$data->nama_member == null? "DATA HILANG !" : $data->nama_member}}</td>
        <td>{{$data->jenis_pakets}}</td>
        <td>{{tgl_indo($data->tanggal_transaksi)}}</td>
        <td>{{$data->status}}</td>
        <td>{{$data->pembayaran}}</td>
        <td>{{$data->penanggung_jawab}}</td>
        <td><a href="/detail_transaksi/{{$data->id_transaksi}}"><button class="btn btn-info far fa-eye" value="{{$data->id_transaksi}}"></button></a> <a href="#update"><button class="btn btn-success far fa-edit editbtn" value="{{$data->id_transaksi}}"></button></a>  <a href="kill_transaksi/{{$data->id_transaksi}}"><button class="btn btn-danger" value="{{$data->id_transaksi}}">&times</button></a></td>
    </tr>
  @endforeach
</table>
</center>

<!-- Update -->
<div class="overlay" id="update">
    <div class="wrapper">
        <h2>Update Transaksi</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/update_transaksi" method="POST" style="margin-left: 20rem; margin-top: 7rem; color: black;  transition: all 0.5s ease-out;background: white;height: 400px">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_trans" id="id_trans">
                    <div style="margin-left: 10px;">
                    <h2>Update Transaksi</h2>
                    <hr>
                    <label>Tanggal Transaksi</label><br>
                    <input name="tanggal_transaksi" class="form-control" id="tanggal_trans" type="date">
                    <label>Status</label><br>
                    <select name="status" id="status" class="form-control"  required>
                                                        <option>----Pilih----</option>
                                                        <option value="Diproses">Diproses</option>  
                                                        <option value="Selesai">Selesai</option> 
                                                    </select><br>
                    <label>Pembayaran</label>
                    <select name="pembayaran" id="pembayaran" class="form-control"  required>
                         <option>----Pilih----</option>
                         <option value="Dibayar">Dibayar</option>  
                         <option value="Belum Dibayar">Belum Dibayar</option> 
                     </select><br>
                    <input style="margin-left: 700px;" class="btn btn-primary" type="submit" value="Update"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function(){
        $(document).on('click','.editbtn', function(){
            id_l = $(this).val();
            // alert(id_l);
            $.ajax({
                type: "GET",
                url: "/edit-transaksi/" +id_l,
                success: function(response){
                    console.log(response.tampil.outlet);

                    $('#tanggal_trans').val(response.tampil.tanggal_transaksi);
                    $('#status').val(response.tampil.status);
                    $('#pembayaran').val(response.tampil.pembayaran);
                    $('#id_trans').val(id_l);
                }
            });
        })
    });
</script>
@endsection 