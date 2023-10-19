@extends('layouts.app')

@section('content')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,600&display=swap" rel="stylesheet">
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Gabarito', sans-serif;
}

body{
padding: 0;
    margin-bottom: 30px;
    min-height: 100vh;
    background: linear-gradient(80deg, rgba(40, 42, 55, 1) , rgba(40, 42, 55, 0.4)),
                url("http://1.bp.blogspot.com/-nFfMbeAfDeg/U6T30i1UurI/AAAAAAAAFKU/bon76kqxqGM/s1600/hcopampa.jpg");
            
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}


.contenedor{
  /*margin-top: 10px;*/
  display: flex;
  justify-content: center;
  align-items: center;
}

.form{
  margin-top: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px 10px;
  width: 30%;
  text-align: center;
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
  backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
    border-radius: 25px;
}


.inputs{
    width: 100%;
  display: flex;
  flex-direction: column;
}
.box{
    height: 30px;
  outline: none;
  border-color: #097ef6;
  border-width: 0px 0px 0px 5px;
  border-style: solid 0px 0px 0px 5px;
  padding: 15px 35px;
  margin-bottom: 25px;
  background-color: #f9f9f9;
}
.box:focus{
  border: 2px solid #4A9DEC;
  box-shadow: 0px 0px 0px 7px rgb(74, 157, 236, 20%);
  background-color: white;
}

.submit{
    height: 35px;
    width: 50%;
  
  background-color: #097ef6;

  border: 0;
  font-size: 15px;
  color: #fff;
  text-transform: uppercase;
  border-radius: 10px;
}
.submit:hover{
background: #00d2ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
}
.form h2{
  text-shadow: 1px 3px 2px #525050;
  font-size: 30px;
  font-family: 'Kanit', sans-serif;
  color: #fff;
  }

@media(max-width:990px){
  .contenedor{
    margin-top: 20px;
    /*width: 300px;
    height: 600px;
    /*margin-top: 100px;*/
  }
  .form h2{
  font-size: 25px;

  }
  .form{
    
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
 
    margin-top: 30px;
    width: 80%;
    padding: 20px;
  }

  .inputs{
    width: 100%;
  display: flex;
  flex-direction: column;
}

body{
    padding: 0;
}


}


</style>

<div class="contenedor">
<div class="form">
                <div>
                    <h2>Registrate</h2><br>
           
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                            <div class="inputs">
                                <input id="name" type="text" class="box" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre de usuario">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      
                            <div class="inputs">
                                <input id="email" type="email" class="box" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       
                            <div class="inputs">
                                <input id="password" type="password" class="box" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="inputs">
                                <input id="password-confirm" type="password" class="box" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                            </div>

                            <div class="inputs">
                                <button type="submit" class="submit">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                       
                    </form>

                </div>
    
</div>
</div>




@endsection
