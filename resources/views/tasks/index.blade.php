@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
 <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
       <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                     <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                   
                    <td>{{ $task->content }}</td>
                     <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
     {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}

@endsection