@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      
            <div class="row justify-content-center">
       

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

    margin: 0;
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
  margin-top: 150px;
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
  color: #fff;
  font-size: 18px;

}

.form{
  padding: 150px 100px;
  width: 50%;
  text-align: center;
  background-color: #fff;
}
.form h2{
    text-shadow: 0.5px  0px 0px #097ef6,
               0px  1px 0px #097ef6,
              -0.7px  0px 0px #097ef6,
               0px -0px 0px #097ef6;
  
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
.inputs .olv{
  color: blue;
  text-decoration: none;
  font-size: 15px;
  margin-bottom: 35px
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
.form-check-labe{
    margin-bottom: 40px;
    text-align: left;
}

@media(max-width:990px){
  .contenedor{
    width: 350px;
    height: 600px;
    margin-top: 100px;
  }
  .info{
    display: none;
  }
  .form{
    /*height: 100%;*/
    width: 100%;
    padding: 30px;
    border-radius: 25px;
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
                     <style>
                        .form-check-label{
                            text-align: left;
                        }
                     </style>  

                        <div class="inputs">
                            <div class="inputs">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <p class="form-check-label" for="remember">
                                    Recordármelo
                                    </p>
                                </div>
                            </div>
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
        
    </div> 
</div>
@endsection
