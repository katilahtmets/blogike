@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<h1>Your posts</h1>
{{$posts->links()}}
<div class="row row-cols-4">
    @foreach($posts as $post)
    <div class="col">
        @include('partials.post-card')
    </div>
    @endforeach
</div>

@endsection