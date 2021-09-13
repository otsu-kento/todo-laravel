@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メールアドレスの確認') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('あなたのメールアドレスに確認メールを送信しました。') }}
                        </div>
                    @endif

                    {{ __('もしメールを受け取っていなければ') }}
                    {{ __('メールが届いていないか確認してください。') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('もう一度確認メールを送信') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
