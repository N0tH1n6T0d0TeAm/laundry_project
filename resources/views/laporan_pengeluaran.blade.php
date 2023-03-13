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
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #574f4f;
}
.outs{
    color:white;
}

.outs:hover{
    color: #f3efba;
}

</style>

<center>
    <br><br>

    <h2 style="background: #21ff5c; width: 400px; border-radius: 5px; font-size: 28px">{{session('berhasil')}}</h2>
<table width="900px" style="text-align: center; background: #a19d9d; color: white">

@php
    $no=1;
@endphp

    <tr>
        <th>Pengeluaran</th>
        <form action="/outlet" method="GET">
        <th><input type="search" placeholder="Cari Outlet..." name="search" class="form-control" id="search"></th>
        <th><button class="btn btn-success"><i class="fas fa-search nav-icon"></i></a></th>
        </form>

    </tr>

    <tr>
        <th>No</th>
        <th>Nama Outlet</th>
        <th></th>
    </tr>
    
    @foreach($data as $d)
    <tr>
        <td>{{$no++}}</td>
        <td><a class="outs" href="/laporan_pengeluaran_outlet/{{$d->id_outlet}}">{{$d->nama_outlet}}</a></td>
        <td></td>
    </tr>
    @endforeach
   
</table>
</center>


@endsection 