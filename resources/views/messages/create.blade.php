@extends('layouts.app')

@section('content')

    <h1>NEW MESSAGE</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'message:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection