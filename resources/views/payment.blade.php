@extends('layouts.layout')

@section('page-name')
経費管理
@endsection

@section('child')

<head>
    <meta charset="UTF-8"/>
    <title>経費計算</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3490dc;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2469a0;
        }
    </style>
</head>
<?php
$monthly = isset($_GET['monthly']) ? $_GET['monthly'] : 0;
$operator = isset($_GET['operator']) ? $_GET['operator'] : '+';
$place = isset($_GET['place']) ? $_GET['place'] : 0;
$fixtures = isset($_GET['fixtures']) ? $_GET['fixtures'] : 0;
$insurance = isset($_GET['insurance']) ? $_GET['insurance'] : 0;
$subsidy = isset($_GET['subsidy']) ? $_GET['subsidy'] : 0;


$answer = $monthly - $place - $fixtures  - $insurance + $subsidy;



?>
<body>
<div class="container">
    <form action="payment" method="GET">
        <div class="form-group">
            <label for="monthly">月謝</label>
            <input type="text" name="monthly" value="{{ $monthly }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="place">場所代</label>
            <input type="text" name="place" value="{{ $place }}" required>
        </div>
        <div class="form-group">
            <label for="fixtures">備品</label>
            <input type="text" name="fixtures" value="{{ $fixtures }}" required>
        </div>
        <div class="form-group">
            <label for="insurance">保険</label>
            <input type="text" name="insurance" value="{{ $insurance }}" required>
        </div>
        <div class="form-group">
            <label for="subsidy">補助金</label>
            <input type="text" name="subsidy" value="{{ $subsidy }}" required>
        </div>
        <div class="form-group">
            <input type="submit" value="計算する">
        </div>
        <div class="form-group">
            <label for="answer">合計</label>
            <input type="text" name="answer" value="{{ $answer }}" required readonly>
        </div>
    </form>
</div>
</body>

@endsection
