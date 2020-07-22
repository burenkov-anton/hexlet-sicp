@extends('layouts.app')
@php
/**
 * @var \App\User $user
 */
@endphp
@section('content')
<div class="row my-4">
    @include('settings._menu')
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h1 class="card-title h3">{{ __('account.profile') }} {{ $user->email }}</h1>
                            {!! Form::open()->patch()->route('settings.profile.update', [$user]) !!}
                            {!! Form::text('name', __('register.namePlaceholder'))->value($user->name) !!}
                            <div class="form-group mb-0">
                                {!! Form::submit(__('layout.common.save')) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ getProfileImageLink($user) }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="https://gravatar.com" target="_blank">Go to Gravatar.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</div>
@endsection
