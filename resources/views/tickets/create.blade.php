@extends('master')
@section('title','Contact')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card text-left">
                <div class="card-header">
                    <h4>Submit a new ticket</h4>
                </div>
                <div class="card-body">
                        {!! Form::model($ticket, ['action' => 'TicketsController@store']) !!}

                        {!! Form::token() !!}

                        @component('shared.error')
                        @endcomponent

                        @component('shared.session')
                        @endcomponent

                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::text('title', '', ['class' =>'form-control']) !!}
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', 'Content', ['class' => 'bmd-label-floating']) !!}
                            {!! Form::textarea('content', '', ['class' =>'form-control', 'rows' => '5']) !!}
                            <span class="bmd-help">Feel free ask us any question.</span>
                        </div>
                         {!! Form::reset('reset', [ 'class' => 'btn btn-danger'] ) !!}
                         {!! Form::submit('submit', [ 'class' => 'btn btn-primary btn-raised'] ) !!}
                        {!! Form::close() !!}

                </div>
                <div class="card-footer text-muted">
                    -0-
                </div>
                </div>

        </div>
    </div>
</div>
@endsection
