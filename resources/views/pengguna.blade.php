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


.field-icon {
  float: right;
  margin-right: 30px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>

<center>
    <br><br>

    <h2 style="background: #21ff5c; width: 400px; border-radius: 5px; font-size: 28px">{{session('berhasil')}}</h2>
<table width="900px" style="text-align: center; background: #a19d9d; color: white">

    <tr>
        <th>Data Pengurus Atau Pengguna</th>
        <form action="/pengguna" method="GET">
        <th><input type="search" placeholder="Cari Data Pengguna..." class="form-control" name="search" id="search"></th>
        <th><button class="btn btn-success"><i class="fas fa-search nav-icon"></i></a></th>
        </form>
        <th><a href="#tambah"><button class="tombol">Tambah Pengguna</button></a></th>
    </tr>
<?php
    $no = 1;
?>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Role</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    @foreach($lihat as $peng)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$peng->nama_pengguna}}</td>
        <td>{{$peng->role}}</td>
        <td>{{$peng->email}}</td>
        <td><a href="#update"><button class="btn btn-success far fa-edit editbtn" value="{{$peng->id_pengguna}}"></button></a>  <a href="/kill_peng/{{$peng->id_pengguna}}"><button class="btn btn-danger" value="{{$peng->id_pengguna}}">&times</button></a></td>
    </tr>
    @endforeach
    
</table>
</center>

<!-- Tambah -->
<div class="overlay" id="tambah">
    <div class="wrapper">
        <h2>Tambah Pengguna</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/tambah_pengguna" method="POST" id="tambah_form" style="margin-left: 20rem; margin-top: 9rem; color: black;  transition: all 0.5s ease-out;background: white;height: 620px">
                    @csrf
                    <div style="margin-left: 10px;">
                    <h2>Tambah Pengguna</h2>
                    <hr>
                    <label> Nama Pengguna</label><br>
                    <input class="form-control nama_pengguna" type="text" name="nama_pengguna" placeholder="Nama Pengguna" required><br>
                    <label> Email</label><br>
                    <input class="form-control email" type="email" name="email" placeholder="Email" required><br>

                    <label> Password</label>
                    <input id="pwd" type="password" style="width: 47rem;" class="form-control password createPw pass1" name="password" value="secret">
                    <span toggle="#password-field"></span><br>

                    <label> Konfirmasi Password</label>
                    <input id="cpwd" type="password" style="width: 47rem;" class="form-control confirmPassword confirmPw pass2" name="password" value="secret">
                    <span toggle="#password-field" style="cursor: pointer" class="fa fa-fw fa-eye field-icon toggle-password show"></span>
                        <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>

                    <label>Role</label>
                    <select name="role" class="form-control"  required>
                                                        <option>----Role----</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="kasir">Kasir</option>
                                                        <option value="owner">Owner</option>
                                                    </select><br><br>
                    <input type="submit" style="margin-left: 700px;" id="tambah_pengguna" class="btn btn-primary tombol" value="Tambah">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update -->
<div class="overlay" id="update">
    <div class="wrapper">
        <h2>Update Pengguna</h2>
       
        <div class="content">
            <div class="container">
            <a href="#" class="close">&times</a>
                <form action="/update_pengguna" method="POST" style="margin-left: 20rem; margin-top: 9rem; color: black;  transition: all 0.5s ease-out;background: white;height: 620px">
                    @csrf
                    @method('PUT')
                    <div style="margin-left: 10px;">
                    <h2>Update Pengguna</h2>
                    <hr>
                    <input type="hidden" name="id_pengguna" id="id_pengguna">
                    <label> Nama Pengguna</label><br>
                    <input class="form-control" id="nama_pengguna" type="text" name="nama_pengguna" placeholder="Nama Pengguna" required><br>
                    <label> Email</label><br>
                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" required><br>

                    <label for="createPw2"> Password</label>
                    <input id="pwd2" type="password" style="width: 47rem;" class="form-control password createPw2" name="password" value="Rahasia">
                    <span toggle="#password-field"></span><br>

                    <label for="confirmPw2"> Konfirmasi Password</label>
                    <input id="cpwd2" type="password" style="width: 47rem;" class="form-control password confirmPw2" name="password" value="Rahasia">
                    <span toggle="#password-field" style="cursor: pointer" class="fa fa-fw fa-eye field-icon toggle-password show2"></span>
                    
                    <div style="margin-top: 7px;" id="CheckPasswordMatch2"></div>
                    
                    <label>Role</label>
                    <select name="role" id="role" class="form-control"  required>
                                                        <option>----Role----</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="kasir">Kasir</option>
                                                        <option value="owner">Owner</option>
                                                    </select><br><br>
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
                url: "/edit-pengguna/" +id_l,
                success: function(response){
                    console.log(response.tampil.nama_pengguna);

                    $('#nama_pengguna').val(response.tampil.nama_pengguna);
                    $('#email').val(response.tampil.email);
                    $('#role').val(response.tampil.role);
                    $('#id_pengguna').val(id_l);
                }
            });
        })
    });

    const pwShow = document.querySelector('.show');
    createPw = document.querySelector('.createPw');
    confirmPw = document.querySelector('.confirmPw');

    pwShow.addEventListener("click",()=>{
        if((createPw.type === "password") && (confirmPw.type === "password")){
            createPw.type = "text";
            confirmPw.type = "text";
            pwShow.classList.replace("fa-eye-slash", "fa-eye"); 
        }else{
            createPw.type = "password";
            confirmPw.type = "password";
            pwShow.classList.replace("fa-eye", "fa-eye-slash"); 
        }
    });

    const pwShow2 = document.querySelector('.show2');
    createPw2 = document.querySelector('.createPw2');
    confirmPw2 = document.querySelector('.confirmPw2');

    pwShow2.addEventListener("click",()=>{
        if((createPw2.type === "password") && (confirmPw2.type === "password")){
            createPw2.type = "text";
            confirmPw2.type = "text";
            pwShow2.classList.replace("fa-eye-slash", "fa-eye"); 
        }else{
            createPw2.type = "password";
            confirmPw2.type = "password";
            pwShow2.classList.replace("fa-eye", "fa-eye-slash"); 
        }
    });

    $(document).ready(function(){
        $("#cpwd").on('keyup', function(){
        var password = $("#pwd").val();
        var confirmPassword = $("#cpwd").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Password Tidak Sama !").css("color","red");
        else
            $("#CheckPasswordMatch").html("Password Sama !").css("color","green");
    });
    });

    $(document).ready(function(){
        $("#cpwd2").on('keyup', function(){
        var password = $("#pwd2").val();
        var confirmPassword = $("#cpwd2").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch2").html("Password Tidak Sama !").css("color","red");
        else
            $("#CheckPasswordMatch2").html("Password Sama !").css("color","green");
    });
    });
</script>
@endsection 