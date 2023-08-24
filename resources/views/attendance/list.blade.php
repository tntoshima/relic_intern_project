@extends('layouts.layout')

@section('page-name')
出席者一覧
@endsection

@section('child')


<table>
    <tr>
        <th>生徒名</th>
        <th>出席時間</th>
    </tr>
    @foreach($club->members as $member)
        <tr>
            <td>名前: {{$member->name}}</td>
            <td>
                @foreach($attendances as $attendance)
                    @if ($attendance->member_id == $member->id)
                        <p>{{$attendance->date}}</p>
                    @endif
                @endforeach
            </td>
        </tr>
    @endforeach
</table>

@endsection
