@extends('imports.head')

@section('main')
<section class="u-clearfix u-grey-5 u-section-78" id="sec-c633">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-text u-text-default u-text-1">Войти личный кабинет</h5>

        @if(session('error'))
            <div id="push-error-notification" class="push-notification error">
                {{ session('error') }}
            </div>
        @endif

        {{-- Push уведомление --}}
        @if(session('success'))
            <div id="push-notification" class="push-notification">
                {{ session('success') }}
            </div>
        @endif

        <div class="u-form u-form-1">
            <form action="{{ route('login-post') }}" name="form" style="padding: 10px;" method="post">
                @csrf
                <div class="u-form-group u-form-name">
                    <label for="name-153c" class="u-form-control-hidden u-label"></label>
                    <input type="text" placeholder="Email" id="name-153c" name="email" class="u-input u-input-rectangle" required="">
                </div>
                <div class="u-form-group">
                    <label for="email-153c" class="u-form-control-hidden u-label"></label>
                    <input type="password" placeholder="Password" id="email-153c" name="password" class="u-input u-input-rectangle" required="required">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                    <button class="u-btn u-btn-780" type="submit">Войти</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
