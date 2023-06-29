<h2 align='center'>follow
</h2>
@extends('layouts.base')
    @section('title')
    follow
    @endsection

    @section('content')

<table border='1'align='center'>

        @foreach ($follwers as $follwer)
            <tr>
                <td>{{$follwer->user->name}}</td>
                <td><input type='button' value="フォローする"></td>
            </tr>

    @endforeach
</table>


@endsection
