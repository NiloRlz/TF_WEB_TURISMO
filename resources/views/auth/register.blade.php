@extends('layouts.app')

@section('content')


      
            <div class="row justify-content-centerr">
             


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Gabarito', sans-serif;
}

body{
padding: 30px;
    margin: 0;
    min-height: 100vh;
    background: linear-gradient(80deg, rgba(40, 42, 55, 1) , rgba(40, 42, 55, 0.4)),
    url(https://content.emarket.pe/common/collections/content/c8/57/c8576bc0-f5ea-4093-b16b-7a446b388efa.jpg);
    opacity: 0.9;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

.cx{
    background-color: red; 
    width: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
   
}

.form{
  padding: 50px 10px;
  width: 30%;
  text-align: center;
  background: linear-gradient(90deg, rgba(40, 42, 55, 1) 50%,rgba(40, 42, 55, 0.9), rgba(40, 42, 55, 0.4));

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
    border-radius: 5px 50px;
  outline: none;
  border-color: #007FFF;
  border-width: 0px 0px 0px 5px;
  border-style: solid;
  padding: 15px 35px;
  margin-bottom: 25px;
  background-color: #f9f9f9;
}

.submit{
    height: 35px;
    width: 50%;
  
  background-color: #097ef6;

  border: 0;
  font-size: 15px;
  color: #fff;
  text-transform: uppercase;
  border-radius: 25px;
}
.submit:hover{
background: #00d2ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
}
.form img{
    margin-bottom: 30px;
  }
.galeria{
    display: grid;
    place-content: center;
    display: flex;
    width: 70%;
    height: 520px;
}
.galeria img{
    width: 0px;
    flex-grow: 1;
    object-fit: cover;
    filter: brightness(89%);
    transition: .7s ease;
}
.galeria img:hover{
    width: 500px;
    opacity: 1;
    filter: brightness(130%);
}
@media(max-width:990px){
  .contenedor{
    width: 350px;
    height: 600px;
    margin-top: 100px;
  }

  .form{
    width: 100%;
    padding: 30px;
  }
  .galeria{
    width: 100%;
    padding: 30px;
  }
  .inputs{
    width: 70%;
  display: flex;
  flex-direction: column;
}
.form img{
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
  }
body{
    padding: 20px;
}


}


</style>

                <div class="form">
                <div class="c">
                    <img src="https://cdn-icons-png.flaticon.com/128/3177/3177440.png">
           
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

<div class="galeria">
<img src="https://www.netravel.pe/wp-content/uploads/2018/10/Visita-iglesias-huanuco.jpg">
<img src="https://www.romyporelperuyelmundo.com/wp-content/uploads/2019/04/huayhuash-3427284_1920.jpg">
<img src="https://i.pinimg.com/originals/6c/b8/e5/6cb8e5a0cbdf826e2b1a99e9d18a1bc4.jpg">
<img src="https://seturismo.pe/wp-content/uploads/2018/08/turismo-en-huanuco.jpg">

<img src="https://live.staticflickr.com/4591/25053475308_fa2e72ebaf_b.jpg">
<img src="https://1.bp.blogspot.com/-slTtHlHLBGk/VB69lxkDRkI/AAAAAAAAFmc/Awn6-QC7Ru4/s1600/ciudaddehuanuco.jpg">
<img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/aa/39/2b/20170313-144904-2-largejpg.jpg?w=700&h=500&s=1">
</div>

@endsection
