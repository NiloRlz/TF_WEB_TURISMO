@extends('layouts.app')

@section('content')
<div class="contenedor">

       

<div class="info">

<p class="txt-1"> Gracias por visitarnos </p>
<h2>Bienvenido a Huánuco</h2>
<hr>
<p class="txt-2">
    Tingo María es una ciudad peruana capital del distrito del Rupa-Rupa y de la provincia de Leoncio Prado
    en el departamento de Huánuco. Es conocida como la "ciudad de la Bella Durmiente", porque desde allí se
    observa una formación de montañas cuya silueta se asemeja a la de una mujer dormida.
</p>

</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,500&display=swap" rel="stylesheet">
<style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Gabarito', sans-serif;
}
body{
  margin-bottom: 30px;
   
    min-height: 100vh;
    background: linear-gradient(80deg, rgba(40, 42, 55, 1) , rgba(40, 42, 55, 0.4)), url(https://content.emarket.pe/common/collections/content/c8/57/c8576bc0-f5ea-4093-b16b-7a446b388efa.jpg);
    opacity: 0.9;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

/* The switch - the box around the slider */
.contenedor{
  display: flex;
  height: 700px;
  width: 1000px;
  box-shadow: 0 0 20px rgb(0, 0, 0, 0.4);
  margin: auto;
  margin-top: 20px;
}

.info{
    background-image: url(https://seturismo.pe/wp-content/uploads/2018/12/parque-nacional-tingo-maria-huanuco.jpg);
    opacity: 0.9;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 110px 50px;
  width: 50%;
  text-align: center;
}
/*.info:before{
  content: "";
  width: 100%;
  min-height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(10deg, #52c4df, #ad55c1);
  opacity: 0.5;
}*/

.txt-1{
  font-family: 'Roboto', sans-serif;
  color: white;
  text-transform: capitalize;
  font-size: 20px;
  margin-bottom: 25px;
}
.info h2{
    font-family: 'Kanit', sans-serif;
  color:#fff ;
  text-transform: uppercase;
  font-size: 50px;
  margin-bottom: 25px;
}
.info hr{
    color: #fff;
  width: 200px;
  border: 4px solid #fff;
  margin-bottom: 25px;
  margin-left: 170px;
}
.txt-2{
  font-family: 'Roboto', sans-serif;
  color: #fff;
  font-size: 18px;

}

.form{
  padding: 150px 100px;
  width: 50%;
  text-align: center;
  background-color: #ffffff;
  /*background-color: rgba(240, 248, 255, 0.286);
  backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);*/
}
.form h2{
  font-family: 'Kanit', sans-serif;
  color: #097ef6;
  font-size: 35px;
  margin-bottom: 25px;
}

.inputs{
  display: flex;
  flex-direction: column;
}
.box{
  outline: none;
  border-color: #097ef6;
  border-width: 0px 0px 0px 5px;
  border-style: solid;
  padding: 15px 35px;
  margin-bottom: 20px;
  background-color: #f9f9f9;
}
.box:focus{
  border: 2px solid #4A9DEC;
  box-shadow: 0px 0px 0px 7px rgb(74, 157, 236, 20%);
  background-color: white;
}
.inputs .olv{
  font-family: 'Roboto', sans-serif;
  color: blue;
  text-decoration: none;
  font-size: 15px;
  margin-bottom: 35px
}
.input .olv:hover{
  color: red;
  cursor: pointer;
}
.submit{
  background-color: #097ef6;
  padding: 15px;
  border: 0;
  font-size: 18;
  color: #fff;
  text-transform: uppercase;
  border-radius: 25px;
}
.submit:hover{
  background-color: #15adff;
}

@media(max-width:990px){
  .contenedor{
    width: 350px;
    height: 600px;
    margin-top: 20px;
  }
  .info{
    display: none;
  }
  .form{
    /*height: 100%;*/
    width: 100%;
    padding: 30px;
  }

  .form h2{
    margin-top: 40px;
  }

}
</style>

                <div class="form">

                <h2>Login</h2>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="inputs">
                              
                                <input id="email" type="email" class="box" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="inputs">
                                <input id="password" type="password" class="box" name="password" required autocomplete="current-password" placeholder="Ingrese su contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">                            
                            
<style>


.cyberpunk-checkbox {
  display: flex;
  margin-right: 10px;
}

.cyberpunk-checkbox-label{
  display: flex;
 
}
.inpt{
  display: flex;
  margin-bottom: 10px;
}

</style>  
                      


                            <div class="inpt">
                            <input class="cyberpunk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="cyberpunk-checkbox-label">
                                   
                                    <p for="remember"> Recordármelo</p>            
                                </label>
                            </div>
                       
                        
                        <div class="inputs">
                            <div class="inputs">
                                <button type="submit" class="submit">
                                    {{ __('Login') }}
                                </button><br>

                                @if (Route::has('password.request'))
                                    <a class="olv" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
    
</div>
@endsection
