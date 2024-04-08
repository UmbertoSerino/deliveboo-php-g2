@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="my_window">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Indirizzo Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6 input-password">
                                <input id="password" type="password" class="form-control pe-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="icon">
                                    <i class="fa-solid fa-eye invisible"></i>
                                    <i class="fa-solid fa-eye-slash"></i>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input my_shadow" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricorda credenziali') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary my_shadow" id="my_button_create">
                                    {{ __('Accedi') }}
                                </button>
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Password dimenticata?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <div class="col-md-6 offset-md-4 pt-2">
                            <a href="http://127.0.0.1:8000/register" class="d-block">Non hai un account? Registrati</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // ----- Visualizza password
const viewPassword = document.querySelector('.fa-eye-slash');
const shadowPassword = document.querySelector('.fa-eye');
let changeType = document.getElementById('password')
console.log(viewPassword, "\n", shadowPassword, "\n", changeType);

viewPassword.addEventListener('click', function(){
    changeType.type = "text";
    viewPassword.classList.add('invisible');
    shadowPassword.classList.remove('invisible');

})
// Nascondi password
shadowPassword.addEventListener('click', function(){
    changeType.type = "password";
    shadowPassword.classList.add('invisible');
    viewPassword.classList.remove('invisible');
})
</script>
    
@endsection

<style>
div.input-password{
    position: relative;
}
i{
    position: absolute;
    right: 15px;
    top:19px;
    transform: translate(-50%, -50%);
    cursor: pointer;
}
</style>