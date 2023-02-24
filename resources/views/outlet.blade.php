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

</style>

<center>
    <br><br>

    <h2 style="background: #21ff5c; width: 400px; border-radius: 5px; font-size: 28px">{{session('berhasil')}}</h2>
<table width="900px" style="text-align: center; background: #a19d9d; color: white">


    <tr>
        <th>Tambah Outlet</th>
        <form action="/outlet" method="GET">
        <th><input type="search" placeholder="Cari Outlet..." name="search" class="form-control" id="search"></th>
        <th><button class="btn btn-success"><i class="fas fa-search nav-icon"></i></a></th>
        </form>
        <th><a href="#tambah"><button class="tombol">Tambah Outlet</button></a></th>
    </tr>

    <tr>
        <th>Nama Outlet</th>
        <th>Alamat</th>
        <th>No Telpon</th>
        <th>Aksi</th>
    </tr>
   
    @foreach($lihat as $out)
    <tr>
        <td>{{$out->nama_outlet}}</td>
        <td>{{$out->alamat_outlet}}</td>
        <td>{{$out->no_telp}}</td>
         <td><a href="#update"><button class="btn btn-success far fa-edit editbtn" value="{{$out->id_outlet}}"></button></a>  <a href="/kill_out/{{$out->id_outlet}}"><button class="btn btn-danger" value="{{$out->id_outlet}}">&times</button></a></td>
    </tr>
    @endforeach
</table>
</center>

<!-- Tambah -->
<div class="overlay" id="tambah">
    <div class="wrapper">
        <h2>Tambah Outlet</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/tambah_out" method="POST" style="margin-left: 20rem; margin-top: 7rem; color: black;  transition: all 0.5s ease-out;background: white;height: 420px">
                    @csrf
                    <div style="margin-left: 10px;">
                    <h2>Tambah Outlet</h2>
                    <hr>
                    <label> Nama Outlet</label><br>
                    <input class="form-control" type="text" name="nama_outlet" placeholder="Nama Outlet" required><br>
                    <label> Alamat</label><br>
                    <input class="form-control" type="text" name="alamat_outlet" placeholder="Alamat" required><br>
                    <label> No Telpon</label><br>
                    <input class="form-control" type="number" name="no_telp" placeholder="No Telepon" required><br>
                    <input style="margin-left: 700px;" class="btn btn-primary" type="submit" value="Tambah"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update -->
<div class="overlay" id="update">
    <div class="wrapper">
        <h2>Update Outlet</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/outlet_update" method="POST" style="margin-left: 20rem; margin-top: 7rem; color: black;  transition: all 0.5s ease-out;background: white;height: 420px">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_out" id="id_out">
                    <div style="margin-left: 10px;">
                    <h2>Update Outlet</h2>
                    <hr>
                    <label> Nama Outlet</label><br>
                    <input class="form-control" type="text" id="nama_out" name="nama_outlet" placeholder="Nama Lengkap Outlet" required><br>
                    <label> Alamat</label><br>
                    <input class="form-control" type="text" id="alamat_out" name="alamat_outlet" placeholder="Alamat" required><br>
                    <label> No Telpon</label><br>
                    <input class="form-control" type="number" id="no_telp"  name="no_telp" placeholder="No Telepon" required><br>
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
                url: "/edit-outlet/" +id_l,
                success: function(response){
                    console.log(response.tampil.nama_outlet);

                    $('#nama_out').val(response.tampil.nama_outlet);
                    $('#alamat_out').val(response.tampil.alamat_outlet);
                    $('#no_telp').val(response.tampil.no_telp);
                    $('#id_out').val(id_l);
                }
            });
        })
    });
</script>
@endsection 