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
        <th>Tambah Paket</th>
        <form action="/paket_cucian" method="GET">
        <th><input type="search" placeholder="Cari Paket Laundry..." class="form-control" name="search" id="search"></th>
        <th><button class="btn btn-success"><i class="fas fa-search nav-icon"></i></a></th>
        </form>
        <th><a href="#tambah"><button class="tombol">Tambah Paket</button></a></th>
    </tr>

    <tr>
        <th>Nama Paket</th>
        <th>Jenis</th>
        <th>Outlet</th>
        <th>harga</th>
        <th>Aksi</th>
    </tr>

    
    @foreach($lihat as $out)
    <tr>
        <td>{{$out->nama_paket}}</td>
        <td>{{$out->jenis}}</td>
        <td>{{$out->outlet == null? "" : $out->outlet->nama_outlet}}</td>
        <td>Rp.{{number_format($out->harga)}}</td>
         <td><a href="#update"><button class="btn btn-success far fa-edit editbtn" value="{{$out->id_outlet}}"></button></a>  <a href="/kill_paket/{{$out->id_outlet}}"><button class="btn btn-danger" value="{{$out->id_outlet}}">&times</button></a></td>
    </tr>
    @endforeach
   
</table>
</center>

<!-- Tambah -->
<div class="overlay" id="tambah">
    <div class="wrapper">
        <h2>Tambah Paket</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/tambah_paket" method="POST" style="margin-left: 20rem; margin-top: 7rem; color: black;  transition: all 0.5s ease-paket;background: white;height: 500px">
                    @csrf
                    <div style="margin-left: 10px;">
                    <h2>Tambah paket</h2>
                    <hr>
                    <label> Pilih Outlet</label><br>
                    <select name="outlet" class="form-control"  required>
                                                        <option>----Pilih----</option>
                                                        @foreach($dataOutlet as $do)
                                                        <option value="{{$do->id_outlet}}">{{$do->nama_outlet}}</option>  
                                                        @endforeach
                                                    </select><br>
                    <label>Jenis</label><br>
                    <select name="jenis" class="form-control"  required>
                                                        <option>----Jenis----</option>
                                                        <option value="Kiloan">Kiloan</option>
                                                        <option value="Dry Cleaning">Dry Cleaning</option>
                                                        <option value="Laundry Self Service">Laundry Self Service</option>
                                                        <option value="Lain">Lain</option>
                                                    </select><br>
                    <label> Nama Paket</label><br>
                    <input class="form-control" type="text" name="nama_paket" placeholder="Nama Paket" required><br>
                    <label> Harga/Kg</label><br>
                    <input class="form-control" type="number" name="harga" placeholder="Harga..." required><br>
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
        <h2>Update Paket</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/update_paket" method="POST" style="margin-left: 20rem; margin-top: 7rem; color: black;  transition: all 0.5s ease-paket;background: white;height: 500px">
                    @csrf
                    @method('PUT')
                    <div style="margin-left: 10px;">
                    <h2>Update paket</h2>
                    <hr>
                    <input type="hidden" id="id_paket" name="id_paket">
                    <label> Pilih Outlet</label><br>
                    <select name="outlet" id="outlet" class="form-control"  required>
                                                        <option>----Pilih----</option>
                                                        @foreach($dataOutlet as $do)
                                                        <option value="{{$do->id_outlet}}">{{$do->nama_outlet}}</option>  
                                                        @endforeach
                                                    </select><br>
                    <label>Jenis</label><br>
                    <select name="jenis" id="jenis" class="form-control"  required>
                                                        <option>----Jenis----</option>
                                                        <option value="Kiloan">Kiloan</option>
                                                        <option value="Dry Cleaning">Dry Cleaning</option>
                                                        <option value="Laundry Self Service">Laundry Self Service</option>
                                                        <option value="Lain">Lain</option>
                                                    </select><br>
                    <label> Nama Paket</label><br>
                    <input class="form-control" id="nama_paket" type="text" name="nama_paket" placeholder="Nama Paket" required><br>
                    <label> Harga/Kg</label><br>
                    <input class="form-control" id="harga" type="number" name="harga" placeholder="Harga..." required><br>
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
          
            $.ajax({
                type: "GET",
                url: "/edit-paket/" +id_l,
                success: function(response){
                   
                    console.log(response.tampil.nama_paket);

                    $('#outlet').val(response.tampil.id_outlet);
                    $('#jenis').val(response.tampil.jenis);
                    $('#nama_paket').val(response.tampil.nama_paket);
                    $('#harga').val(response.tampil.harga);
                    $('#id_paket').val(id_l);
                },error: function(err){
                    alert(err.responseText);
                }
            });
        })
    });
</script>
@endsection 