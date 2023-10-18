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
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='860' preserveAspectRatio='none' viewBox='0 0 1440 860'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1018%26quot%3b)' fill='none'%3e%3crect width='1440' height='860' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cuse xlink:href='%23SvgjsSymbol1025' x='0' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1025' x='0' y='720'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1025' x='720' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1025' x='720' y='720'%3e%3c/use%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1018'%3e%3crect width='1440' height='860' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cpath d='M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z' id='SvgjsPath1024'%3e%3c/path%3e%3cpath d='M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z' id='SvgjsPath1022'%3e%3c/path%3e%3cpath d='M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z' id='SvgjsPath1019'%3e%3c/path%3e%3cpath d='M2 -2 L-2 2z' id='SvgjsPath1020'%3e%3c/path%3e%3cpath d='M6 -6 L-6 6z' id='SvgjsPath1021'%3e%3c/path%3e%3cpath d='M30 -30 L-30 30z' id='SvgjsPath1023'%3e%3c/path%3e%3c/defs%3e%3csymbol id='SvgjsSymbol1025'%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='30' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='30' y='90' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='150' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='30' y='270' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='330' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='450' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='30' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='570' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='630' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='30' y='690' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='30' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='90' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='150' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='90' y='210' stroke='rgba(23%2c 31%2c 208%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='90' y='270' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='330' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='90' y='450' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='630' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='690' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='30' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='150' y='90' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='150' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='270' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='150' y='330' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='150' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='450' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='150' y='510' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='150' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='630' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='150' y='690' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='210' y='30' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='210' y='90' stroke='rgba(23%2c 31%2c 208%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='150' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='210' y='210' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='270' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='330' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='210' y='450' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='510' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='630' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='690' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='30' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='90' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='150' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='270' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='270' y='270' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='330' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='270' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='450' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='270' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='270' y='630' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='690' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='330' y='30' stroke='rgba(29%2c 138%2c 235%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='330' y='90' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='330' y='150' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='330' y='270' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='330' y='330' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='330' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='330' y='450' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='330' y='630' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='330' y='690' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='390' y='30' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='390' y='90' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='390' y='150' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='390' y='210' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='390' y='270' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='390' y='330' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='390' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='390' y='450' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='390' y='510' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='390' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='390' y='630' stroke='rgba(23%2c 31%2c 208%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='390' y='690' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='450' y='30' stroke='rgba(23%2c 31%2c 208%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='450' y='90' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='450' y='150' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='450' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='450' y='270' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='330' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='450' y='450' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='450' y='570' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='630' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='690' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='30' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='90' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='150' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='270' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='330' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='510' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='450' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='570' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='510' y='630' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='690' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='570' y='30' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='570' y='90' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='150' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='570' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='570' y='270' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='330' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='570' y='390' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='570' y='450' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='510' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='570' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='630' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='570' y='690' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='630' y='30' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='90' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='150' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='630' y='270' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='330' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='630' y='390' stroke='rgba(23%2c 31%2c 208%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='450' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='630' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='630' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='630' y='630' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='630' y='690' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='690' y='30' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='690' y='90' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='690' y='150' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='210' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='690' y='270' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1023' x='690' y='330' stroke='rgba(23%2c 31%2c 208%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='690' y='390' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1024' x='690' y='450' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='690' y='510' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='570' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='690' y='630' stroke='rgba(29%2c 138%2c 235%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='690' y='690' stroke='rgba(23%2c 31%2c 208%2c 1)'%3e%3c/use%3e%3c/symbol%3e%3c/svg%3e");
}
    .container{
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
    padding: 5px;
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
