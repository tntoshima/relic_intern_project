@extends('layouts.layout')

@section('page-name')
<!-- ここにページ名を書く -->
ホーム
@endsection

@section('child')
<!-- ページのメイン機能を書く -->
<?php
date_default_timezone_set('Asia/Tokyo');
//東京のタイムゾーンを使用する
if(isset($_GET['ym'])){
$ym = $_GET['ym'];
}else{
$ym = date('Y-m');
}
$timestamp = strtotime($ym . '-01');
if ($timestamp === false){
$ym = date('Y-m');
$timestamp = strtotime($ym . '-01');
}
$today = date('Y-m-j');
$html_title = date('Y年n月', $timestamp);
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
$day_count = date('t', $timestamp);
$youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
$weeks = [];
$week = '';
$week .= str_repeat('<td></td>', $youbi);
for($day = 1; $day <= $day_count; $day++, $youbi++){
if($day < 10){
$date = $ym . '-0' . $day;
}else{
$date = $ym . '-' . $day;
}
$link = '<a href="table/1/' .$date  . '"' . $date . '>' . $day . '</a>';
if($today == $date){
$week .= '<td class="today">' . $link . '</td>';
}else{
$week .= '<td>' . $link . '</td>';
}
$week .= '</td>';
if ($youbi % 7 == 6 || $day == $day_count){
if ($day == $day_count){
$week .= str_repeat('<td></td>', 6 - ($youbi % 7));
}
$weeks[] = '<tr>' . $week . '</tr>';
$week = '';
}
}
?>



<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>phpカレンダー</title>
</head>
<body>
    <div class="container">
    <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a>&nbsp;&nbsp;<?php echo $html_title;
        ?>&nbsp;&nbsp;<a href="?ym=<?php echo $next; ?>">&gt;</a></h3>

            <table class="table table-bordered">
                <tr>
                    <th>SUN</th>
                    <th>MON</th>
                    <th>TUE</th>
                    <th>WED</th>
                    <th>THU</th>
                    <th>FRI</th>
                    <th>SAT</th>
                    </tr>   <tr>
                    <?php foreach ($weeks as $week){echo $week;}?>
                </tr>
            </table>
        </div>
    </body>
</html>




@endsection




