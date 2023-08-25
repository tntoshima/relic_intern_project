@extends('layouts.layout')

@section('page-name')
出席者一覧
@endsection

@section('child')
<meta charset="sjis">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
require_once("phpqrcode/qrlib.php");
 
	// QR削除
	array_map("unlink", glob("qr/sample.png"));
 
	// 現在時刻取得
	$date = date("Y-m-d");
	$value = "現在時刻は{$date}です。";
 
	// パスセット
	$path = "phpqrcode/qr/sample.png";
 
	$qr = new QRcode();
 
	// QRコード作成
	$qr->png($value, $path, QR_ECLEVEL_M, 12);
?>

<style>
    .table-container {
        text-align: center;
        margin: 50px auto; /* 要調整 */
    }

    table {
        border-collapse: collapse;
        margin: 0 auto;
    }

    th, td {
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        padding: 8px;
    }
    
body 
{
	text-align: center;
}

</style>
<h1><?php echo $value ?></h1>
<body>
<img  src="/phpqrcode/qr/sample.png"></body>
<div class="table-container">

    <table>
        <tr>
            <th>生徒名</th>
            <th>出席時間</th>
        </tr>
        @foreach($club->members as $member)
            <tr>
                <td>{{$member->name}}</td>
                <td>
                    @foreach($attendances as $attendance)
                        @if ($attendance->member_id == $member->id)
                            {{$attendance->date}}
                        @endif
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
