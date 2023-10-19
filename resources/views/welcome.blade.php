<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Escudo_De_Huanuco.svg/890px-Escudo_De_Huanuco.svg.png">
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turismo HCO - NL</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

            body{
                background: linear-gradient(80deg, rgba(40, 42, 55, 1) , rgba(40, 42, 55, 0.4)),
                url(https://content.emarket.pe/common/collections/content/78/5c/785c9b1f-54b7-4833-bf91-9312d4a103d5.jpg);
                opacity: 0.8;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
                .cont{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }

               /* .mt{
                    background: linear-gradient(80deg, rgba(40, 42, 55, 1) 50%,rgba(40, 42, 55, 0.9), rgba(40, 42, 55, 0.4)), url(https://content.emarket.pe/common/collections/content/78/5c/785c9b1f-54b7-4833-bf91-9312d4a103d5.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }*/
            
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="conT">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<style> .logo{margin-bottom: 30px;}</style>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">

                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Escudo_De_Huanuco.svg/100px-Escudo_De_Huanuco.svg.png">
                    
                </div>

                <div class="mt">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://www.google.com/maps/place/Tingo+Mar%C3%ADa+10131/@-9.2973358,-76.0103566,15z/data=!3m1!4b1!4m6!3m5!1s0x91a641893b93a2c9:0xc1cdbb44b0668e30" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                               <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
<img src="data:image/png;base64,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">
                               </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">TINGO MARÍA</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">

                              A 121 kilómetros al norte de la ciudad de Huánuco, es la segunda ciudad en importancia del
                              departamento del mismo nombre. Está asentada a ambos lados del río Huallaga, conformando un
                              triángulo urbano justo al norte de la unión del Monzón con el Huallaga. Apacible y tranquila,
                              viven en ella cerca de 50 mil habitantes, dedicados no solo a la agricultura y a la pesca fluvial, sino también al turismo. 
                                </p><br>

<style>

.slider{
  width: 100%;
 
  overflow: hidden;
}
.slider ul{
    display: flex;
    animation: cambio 20s infinite alternate linear;
    width: 400%;
}
.slider li{
    width: 100%;
    list-style: none;
}
.slider img{
    width: 100%;
    height: 350px;
}
@keyframes cambio{
    0%{margin-left: 0;}
    20%{margin-left: 0;}
    
    25%{margin-left: -100%;}
    45%{margin-left: -100%;}
    
    50%{margin-left: -200%;}
    70%{margin-left: -200%;}
    
    75%{margin-left: -300%;}
    100%{margin-left: -300%;}
}
@media only screen and (min-width:320px) and (max-width:768px){
.slider, .slider ul, .slider img{
    height: 200px; 
}

}
</style>
<div class="slider">
    <ul>
        <li>
            <img src="http://1.bp.blogspot.com/-DAvrMudixP8/VUQLYs4KtcI/AAAAAAAACcc/X8psHZnC3K4/s1600/tingo%2Bmaria.jpg" >
        </li>
        <li>
            <img src="https://turismoi.pe/uploads/photo/version2/photo_file/36199/optimized_Tingales383.jpg">
        </li>
        <li>
            <img src="https://fullday.pe/wp-content/uploads/2018/03/Tingo-Mar%C3%ADa-bella-durmiente.jpg">
        </li>
        <li>
            <img src="https://blog.redbus.pe/wp-content/uploads/2019/12/cueva-de-las-lechuzas-25513-xl.jpg">
        </li>
    </ul>
</div>

                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://www.google.com/maps/place/Cerro+Lacsha+Huarina/@-9.8671669,-76.5371719,15z/data=!4m14!1m7!3m6!1s0x91a876c3cdc3c22d:0x5b1fc4452c9f979!2sCerro+Lacsha+Huarina!8m2!3d-9.8680556!4d-76.5288889!16s%2Fm%2F010f7mgy!3m5!1s0x91a876c3cdc3c22d:0x5b1fc4452c9f979!8m2!3d-9.8680556!4d-76.5288889!16s%2Fm%2F010f7mgy?entry=ttu" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFsElEQVR4nO2YfUwTZxzHb5tblpn4x7bs72VZMv9wWxb/nS+YaktLS0vpvfSuvUIBeesdXikIbitOk73onGiiEtwyiQN8GSJMM9+GosOhZdMMcc5tOOidOFBABJSX/pY7vKZSECwqR8Y3+SaXPs/1+X7yPM/veVoEmdWsZjVtKi52viwamcnas9G2rsluGvzdZhw68DlZ5PUizyIzSaVbSKI+w9wlGAwQat/KuDvlhWQSonRVbaHnX/zQ1ujzEIE/SNMDELL5WAMcz8Oufl1kfRtRmkpK3HNPbaAP9tJ4ADAMRPdTGJx349Bqig2DET+r5syDRZtwHaIk3UgjBmSA0RZW4nCWw4IQp9PNcJzSgW/FCvg+Rd+BKEkwDkSomzgrHMowSgChLv4MK0CUIggJ3GVHYV9GLOzLjJWeQ9tOcJYwkBOEdqCwkJyHKEEQEvY7zVKoXrRIsvjcUGBrHCZG2gasONSQMWEwu7zxVYjSQKrvQ8gW2w/ucMR1J+DDYruPRcNA6vTqwLbN1ALFguyPU8G2bdRrYp+TGx0lcp8fUsP3yl636bLiQCpVS6A80wD1OjWU5plPi32KfCnP/8Nae8U+11bicC5aHTIjGihL10uzN62Sl43oslQ9nIqPDoYUYYo2E++L/Q5vpV1yvyNZZjivXgEVaQY4FLccaqKiph/k3Mf288Flk2EKWzYHmNhWuW+wutE4VFAaCUD29FIgCHJgu0MbwEcCtjlx+DlGE4SoRXVw1BUHhznz38WF9MLQZRgKoQgQUc1uqlsOeIyLl/bAkcw4aDTFwBWtVnKjMQYUD3Jik32nHLCPwuCoxxIECLXiQSq22l4JvTRK1xKWgLOJxiBEXaJR+SCiGtbaL42+Y4mn+tlsXLJ8wo8GOaxXwXaPvgVRiip2JiZP5gIZvHstXwa7UnVQZlw29MkXpnenLTh13T0X9WepMJ4twATmGCqw/c0cOSkIvxOFcrMKqhYvgo0FpnVPPfwS8M5BeXYDxjP1GM8MYgILof5qb/KEEMMYCqV2jXQL+PIjY4/Fz7711EHwVuad0eFDnfCXC+7a8IeCVLImCWI3sRzIZhegPDuACmwRwXOvPjUQi8DQDwMRXbuBHheiMdUCB5cuhsqoxZBWlzzqXeYmxjOsBSzPPXEQVGA3TwSytjZtTIheCoM9ZpU0G95iYtz3UZ5pQnlW/YRBmNqJQETzLmsYSHlqjARRnK4FnJ/4O1Cerba2Zb3xRKoUxjNdkwH5dnfSAxC1TPzIbxRtFDgupU/4PibDCGw/yjPrxbGnTgDIMxaBoTCB8U82QMoVFwxZ7/+TkoBChWapVGrdVY5JQ2AP7h8/KmTaI2awCMxCTGDORDL4ufV2qdSW0Rr4hlaD60dnhBCsZH19QuTXGFtvDuA3VkU08KfHU6FytQU+KCEB8zORQ/As6OocoKpGIwdJgDXgCOQD1eMB7HrWIwUg/CzYmqcAILBgaXGB7oxdglDXkG0Rg9jv5vIijAQ0lA/WW+4pBZsotPlqGhh/SwaDLxF0dTRE11AShKaGaonhU15CpiKyJyeLHszrk4Hs91YD0c49dhAxdPQY1pykri1ppl9EHocsYHnB1ptbRg/nDctAZFe2NENEBwfEv6sAb8sC7PoUQU5SoP2J7tXXJ142NCSWxl5IcnprvHOQxy26M/d1W1+OLyGwBqjbnrHdlQ2kDNguAk6uWBh+SYqf8vJ5ZKA7uTprh/u0tZNrJTvd/WT3OFD3LS5HacYeAoIoRXgn9571JpdDtHMV1lvuJuut7JvWruxhEWSkWORJS1DxIOOJaOfm2/pzLsilfKzKZ2nJVD6ILFufZ0dCIF+aHfFciv8zA4wXk6XDTtzoyEySvcdDOIbyB0WY0WUWmWmietwL6Huru8VSq6uz39b7nMdMvyaRyEwU2eGap29wvjndOWY1q/+T/gPo2fxzcqNPJwAAAABJRU5ErkJggg==">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">LACSHAHUARINA</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Lacshahuarina, comúnmente llamada la Corona del Inca, es una montaña en los Andes centrales de Perú ubicada en la región Huánuco<br>

                                Es una montaña de cumbre alargada hasta que finaliza en una pared abrupta hacia el este. Esta pared que es la cara oeste visto
                                desde el pueblo de Ayapitej tiene la forma de una corona y por eso se le llama la Corona del Inca.</p><br>


<div class="slider">
    <ul>
        <li>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/YAROWILCA_HUANUCO_013_La_Corona_del_Inca_Ayapitej.JPG/1024px-YAROWILCA_HUANUCO_013_La_Corona_del_Inca_Ayapitej.JPG">
        </li>
        <li>
            <img src="https://tse4.mm.bing.net/th?id=OIP.06W9sKah1y5wy5C3utOdeAHaE8&pid=Api&P=0&h=180">
        </li>
        <li>
            <img src="https://imgs-akamai.mnstatic.com/9d/af/9daf6c7f979ddc1cfe80ad4a8907e28e.jpg?quality=75&format=pjpg&fit=bounds&width=980&height=880">
        </li>
        <li>
            <img src="https://cdn7.dissolve.com/p/D25_145_029/D25_145_029_1200.jpg">
        </li>
    </ul>
</div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://www.google.com/maps/place/Caverna+Tur%C3%ADstica+Jatun+Uchco/@-10.1324275,-76.2030017,18z/data=!4m14!1m7!3m6!1s0x91a7ee3d5dead375:0x41f65513c6b77fa0!2sCaverna+Tur%C3%ADstica+Jatun+Uchco!8m2!3d-10.1325173!4d-76.2020093!16s%2Fg%2F11g9mby2l8!3m5!1s0x91a7ee3d5dead375:0x41f65513c6b77fa0!8m2!3d-10.1325173!4d-76.2020093!16s%2Fg%2F11g9mby2l8?entry=ttu" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,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">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Ambo Cueva de Jatun Uchco</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Jatun Uchco, una misteriosa cueva en la parte alta del cerro Chanchao Pergaypata, cerca de la capilla
                                del señor de exaltación, a 500. al sur de la plaza de armas, en el distrito de Ambo, desde su ubicación
                                es un lugar que se presta para poder observar panorámicamente toda la ciudad de Ambo y el valle del río
                                Huallaga, como resultado de la confluencia de los ríos Huariaca y Huertas o Chaupihuaranga dándole un
                                atractivo adicional.
                                </p><br>
                                <div class="slider">
    <ul>
         <li>
             <img src="http://3.bp.blogspot.com/-yp3HKkqX7IU/TXV9Wr5ZImI/AAAAAAAAAiU/bmsBZI2JjA8/s1600/jatunushco.jpg">
         </li>
         <li>
             <img src="http://4.bp.blogspot.com/-iEWtf579spg/TcQNcnVlBYI/AAAAAAAAAIM/6qxXmxHB34Y/w1200-h630-p-k-no-nu/BBEA0531.gif">
         </li>
        <li>
            <img src="https://tse2.mm.bing.net/th?id=OIP.1BRF2nm-hjG_A4_PwOsmFwHaEK&pid=Api&P=0&h=180">
        </li>
        <li>
            <img src="http://2.bp.blogspot.com/-hrm72ac6g-E/TcQPLIAls8I/AAAAAAAAAIw/7dUPjoZVTOA/s1600/vista-de-Ambo.jpg">
        </li>
    </ul>
</div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://www.google.com/maps/place/Caverna+Tur%C3%ADstica+Jatun+Uchco/@-10.1324275,-76.2030017,18z/data=!4m14!1m7!3m6!1s0x91a7ee3d5dead375:0x41f65513c6b77fa0!2sCaverna+Tur%C3%ADstica+Jatun+Uchco!8m2!3d-10.1325173!4d-76.2020093!16s%2Fg%2F11g9mby2l8!3m5!1s0x91a7ee3d5dead375:0x41f65513c6b77fa0!8m2!3d-10.1325173!4d-76.2020093!16s%2Fg%2F11g9mby2l8?entry=ttu" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFsElEQVR4nO2YfUwTZxzHb5tblpn4x7bs72VZMv9wWxb/nS+YaktLS0vpvfSuvUIBeesdXikIbitOk73onGiiEtwyiQN8GSJMM9+GosOhZdMMcc5tOOidOFBABJSX/pY7vKZSECwqR8Y3+SaXPs/1+X7yPM/veVoEmdWsZjVtKi52viwamcnas9G2rsluGvzdZhw68DlZ5PUizyIzSaVbSKI+w9wlGAwQat/KuDvlhWQSonRVbaHnX/zQ1ujzEIE/SNMDELL5WAMcz8Oufl1kfRtRmkpK3HNPbaAP9tJ4ADAMRPdTGJx349Bqig2DET+r5syDRZtwHaIk3UgjBmSA0RZW4nCWw4IQp9PNcJzSgW/FCvg+Rd+BKEkwDkSomzgrHMowSgChLv4MK0CUIggJ3GVHYV9GLOzLjJWeQ9tOcJYwkBOEdqCwkJyHKEEQEvY7zVKoXrRIsvjcUGBrHCZG2gasONSQMWEwu7zxVYjSQKrvQ8gW2w/ucMR1J+DDYruPRcNA6vTqwLbN1ALFguyPU8G2bdRrYp+TGx0lcp8fUsP3yl636bLiQCpVS6A80wD1OjWU5plPi32KfCnP/8Nae8U+11bicC5aHTIjGihL10uzN62Sl43oslQ9nIqPDoYUYYo2E++L/Q5vpV1yvyNZZjivXgEVaQY4FLccaqKiph/k3Mf288Flk2EKWzYHmNhWuW+wutE4VFAaCUD29FIgCHJgu0MbwEcCtjlx+DlGE4SoRXVw1BUHhznz38WF9MLQZRgKoQgQUc1uqlsOeIyLl/bAkcw4aDTFwBWtVnKjMQYUD3Jik32nHLCPwuCoxxIECLXiQSq22l4JvTRK1xKWgLOJxiBEXaJR+SCiGtbaL42+Y4mn+tlsXLJ8wo8GOaxXwXaPvgVRiip2JiZP5gIZvHstXwa7UnVQZlw29MkXpnenLTh13T0X9WepMJ4twATmGCqw/c0cOSkIvxOFcrMKqhYvgo0FpnVPPfwS8M5BeXYDxjP1GM8MYgILof5qb/KEEMMYCqV2jXQL+PIjY4/Fz7711EHwVuad0eFDnfCXC+7a8IeCVLImCWI3sRzIZhegPDuACmwRwXOvPjUQi8DQDwMRXbuBHheiMdUCB5cuhsqoxZBWlzzqXeYmxjOsBSzPPXEQVGA3TwSytjZtTIheCoM9ZpU0G95iYtz3UZ5pQnlW/YRBmNqJQETzLmsYSHlqjARRnK4FnJ/4O1Cerba2Zb3xRKoUxjNdkwH5dnfSAxC1TPzIbxRtFDgupU/4PibDCGw/yjPrxbGnTgDIMxaBoTCB8U82QMoVFwxZ7/+TkoBChWapVGrdVY5JQ2AP7h8/KmTaI2awCMxCTGDORDL4ufV2qdSW0Rr4hlaD60dnhBCsZH19QuTXGFtvDuA3VkU08KfHU6FytQU+KCEB8zORQ/As6OocoKpGIwdJgDXgCOQD1eMB7HrWIwUg/CzYmqcAILBgaXGB7oxdglDXkG0Rg9jv5vIijAQ0lA/WW+4pBZsotPlqGhh/SwaDLxF0dTRE11AShKaGaonhU15CpiKyJyeLHszrk4Hs91YD0c49dhAxdPQY1pykri1ppl9EHocsYHnB1ptbRg/nDctAZFe2NENEBwfEv6sAb8sC7PoUQU5SoP2J7tXXJ142NCSWxl5IcnprvHOQxy26M/d1W1+OLyGwBqjbnrHdlQ2kDNguAk6uWBh+SYqf8vJ5ZKA7uTprh/u0tZNrJTvd/WT3OFD3LS5HacYeAoIoRXgn9571JpdDtHMV1lvuJuut7JvWruxhEWSkWORJS1DxIOOJaOfm2/pzLsilfKzKZ2nJVD6ILFufZ0dCIF+aHfFciv8zA4wXk6XDTtzoyEySvcdDOIbyB0WY0WUWmWmietwL6Huru8VSq6uz39b7nMdMvyaRyEwU2eGap29wvjndOWY1q/+T/gPo2fxzcqNPJwAAAABJRU5ErkJggg==">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"> Kotosh y el templo de las manos cruzadas</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Kotosh es uno de los lugares turísticos de Huánuco que debes conocer si o si. Está ubicado a 5 kilómetros al oeste de
                                 Huánuco y destaca por su conocido Templo de las Manos Cruzadas. En este templo se pueden encontrar en sus paredes 2
                                  esculturas que representan un par de manos cruzados.


                                Se cree que las manos cruzadas en tus decoraciones y esculturas tiene una relación con alguna dualidad y una visión
                                 de los antiguos peruanos y su entorno.
                                </p><br>
                                <div class="slider">
    <ul>
        <li>
            <img src="https://turismoalperu.com/wp-content/uploads/2022/03/kotosh.jpg">
        </li>
        <li>
            <img src="https://4.bp.blogspot.com/-YVFQSdZfcdU/UmbY1U519MI/AAAAAAAAArQ/qJYAFP6N7uM/s400/DSCF2112+(FILEminimizer).JPG">
        </li>
        <li>
            <img src="https://www.alemape-tours.com/wp-content/uploads/2018/07/Kotosh-012.jpg">
        </li>
        <li>
            <img src="http://4.bp.blogspot.com/_KZYjBtEY_rU/SWpGZ6SYQ2I/AAAAAAAAA7o/QZvRubulNIE/s400/templo-manos-cruzadas-kotosh.jpg">
        </li>
    </ul>
</div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <!--add-->

                        <a href="https://www.google.com/maps/search/+LAGUNAS+DE+PICHGACOCHA+huanuco/@-9.757234,-76.7767096,11z?entry=ttu" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,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">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">LAGUNAS DE PICHGACOCHA</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Las 5 Lagunas de Pichgacocha son una maravilla hídrica de la naturaleza en lo alto del pueblo de Chonchamarca,
                                distrito de Ambo. Este increíble lugar ubicado en Huánuco lo constituyen 5 lagunas que están interconectadas
                                gracias al desnivel existente entre ellas.

                                Es un hermoso paraje en lo alto de las montañas, poseedor de un silencio único y paisajes de ensueño.
                                Actualmente es frecuentado por aquellos aventureros que buscan alejarse de la rutina y bullicio citadino. 
                                </p><br>
                                <div class="slider">
     <ul>
        <li>
            <img src="https://www.incatrailtomachupicchu.pe/wp-content/uploads/2020/10/PromPeru-3-Lagunas-de-Pichgacocha.jpg">
        </li>
        <li>
            <img src="https://www.incatrailtomachupicchu.pe/wp-content/uploads/2020/10/PromPeru-4-Lagunas-de-Pichgacocha.jpg">
        </li>
        <li>
            <img src="https://www.incatrailtomachupicchu.pe/wp-content/uploads/2020/10/Ante-Gabriel-PhotoArt-3-Lagunas-de-Pichgacocha.jpg">
        </li>
        <li>
            <img src="https://www.incatrailtomachupicchu.pe/wp-content/uploads/2020/10/PromPeru-1-Lagunas-de-Pichgacocha.jpg">
        </li>
    </ul>
</div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                        
                        
       
                        <a href="https://www.google.com/maps/place/Casa+de+la+Perricholi/@-10.0790584,-76.2132961,17z/data=!3m1!4b1!4m6!3m5!1s0x91a7eec28efd409b:0xa9688d2020ce2edf!8m2!3d-10.0790584!4d-76.2107212!16s%2Fg%2F11c0ptw44m?entry=ttu" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img src="data:image/png;base64,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">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">La Casa de la Perricholi </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                La Casa de la Perricholi está ubicada en el distrito de Tomayquichua, en la provincia de Ambo. Esta construcción es
                                una pieza de la primera mitad del siglo XVIII.<br>


                                Uno de los principales atractivos turísticos de la región de Huánuco es, sin duda, «La casa de la Perricholi», una hermosa
                                casa de adobe donde vivió Micaela Villegas Hurtado, una mujer de encantadora belleza que conquistó al Virrey Amat y a Juniet.
                                </p><br>
                                <div class="slider">
    <ul>
        <li>
            <img src="https://www.todoenperu.net/wp-content/uploads/2019/03/la-casa-de-la-perricholi.jpg">
        </li>
        <li>
            <img src="https://tse2.mm.bing.net/th?id=OIP.R6XJft6z5pjTougVvuNsBQHaE8&pid=Api&P=0&h=180">
        </li>
        <li>
            <img src="https://portal.andina.pe/EDPfotografia/Thumbnail/2015/12/24/000331990W.jpg">
        </li>
        <li>
            <img src="https://2.bp.blogspot.com/-yfRMAD2a4UE/TX7AgHpdOUI/AAAAAAAAAi8/Eo_NkovhwEM/s1600/DSC02529.JPG">
        </li>
    </ul>
</div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>


                        <link rel="preconnect" href="https://fonts.googleapis.com">
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">

                        <link rel="preconnect" href="https://fonts.googleapis.com">
                       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                       <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

                        <style>
                            .GA{
                          
                                color: #fff;
                                text-align: center;
                                font-size: 50px;
                                font-family: 'Oswald', sans-serif;
                             
                            }
                            .footH{
                                color:#fff;
                            }
                            .pT{
                                font-size: 25px;
                                font-family: 'Oswald', sans-serif;
                            }
                            .text-p{
                                font-family: 'Roboto Slab', serif;
                            }
                        </style>

                        <!--Foot-->
                        <div class="footH">
                        <h2 class="GA"> GASTRONOMÍA HUÁNUQUEÑA</h2>
                        <details open>
                            <summary>
                             Detalles
                            </summary>
                            <p class="text-p">
                        La gastronomía peruana está conformada por sabores de todas las regiones del país que nutren la cultura y
                        llevan al siguiente nivel la experiencia culinaria incluso para los paladares más exigentes. Más de uno
                        queda cautivado con los platillos que destilan un delicioso aroma tradicional, pero también hablan de la
                        rica historia que hay detrás de cada manjar.<br><br>

                        En ese sentido, regiones como Huánuco han sabido mostrar lo mejor de su gastronomía con diversas 
                        preparaciones que hoy conocemos y amamos en todo el Perú. Por eso, a continuación conoce cuáles 
                        son los platillos típicos de esta región, en el marco de su aniversario.<br><br>
                        </details><br>
                        <p class="pT">Los platos típicos más conocidos de Huánuco</p><br>
                        • Pachamanca
                        <br><br>
                        • locro de gallina
                        <br><br>
                        • Picante de cuy
                        <br><br>
                        • Humitas de maiz
                        <br><br>
                        • Tacacho con Cecina
                        <br><br>
                     
                        </p>
                      
                        
                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                
                                <div class="">
                                      
                                <a href="https://peru.info/es-pe/gastronomia/noticias/2/13/exotica-gastronomia-huanuquena" target="_blank">
                                <img src="https://cdn-icons-png.flaticon.com/128/2276/2276931.png" height="45px" width="45px" >
                                </a>
                          
                         
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Delicias huanuqueñas</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Huánuco es y se presenta como un destino destacado a nivel nacional para los visitantes de todas partes del país, 
                                por su abundancia en historia y atractivos turísticos. No obstante, este departamento posee una gastronomía 
                                inigualable que realmente enamora a quienes lo visitan, y compone una importante fuente de comercio y cultura 
                                para las personas que la habitan. Desde la pachamanca hasta el tacacho con cecina, los platillos que puedes 
                                disfrutar en este sitio son de reconocimiento nacional y global.

                                Por este motivo, traemos algunas de las joyas culinarias que tienes que probar en tu siguiente visita a Huánuco, 
                                que deleitan a todo viajero que decide visitar esta maravilla en los Andes del Perú.<br> 
                                ¿Te gusta este plato andino?.
                                </p><br>
                                <div class="slider">
                                
     <ul>
        <li>
        <img src="https://tse1.mm.bing.net/th?id=OIP.npYQlFPkxxSTwasT8XZt4wHaDy&pid=Api&P=0&h=180">
        </li>
        <li>
            <img src="https://tse2.mm.bing.net/th?id=OIP.-96hszZa0ss6S_f4WZ_PWAHaFF&pid=Api&P=0&h=180">
        </li>
        <li>
            <img src="https://www.unarecetaperuana.com/wp-content/uploads/2022/07/picante-de-cuy-peruano.jpg">
        </li>

        <li>
            <img src="https://blog.redbus.pe/wp-content/uploads/2017/11/Tacacho-con-Cecina.jpg">
        </li>
    </ul>
                               

                                </div>
                            </div>




                        </div>
                    </div>
                </div>



   

                
                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">

<a href="https://github.com/" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" target="_blanck" >
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
<linearGradient id="rL2wppHyxHVbobwndsT6Ca_AZOZNnY73haj_gr1" x1="4" x2="44" y1="23.508" y2="23.508" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4c4c4c"></stop><stop offset="1" stop-color="#343434"></stop></linearGradient><path fill="url(#rL2wppHyxHVbobwndsT6Ca_AZOZNnY73haj_gr1)" d="M24,4C12.954,4,4,12.954,4,24c0,8.887,5.801,16.411,13.82,19.016h12.36	C38.199,40.411,44,32.887,44,24C44,12.954,35.046,4,24,4z"></path><path d="M30.01,41.996L30,36.198c0-0.939-0.22-1.856-0.642-2.687c5.641-1.133,8.386-4.468,8.386-10.177	c0-2.255-0.665-4.246-1.976-5.92c0.1-0.317,0.174-0.645,0.22-0.981c0.188-1.369-0.023-2.264-0.193-2.984l-0.027-0.116	c-0.186-0.796-0.409-1.364-0.418-1.388l-0.111-0.282l-0.111-0.282l-0.302-0.032l-0.303-0.032c0,0-0.199-0.021-0.501-0.021	c-0.419,0-1.04,0.042-1.627,0.241l-0.196,0.066c-0.74,0.249-1.439,0.485-2.417,1.069c-0.286,0.171-0.599,0.366-0.934,0.584	C27.334,12.881,25.705,12.69,24,12.69c-1.722,0-3.365,0.192-4.889,0.571c-0.339-0.22-0.654-0.417-0.942-0.589	c-0.978-0.584-1.677-0.819-2.417-1.069l-0.196-0.066c-0.585-0.199-1.207-0.241-1.626-0.241c-0.302,0-0.501,0.021-0.501,0.021	l-0.302,0.032l-0.3,0.031l-0.112,0.281l-0.113,0.283c-0.01,0.026-0.233,0.594-0.419,1.391l-0.027,0.115	c-0.17,0.719-0.381,1.615-0.193,2.983c0.048,0.346,0.125,0.685,0.23,1.011c-1.285,1.666-1.936,3.646-1.936,5.89	c0,5.695,2.748,9.028,8.397,10.17c-0.194,0.388-0.345,0.798-0.452,1.224c-0.197,0.067-0.378,0.112-0.538,0.137	c-0.238,0.036-0.487,0.054-0.739,0.054c-0.686,0-1.225-0.134-1.435-0.259c-0.313-0.186-0.872-0.727-1.414-1.518	c-0.463-0.675-1.185-1.558-1.992-1.927c-0.698-0.319-1.437-0.502-2.029-0.502c-0.138,0-0.265,0.01-0.376,0.028	c-0.517,0.082-0.949,0.366-1.184,0.78c-0.203,0.357-0.235,0.773-0.088,1.141c0.219,0.548,0.851,0.985,1.343,1.255	c0.242,0.133,0.765,0.619,1.07,1.109c0.229,0.368,0.335,0.63,0.482,0.992c0.087,0.215,0.183,0.449,0.313,0.732	c0.47,1.022,1.937,1.924,2.103,2.023c0.806,0.483,2.161,0.638,3.157,0.683l0.123,0.003c0,0,0.001,0,0.001,0	c0.24,0,0.57-0.023,1.004-0.071v2.613c0.002,0.529-0.537,0.649-1.25,0.638l0.547,0.184C19.395,43.572,21.645,44,24,44	c2.355,0,4.605-0.428,6.703-1.176l0.703-0.262C30.695,42.538,30.016,42.422,30.01,41.996z" opacity=".05"></path><path d="M30.781,42.797c-0.406,0.047-1.281-0.109-1.281-0.795v-5.804c0-1.094-0.328-2.151-0.936-3.052	c5.915-0.957,8.679-4.093,8.679-9.812c0-2.237-0.686-4.194-2.039-5.822c0.137-0.365,0.233-0.75,0.288-1.147	c0.175-1.276-0.016-2.086-0.184-2.801l-0.027-0.116c-0.178-0.761-0.388-1.297-0.397-1.319l-0.111-0.282l-0.303-0.032	c0,0-0.178-0.019-0.449-0.019c-0.381,0-0.944,0.037-1.466,0.215l-0.196,0.066c-0.714,0.241-1.389,0.468-2.321,1.024	c-0.332,0.198-0.702,0.431-1.101,0.694C27.404,13.394,25.745,13.19,24,13.19c-1.762,0-3.435,0.205-4.979,0.61	c-0.403-0.265-0.775-0.499-1.109-0.699c-0.932-0.556-1.607-0.784-2.321-1.024l-0.196-0.066c-0.521-0.177-1.085-0.215-1.466-0.215	c-0.271,0-0.449,0.019-0.449,0.019l-0.302,0.032l-0.113,0.283c-0.009,0.022-0.219,0.558-0.397,1.319l-0.027,0.116	c-0.169,0.715-0.36,1.524-0.184,2.8c0.056,0.407,0.156,0.801,0.298,1.174c-1.327,1.62-1.999,3.567-1.999,5.795	c0,5.703,2.766,8.838,8.686,9.806c-0.395,0.59-0.671,1.255-0.813,1.964c-0.33,0.13-0.629,0.216-0.891,0.256	c-0.263,0.04-0.537,0.06-0.814,0.06c-0.69,0-1.353-0.129-1.69-0.329c-0.44-0.261-1.057-0.914-1.572-1.665	c-0.35-0.51-1.047-1.417-1.788-1.755c-0.635-0.29-1.298-0.457-1.821-0.457c-0.11,0-0.21,0.008-0.298,0.022	c-0.366,0.058-0.668,0.252-0.828,0.534c-0.128,0.224-0.149,0.483-0.059,0.708c0.179,0.448,0.842,0.85,1.119,1.002	c0.335,0.184,0.919,0.744,1.254,1.284c0.251,0.404,0.37,0.697,0.521,1.067c0.085,0.209,0.178,0.437,0.304,0.712	c0.331,0.719,1.353,1.472,1.905,1.803c0.754,0.452,2.154,0.578,2.922,0.612l0.111,0.002c0.299,0,0.8-0.045,1.495-0.135v3.177	c0,0.779-0.991,0.81-1.234,0.81c-0.031,0,0.503,0.184,0.503,0.184C19.731,43.64,21.822,44,24,44c2.178,0,4.269-0.36,6.231-1.003	C30.231,42.997,30.812,42.793,30.781,42.797z" opacity=".07"></path><path fill="#fff" d="M36.744,23.334c0-2.31-0.782-4.226-2.117-5.728c0.145-0.325,0.296-0.761,0.371-1.309	c0.172-1.25-0.031-2-0.203-2.734s-0.375-1.25-0.375-1.25s-0.922-0.094-1.703,0.172s-1.453,0.469-2.422,1.047	c-0.453,0.27-0.909,0.566-1.27,0.806C27.482,13.91,25.785,13.69,24,13.69c-1.801,0-3.513,0.221-5.067,0.652	c-0.362-0.241-0.821-0.539-1.277-0.811c-0.969-0.578-1.641-0.781-2.422-1.047s-1.703-0.172-1.703-0.172s-0.203,0.516-0.375,1.25	s-0.375,1.484-0.203,2.734c0.077,0.562,0.233,1.006,0.382,1.333c-1.31,1.493-2.078,3.397-2.078,5.704	c0,5.983,3.232,8.714,9.121,9.435c-0.687,0.726-1.148,1.656-1.303,2.691c-0.387,0.17-0.833,0.33-1.262,0.394	c-1.104,0.167-2.271,0-2.833-0.333s-1.229-1.083-1.729-1.813c-0.422-0.616-1.031-1.331-1.583-1.583	c-0.729-0.333-1.438-0.458-1.833-0.396c-0.396,0.063-0.583,0.354-0.5,0.563c0.083,0.208,0.479,0.521,0.896,0.75	c0.417,0.229,1.063,0.854,1.438,1.458c0.418,0.674,0.5,1.063,0.854,1.833c0.249,0.542,1.101,1.219,1.708,1.583	c0.521,0.313,1.562,0.491,2.688,0.542c0.389,0.018,1.308-0.096,2.083-0.206v3.75c0,0.639-0.585,1.125-1.191,1.013	C19.756,43.668,21.833,44,24,44c2.166,0,4.243-0.332,6.19-0.984C29.585,43.127,29,42.641,29,42.002v-5.804	c0-1.329-0.527-2.53-1.373-3.425C33.473,32.071,36.744,29.405,36.744,23.334z M11.239,32.727c-0.154-0.079-0.237-0.225-0.185-0.328	c0.052-0.103,0.22-0.122,0.374-0.043c0.154,0.079,0.237,0.225,0.185,0.328S11.393,32.806,11.239,32.727z M12.451,33.482	c-0.081,0.088-0.255,0.06-0.389-0.062s-0.177-0.293-0.096-0.381c0.081-0.088,0.255-0.06,0.389,0.062S12.532,33.394,12.451,33.482z M13.205,34.732c-0.102,0.072-0.275,0.005-0.386-0.15s-0.118-0.34-0.016-0.412s0.275-0.005,0.386,0.15	C13.299,34.475,13.307,34.66,13.205,34.732z M14.288,35.673c-0.069,0.112-0.265,0.117-0.437,0.012s-0.256-0.281-0.187-0.393	c0.069-0.112,0.265-0.117,0.437-0.012S14.357,35.561,14.288,35.673z M15.312,36.594c-0.213-0.026-0.371-0.159-0.353-0.297	c0.017-0.138,0.204-0.228,0.416-0.202c0.213,0.026,0.371,0.159,0.353,0.297C15.711,36.529,15.525,36.62,15.312,36.594z M16.963,36.833c-0.227-0.013-0.404-0.143-0.395-0.289c0.009-0.146,0.2-0.255,0.427-0.242c0.227,0.013,0.404,0.143,0.395,0.289	C17.381,36.738,17.19,36.846,16.963,36.833z M18.521,36.677c-0.242,0-0.438-0.126-0.438-0.281s0.196-0.281,0.438-0.281	c0.242,0,0.438,0.126,0.438,0.281S18.762,36.677,18.521,36.677z"></path>
</svg></a>

<a href="https://api.whatsapp.com/send?phone=920607230&text=¡Hola Nilo!👍" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" target="_blanck">
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
<path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
</svg></a>

<a href="https://www.facebook.com/nilo.rosales.777?mibextid=ZbWKwL" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" target="_blanck" >
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
<path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
</svg> </a>

                                By @NiloRlz
                            

                            
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Copyright© - 2023: Trabajo Final @Nilo Rlz. Todos los derechos reservados.
                    </div>
                </div>
            </div>
        </div>


        
    </body>
</html>
