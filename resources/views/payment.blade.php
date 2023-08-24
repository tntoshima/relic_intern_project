@extends('layouts.layout')



@section('page-name')
経費管理
@endsection

@section('child')

<?php
$monthly = isset($_GET['monthly']) ? $_GET['monthly'] : 0;
$operator = isset($_GET['operator']) ? $_GET['operator'] : '+';
$place = isset($_GET['place']) ? $_GET['place'] : 0;
$fixtures = isset($_GET['fixtures']) ? $_GET['fixtures'] : 0;
$insurance = isset($_GET['insurance']) ? $_GET['insurance'] : 0;
$subsidy = isset($_GET['subsidy']) ? $_GET['subsidy'] : 0;


$answer = $monthly - $place - $fixtures  - $insurance + $subsidy;



?>
<head>
    <meta charset="UTF-8"/>
    <title>計算</title>
</head>
<body>
<form action="payment" method="GET">
    <div>
        月謝　
        <input type="text" name="monthly" value="<?php echo $monthly; ?>" required autofocus/>
    </div>
    <div>
        場所代
        <input type="text" name="place" value="<?php echo $place; ?>" required/>
    </div>
    <div>
        備品　
        <input type="text" name="fixtures" value="<?php echo $fixtures; ?>" required/>
    </div>
    <div>
        保険　
        <input type="text" name="insurance" value="<?php echo $insurance; ?>" required/>
    </div>
    <div>
        補助金
        <input type="text" name="subsidy" value="<?php echo $subsidy; ?>" required/>
    </div>
    <div>
        <input type="submit" value="計算する">
    </div>
    <div>
        合計
        <input type="text" name="answer" value="<?php echo $answer; ?>" required/>
    </div>
</form>
</body>

@endsection