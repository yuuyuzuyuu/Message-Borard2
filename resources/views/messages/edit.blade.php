@extends('layouts.app')

@section('content')

    <h1>EDIT ＃{{ $message->id }} message</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'message:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('update', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection