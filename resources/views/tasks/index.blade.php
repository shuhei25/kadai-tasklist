@extends('layouts.app')

@section('content')

<h1>メッセージ一覧</h1>

    @if (count($Tasks) > 0)
        <ul>
            @foreach ($Tasks as $Task)
                <li>{!! link_to_route('tasks.show', $Task->id, ['id' => $Task->id]) !!} : {{ $Task->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', '新規メッセージの投稿') !!}

@endsection