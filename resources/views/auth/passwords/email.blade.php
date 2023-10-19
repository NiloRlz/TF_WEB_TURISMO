@extends('layouts.app')

@section('content')

<style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Gabarito', sans-serif;
}
body{

   
min-height: 100vh;
background: linear-gradient(80deg, rgba(40, 42, 55, 1) , rgba(40, 42, 55, 0.4)),
                url("https://i.pinimg.com/originals/91/66/3f/91663f7045f60ad732e967e38874cda4.jpg");
            
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
    .container{
      margin-top: 20px;
        display: flex;
  justify-content: center;
  align-items: center;

 

    }
    .card-body{
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
    padding: 50px 10px;
    width: 400px;
    display: flex;
  justify-content: center;
  align-items: center;



    }
    .card-header{
  margin-bottom: 50px;     
  display: flex;
  justify-content: center;
  align-items: center;


    }
    form{
        margin-bottom: 50px;
    }

    .box{
        margin-bottom: 20px;
        height: 10px;
        outline: none;

  padding: 15px 35px;

  background-color: #f9f9f9;
}
.box:focus{
  border: 2px solid #4A9DEC;
  box-shadow: 0px 0px 0px 4px rgb(74, 157, 236, 20%);
  background-color: white;
}
.col{

    margin-top: 10px;
    text-align: center;
    color: #fff;
    font-family: 'Roboto', sans-serif;
}
.btnE{
    height: 35px;
    width: 50%;
  
  background-color: #097ef6;

  border: 0;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
  border-radius: 10px;
}
.btnE:hover{
background: #00d2ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
}

@media(max-width:990px){

  .card-body{
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
    width: 80%;
    height: 300px;
    padding: 20px;
  }
  .col{
    margin-bottom: 20px;
  }

body{
    padding: 0;
}


}
    
</style>

<div class="container">
 
        

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="rowl">
                            <label for="email" class="col">{{ __('correo electronico') }}</label>

                            <div class="rowll">
                                <input id="email" type="email" class="box" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btnE">
                                    {{ __('Enviar enlace ') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

</div>
@endsection
