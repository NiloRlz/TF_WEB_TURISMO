@extends('layouts.app')

@section('content')


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
padding: 20px;
    margin: 0;
    min-height: 100vh;
 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='860' preserveAspectRatio='none' viewBox='0 0 1440 860'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1071%26quot%3b)' fill='none'%3e%3crect width='1440' height='860' x='0' y='0' fill='url(%26quot%3b%23SvgjsLinearGradient1072%26quot%3b)'%3e%3c/rect%3e%3cpath d='M1120.86 295.43 a243.86 243.86 0 1 0 487.72 0 a243.86 243.86 0 1 0 -487.72 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M840.5222134268361 530.3154093083776L713.9028744455721 578.9200196832428 762.5074848204372 705.5393586645067 889.1268238017012 656.9347482896416z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M552.736881162941 297.2396429933149L559.9053095526739 97.42274034629929 404.1718341569547 176.7729093986327z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1033.4958979595074 372.1420037041574L825.7398451977041 431.5008759218155 959.2973076874348 565.0583384115463z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M825.2680776267616 261.015782748303L936.166170416412 218.44599337233583 816.8624399576361 73.38374887584393z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M537.9104521489561 168.1500866828873L480.93181014474493 343.51231514985034 656.294038611708 400.49095715406156 713.2726806159192 225.12872868709846z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M559.5483355761829 62.34145179768466L402.56505219776267-7.552009076306739 332.6715913237713 149.4312743021135 489.65487470219153 219.32473517610492z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M325.12 763.9 a194.58 194.58 0 1 0 389.16 0 a194.58 194.58 0 1 0 -389.16 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1143.9866172033373 457.7554442309344L995.1918611431518 511.9123064517426 1049.34872336396 660.7070625119281 1198.1434794241454 606.55020029112z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1136.186%2c755.268C1218.947%2c757.66%2c1308.1%2c735.924%2c1349.238%2c664.071C1390.192%2c592.539%2c1365.744%2c503.447%2c1319.379%2c435.298C1278.846%2c375.722%2c1208.238%2c350.043%2c1136.186%2c350.921C1065.89%2c351.777%2c998.434%2c380.441%2c960.562%2c439.669C919.498%2c503.889%2c906.382%2c585.734%2c943.448%2c652.342C981.406%2c720.554%2c1058.157%2c753.013%2c1136.186%2c755.268' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1071'%3e%3crect width='1440' height='860' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='10.07%25' y1='-16.86%25' x2='89.93%25' y2='116.86%25' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1072'%3e%3cstop stop-color='%230e2a47' offset='0'%3e%3c/stop%3e%3cstop stop-color='%2300459e' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}


.contenedor{
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
  border-color: #007FFF;
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
.form img{
    margin-bottom: 30px;
  }

@media(max-width:990px){
  .contenedor{
 
    /*width: 300px;
    height: 600px;
    /*margin-top: 100px;*/
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
    padding: 5px;
}


}


</style>

<div class="contenedor">
<div class="form">
                <div>
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
</div>




@endsection
