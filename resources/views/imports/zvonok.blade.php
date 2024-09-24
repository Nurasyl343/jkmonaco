<section class="u-clearfix u-grey-90 u-section-3" id="sec-e76e">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">Заказать звонок</h2>
        <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">Заполните форму, и мы перезвоним вам в течение часа</h5>

        {{-- Push уведомление об ошибке --}}
        @if($errors->any())
            <div id="push-error-notification" class="push-notification error">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endif

        {{-- Push уведомление --}}
        @if(session('success'))
            <div id="push-notification" class="push-notification">
                {{ session('success') }}
            </div>
        @endif


        <div class="custom-expanded u-form u-form-1">
            <form action="{{ route('saveApplication') }}" method="post" name="form-1" style="padding: 10px;">
                @csrf
                <div class="u-form-group u-form-name">
                    <label for="name-5361" class="u-label">Имя</label>
                    <input type="text" style="color: #0f0f0f" placeholder="Ваше имя" id="name-5361" name="name" class="u-border-none u-input u-input-rectangle u-radius-20" required aria-label="Ваше имя">
                    @if($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="u-form-email u-form-group">
                    <label for="email-5361" class="u-label">Email</label>
                    <input type="email" style="color: #0f0f0f" placeholder="Электронная почта" id="email-5361" name="email" class="u-border-none u-input u-input-rectangle u-radius-20" required aria-label="Электронная почта">
                    @if($errors->has('email'))
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="u-form-group u-form-phone u-form-group-3">
                    <label for="phone-1f3e" class="u-label">Телефон</label>
                    <input type="tel" style="color: #0f0f0f" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="+7-7ХХ-ХХХ-ХХ-ХХ" id="phone-1f3e" name="phone_number" class="u-border-none u-input u-input-rectangle u-radius u-input-3" required aria-label="Телефон">
                    @if($errors->has('phone_number'))
                        <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                    @endif
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                    <button class="u-btn u-btn-780" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</section>
