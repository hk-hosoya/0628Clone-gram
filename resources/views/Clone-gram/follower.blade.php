<h2 align='center'>follow
</h2>
@extends('layouts.base')
    @section('title')
    follow
    @endsection

    @section('content')

<table align='center'>
<!-- フォロワーがいたらフォロワーを表示 -->

        @foreach ($all_users as $user)
            <tr>
                <td><b>{{$user->name}}</b></td>

                @if(!Auth::user()->isFollowing($user->id))

                <td>
                <form action="{{ route('follow', ['id' => $user->id]) }}" method="post">
                <button type='submit' class="btn btn-gradient-follow">フォローする</button>
                @csrf
                </form>
                </td>

                @else

                <td>
                <form action="{{ route('unfollow', ['id' => $user->id]) }}" method="post">
                <button type='submit' class="btn btn-gradient-unfollow">フォローをはずす</button>
                @csrf
                </form>
                </td>

                @endif

            </tr>

    @endforeach
</table>


@endsection
