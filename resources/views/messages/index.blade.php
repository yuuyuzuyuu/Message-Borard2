@extends('layouts.app')

@section('content')

    <h1>MESSAGES</h1>
    
    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{link_to_route('messages.show', $message->id, ['message' => $message->id]) }}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('messages.create', 'NEW MESSAGE', [], ['class' => 'btn btn-primary']) !!}
@endsection