@extends('layout')
@section('content')

<style>
    table {
  border-collapse: collapse;
  width: 70%;
  margin-left: -40px;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #574f4f;
}
</style>

@php
$total_transaksi = 0;
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

<center>
    <br><br>
    <h2 style="color: white; margin-right: 5em;">Pemasukan LaunchDry</h2><br>

    <form action="/pemasukan_search" method="GET">
    <table>
        <tr>
            <td><select name="search" style="margin: 10px; height: 30px; width:150px">
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select></td>

            <td><select name="search2" id="tahun" style="margin: 10px; height: 30px; width:150px">
            </select></td>
            <td><button class="btn btn-success">Cari</button></td>
        </tr>
    </table>
    </form>

    <script type="text/javascript">
        window.onload = function () {
            //Reference the DropDownList.
            var ddlYears = document.getElementById("tahun");
     
            //Determine the Current Year.
            var currentYear = (new Date()).getFullYear();
     
            //Loop and add the Year values to DropDownList.
            for (var i = 2023; i <= currentYear; i++) {
                var option = document.createElement("option");
                option.innerHTML = i;
                option.value = i;
                ddlYears.appendChild(option);
            }
        };
    </script>

    <table id="table" width="800px" style="text-align: center; background: #a19d9d; color: white">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Total Pemasukan</th>
    </tr>

@php 
$no = 1;
$pemasukan = 0;
@endphp

    @foreach($lihatz as $key)
        @php 
        $pemasukan += $key->total_bayar 
        @endphp 
        <tr>
            <td>{{$no++}}</td>
            <td>{{tgl_indo($key->tanggal_bayar)}}</td>
            <td>Rp.{{number_format($key->total_bayar)}}</td>
        </tr>
    @endforeach

    <th>Total Pemasukan</th>
    <th></th>
    <th>Rp.{{number_format($pemasukan)}}</th>

</table>
<br><br>
<button id="downloadexcel" class="btn btn-success" style="margin-left: -3em;">Download</button>
</center>

<script>
    document.getElementById('downloadexcel').addEventListener('click',function() {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#table"));
    });
</script>
@endsection