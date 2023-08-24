@extends('layouts.layout')

@section('page-name')
カメラ
@endsection

@section('child')
<link rel="stylesheet" href="./camera.css"/>
<!-- JavaScript -->
<script src="./jsQR.js" defer></script>
<script src="./camera.js" defer></script>

<div id="wrapper">
    <div id="msg">Unable to access video stream.</div>
    <canvas id="canvas"></canvas>
</div>
@endsection
