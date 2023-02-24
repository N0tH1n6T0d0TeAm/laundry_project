<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" type="x-icon" href="https://media.istockphoto.com/id/931246294/id/vektor/lencana-lambang-logo-laundry.jpg?s=612x612&w=0&k=20&c=tXE-E7LocWQnYW5jG3tpCAMxccN7S2zv2Ko0hQU1LGA=">
  <title>Login Sekarang!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
 html{
  background: url("https://images.hdqwalls.com/download/last-dreamy-night-4k-79-1336x768.jpg");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;
 
 }

body{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
  
 

  
}

.content{
  width: 330px;
 
  border-radius: 10px;
  padding: 40px 30px;
  margin-top: 200px;
  box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671);
 
}


.content .text{
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 35px;
  color: rgb(247, 233, 233);
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: #e0d2d2;
  border: 1px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
 
}


.field input::placeholder{
  color: #e0d2d2a6;
}
.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: #ffffff;
}



button{
  margin: 25px 0 0 0;
  width: 100%;
  height: 50px;
  color: rgb(238, 226, 226);
  font-size: 18px;
  font-weight: 600;
  border: 2px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
 margin-top: 40px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
 
}
 
.content .or{
  color: rgba(255, 255, 255, 0.733);
  margin-top: 9px;
}
 
.icon-button{
  margin-top: 15px;
  margin-left: 15px;
  
}
.icon-button span{
  padding-left: 17px;
  padding-right: 17px;
  padding-top: 6px;
  padding-bottom: 6px;
   color: rgba(244, 247, 250, 0.795);
 border-radius: 5px;
  line-height: 30px;
  background: rgba(255, 255, 255, 0.164);
    backdrop-filter: blur(10px);
}
.icon-button span.facebook{
  margin-right: 17px;

}
button:hover,
.icon-button span:hover{
  background-color: #babecc8c;
}
 
    </style>
</head>
<body>
  
 
<div class="content">
 <div class="text">Silahkan Login</div>
  <form action="/postLogin" method="POST">
    @csrf
    <b style="color: white">{{session('error')}}</b>
    <div class="field">
      <span class="fa fa-envelope"></span>
      <input type="email" name="email" placeholder="Email Anda" required>
   
    </div><br>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" name="password" placeholder="Password" required>
      
    </div>
    
    <button>Log in</button>
    <div class="or">Atau</div>
    <div class="icon-button"> 
        
      <a href="" style="text-decoration: none;"><span class="facebook">Balik Ke Halaman Utama</span></a>


    </div>
  </form>
</div>

</body>
</html>