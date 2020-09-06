@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/conversations">{{ __('Back') }}</a></div>

                <div class="card-body">
                    <h1>{{ $conversation->title }}</h1>
                    <p class="text-muted">Posted by {{ $conversation->user->name }}</p>
                    <div>{{ $conversation->body }}</div>
                    <hr>
                    @include('conversations.replies')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
