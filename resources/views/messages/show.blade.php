@extends('layouts.app')

@section('content')

    <h1>＃{{ $message->id }} message</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>message</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    {!! link_to_route('messages.edit', 'edit this message', ['message' => $message->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection