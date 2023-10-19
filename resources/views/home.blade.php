@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
<style>
    .card{
background: linear-gradient(90deg, rgba(40, 42, 55, 1) ,rgba(40, 42, 55, 0.9), rgba(40, 42, 55, 0.4));
padding: 20px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
text-align: center;


    }
</style>

<div class="container1">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Gracias por visitarnos') }}</div>

                <div class="grc">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Usted esta registrado - Travel HUÁNUCO') }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
<style>
body{
background: linear-gradient(90deg, rgba(40, 42, 55, 1) ,rgba(40, 42, 55, 0.9), rgba(40, 42, 55, 0.4)), url(https://content.emarket.pe/common/collections/content/21/4f/214f7dfa-2298-4827-b60c-b48730e0df14.jpg);

background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
             
}

* {
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
.card-header{
    font-size: 25px;
    margin-bottom: 10px;
    color: #fff;
    font-family: 'Oswald', sans-serif;
    text-shadow: 1px 0px 2px #A7A7A7;
}
.pi{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 30%;
}
.grc{
    color: #FAFAFA;
    text-align:center;
    font-family: 'Dosis', sans-serif;
}
.container {
    display:grid;
    grid-template-columns: repeat(2,50%);
    padding:20px;
    gap:10px;
    width: 1000px;
}
form h2{
    color: #fff;
    text-align: left;
    letter-spacing: 5px;
}
form {
    display:flex;
    flex-direction: column;
    text-align: center;
    gap:15px;
}

.input-box {
    position:relative;
}

.input-box > input {
    width: 100%;
    height: 40px;
    padding: 0 10px;
    outline:none;
    background: rgba(255 255 255 / .1);
    border:3px solid transparent;
    letter-spacing: 1px;
    transition:.3s;
    color:#fff;
    
}

.input-box > input::placeholder,
.input-box > textarea::placeholder {
    color:#a3a3a3;
    
}

.input-box > input:focus::placeholder,
.input-box > textarea:focus::placeholder {
    color:transparent;
}

.input-box > input:focus,
.input-box > textarea:focus {
    border-bottom:3px solid crimson;
    animation: shake .2s;
}

.input-box > textarea {
    width: 100%;
    height: 130px;
    padding: 10px;
    background: rgba(255 255 255 / .1);
    border:3px solid transparent;
    letter-spacing: 1px;
    outline: none;
    transition:.3s;
    color:#fff;
    letter-spacing: 1.5px;
}


.input-box > i {
    position:absolute;
    top:50%;
    transform: translateY(-50%);
    right: 10px;
    color:rgba(255 255 255 / .3);
    transition: .3s;
}

.input-box > input:focus ~ i {
    color:crimson;
}

form > button {
    width: 100%;
    padding: 10px;
    outline: none;
    background: crimson;
    color:#fff;
    border:none;
    transition: .1s;
    cursor: pointer;
    font-size: 1rem;
}

form > button:hover,
.links > a:hover {
    background: rgb(172, 16, 47);
}

@keyframes shake { 
    0%, 100% {transform: translateX(0);} 
    10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);} 
    20%, 40%, 60%, 80% {transform: translateX(10px);} 
 }


@media screen and (max-width:920px) {
    .container {
        margin-top: 50px;
        position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;

        width: 90%;
        display: flex;
        flex-direction: column;
        gap:20px;
    }
    .card-header{
        font-size: 20px;
    margin-bottom: 10px;
    color: #fff;
    font-family: 'Oswald', sans-serif;
}
.card{
background: linear-gradient(90deg, rgba(40, 42, 55, 1) ,rgba(40, 42, 55, 0.9), rgba(40, 42, 55, 0.4));
padding: 0px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
text-align: center;
}

}

</style>
<div class="pi">
    
</div>
<div class="container">

        <form action="https://formsubmit.co/nilorosales76@gmail.com" method="POST">
            <h2>CONTACTAME</h2>
            <div class="input-box">
                <input tyoe="text" name="name" id="name" placeholder="Nombre y apellido" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" id="email" required placeholder="Correo electrónico">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" name="subject" id="subject" placeholder="Asunto">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div class="input-box">
                <textarea name="coments" id="coments" cols="30" rows="5" placeholder="Escribe tu mensaje..."></textarea>
            </div>
          
            <button type="submit">Enviar mensaje</button>

            
            <input type="hidden" name="_next" value="http://127.0.0.1:8000/home">
            <input type="hidden" name="_captcha" value="false">
        </form>
    </div>

@endsection
