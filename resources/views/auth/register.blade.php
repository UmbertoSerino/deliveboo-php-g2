@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrazione') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="registrationForm">
                        @csrf
                        @include('partials.errors')
                        {{-- name --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control obligate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </div>
                        </div>                        
                        {{-- Last Name Added  --}}
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Cognome') }}</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control obligate @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Indirizzo Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control obligate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </div>
                        </div>
                        {{-- password --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control obligate @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </div>
                        </div>
                        {{-- confirm_password --}}
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Conferma Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control obligate" name="password_confirmation" required autocomplete="new-password">
                                <span id="password-match-error" class="text-danger invisible">Le password non coincidono</span>
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="submit">{{ __('Registrati') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // ---------------- FUNCTION
    // ----------Validate Password and Confirm password
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('password-confirm').value;
        if (password !== confirmPassword) {
            // Se le password non coincidono, impedisce l'invio del form
            event.preventDefault();
            document.getElementById('password-match-error').classList.remove('invisible');
        }
    });
    const inputFields = document.querySelectorAll('.obligate');
    const spanElements = document.querySelectorAll('.required-indicator');

    inputFields.forEach((inputField, index) => {
    inputField.addEventListener('input', () => {
    if (inputField.value.trim() !== '') {
      spanElements[index].classList.add('invisible');
    } else {
      spanElements[index].classList.remove('invisible');
    }
  });
});
</script>
@endsection
<style>
    .required-indicator {
      color: red;
      font-weight: bold;
      margin-right: 5px;
    }
    .invisible{
      display: none
    }
    div.container-span{
        height: 20px
    }
    </style>
