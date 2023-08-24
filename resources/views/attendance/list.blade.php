@extends('layouts.layout')

@section('page-name')
出席者一覧
@endsection

@section('child')

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
</style>

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
