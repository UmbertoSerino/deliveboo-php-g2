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
                        {{-- name --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }} 
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control obligate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        
                        {{-- Last Name  --}}
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Cognome') }}
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control obligate @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Indirizzo Email') }}
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control obligate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- password --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control obligate @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                                <i class="fa-solid fa-eye"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- confirm_password --}}
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Conferma Password') }}
                                <div class="container-span">
                                    <span class="required-indicator">*</span>
                                </div>
                            </label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control obligate" name="password_confirmation"  autocomplete="new-password">
                                <span id="password-match-error" class="text-danger invisible"><strong>Le password non coincidono</strong></span>
                            </div>
                            <div class="col-md-6 text-center">
                                <span class="required-indicator">* campi obbligatori</span>
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
    // ---------------- FUNCTION ------------------
    // ----------   CONTROLL PASSWORD
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('password-confirm').value;
    if (password !== confirmPassword) {
    // Se non coincidono
    event.preventDefault();
    document.getElementById('password-match-error').classList.remove('invisible');
    }
});
// --------------------   CAMPI OBBLIGATORI 
// verifica che parte al caricamento del dom
document.addEventListener('DOMContentLoaded', function () {
  const inputFields = document.querySelectorAll('.obligate');
  const spanElements = document.querySelectorAll('.required-indicator');

// Nascondi gli asterischi solo se l'input è vuoto
  inputFields.forEach((inputField, index) => {
  if (inputField.value.trim() !== '') {
  spanElements[index].classList.add('invisible');
  }
});

// Aggiungi un listener di input per controllare quando l'utente immette dati
inputFields.forEach((inputField, index) => {
  inputField.addEventListener('input', () => {
  if (inputField.value.trim() !== '') {
  spanElements[index].classList.add('invisible');
  } else {
  spanElements[index].classList.remove('invisible');
      }
    });
  });
});
</script>
@endsection
<style>
.required-indicator {
  color: red;
  font-weight: bold;
  margin-right: 5px;
  width: 10px;
}
.invisible{
  display: none
}
div.container-span{
  /* height: 20px; */
  width: 20px;
  display:inline-block;
}
</style>
