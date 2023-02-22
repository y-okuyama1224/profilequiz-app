@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ログインしました') }}
                </div>
            </div>
        </div>
        <div class=url>
            <p class=url-path><a href="{{route('user_show')}}">マイページへ</a></p>
        </div>
    </div>
</div>
@endsection
