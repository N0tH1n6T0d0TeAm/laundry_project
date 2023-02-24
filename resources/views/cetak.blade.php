
<style>
    *{
        font-family: 'mulish',sans-serif;
    }
    .cetak{
        margin-top: 5rem;
        color: gray;
        font-size: 20px;
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        color: gray;
        width: 22%;
        height: 15%;
        margin-right: 34rem;
        margin-top: 30px;
        font-size: 15px;
        text-align: center;
    }

    .table{
        height: 80px;
    }

    button{
        height: 40px;
        width: 5em;
        font-size: 20px;
        border-radius: 5px;
        border: none;
        margin-left: 54rem;
        margin-top: 5em;
        background: black;
        color: white;
        cursor: pointer;
        box-shadow: 0 0 20px rgba(0,0,0,0.5);
    }
    button:hover{
        background: #000000e0;
    }

    @media print{
        
        @page {
           margin-top: 0;
           margin-bottom: 0;
         }

        .infos{
            margin-left: -31rem;
            margin-top: -120px;
        }

        table, th, td {
        width: 42%;
        margin-left: 80px;
        margin-top: 20px;
    }
    .penutup{
        margin-left: -27rem;
        margin-top: 10rem;
    }

    button{
        display: none;
        visibility: hidden;
    }
    
    }
</style>
<center>
<div class="cetak">
    <p style="font-weight: 500; font-size: 40px;">{{$lihats->outlets == NULL? "DATA HILANG !" : $lihats->outlets->nama_outlet}}</p>
    <div style="font-size: 15px; margin-top: -15px;">
    <b>Alamat : </b> {{$lihats->outlets == NULL? "DATA HILANG !" : $lihats->outlets->alamat_outlet}}, <b>Telp: </b> {{$lihats->outlets == NULL? "DATA HILANG !" : $lihats->outlets->no_telp}}
</div>
<br><br>
<div class="table">
<table>
        <tr>
            <th>Nama Member</th>
            <td>{{$lihats->nama_member}}</td>
        </tr>
        <tr>
            <th>Tanggal Transaksi</th>
            <td>{{$lihats->tanggal_transaksi}}</td>
        </tr>

        <tr>
            <th>Tanggal Bayar</th>
            <td>{{$lihats->tanggal_bayar}}</td>
        </tr>

        <tr>
            <th>Batas Transaksi</th>
            <td>{{$lihats->batas_waktu}}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{$lihats->status}}</td>
        </tr>
        <tr>
            <th>Pembayaran</th>
            <td>{{$lihats->pembayaran}}</td>
        </tr>
    </table>
<br>
    <table class="table" style="height: 8%;">
        <tr>
            <th>Jenis Paket</th>
            <th>Harga Perkilo</th>
            <th>Jumlah Kg</th>
            <th style="width: 120px;">Total Bayar</th>
        </tr>
        
        <tr>
            <td>{{$lihats->jenis_pakets}}</td>
            <td>Rp.{{number_format($lihats->harga_paket)}}</td>
            <td>{{$lihats->berat}}</td>
            <td>Rp.{{number_format($lihats->total_bayar)}}</td>
        </tr>
    </table>

    <div class="infos">
    <table border="1" style="width: 20%; text-align: justify;height: 35%; margin-left: 67em; margin-top: -16em">
      <tr>
         <td>
            <ol type="1">
                <br>
               <li>Pengambilan Barang Harus Disertai Nota.</li><br>
               <li>Pencucian Tergantung Dari Kemauan Pelanggan.</li><br>
               <li>Barang Yang Tidak Diambil Selama 1 Bulan,Jika Hilang Bukan Urusan Kami.</li><br>
               <li>Jika Barang Ada Yang Hilang Karena Kelalaian Kami,Kami akan bertanggung jawab 2 kali ongkos cuci.</li><br>
               <li>Kami Berjanji Baju Yang Dicuci Akan Berada Di Waktu Yang Tepat</li><br>
            </ol>
         </td>
    </div>
</table>

</center>
<div class="penutup">
<br><br><br><br><br><br><br>
<div style="color: gray; margin-left:29rem; margin-top: 80px;"> 
        <p style="margin-left: 40px;" class="hormat_kami">Hormat Kami,</p><br><br><br>
    <p>(.....................................)</p>
</div>

<div style="color: gray; margin-left:70rem; margin-top: -140px;" class="penerima"> 
        <p style="margin-left: 50px;">Penerima,</p><br><br><br>
    <p>(.....................................)</p>
</div>
</div>
</div>
<button onClick="window.print()">Print</button>
