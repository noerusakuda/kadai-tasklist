@extends('layouts.app')

@section('content')
    @if($errors->isNotEmpty())
{{ dd($errors) }}
@endif
    @if(\Auth::check()) 
        @include('tasks.tasks')
        
    @else 
        <div class="center jumbotron">
            <div class="text-center">
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
            
@endsection
                  