@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                      
                      
                       <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="telefone" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{ old('telefone') }}" required>

                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        </div>
                            
                         <div class="form-group row">
                            <label for="Cep" class="col-md-4 col-form-label text-md-right">{{ __('Cep ') }}</label>

                            <div class="col-md-6">
                                <input id="Cep" type="Cep" class="form-control{{ $errors->has('Cep') ? ' is-invalid' : '' }}" name="Cep" value="{{ old('Cep') }}" required>

                                @if ($errors->has('Cep'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Cep') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="Data_De_Nascimento" class="col-md-4 col-form- label 
                            text-md-right">{{__('Data_De_Nascimento')  }}</label>
                        

                            <div class="col-md-6">
                                <input id="Data_De_Nascimento" type="Data_De_Nascimento" class="forme-control{{$errors->has('Data_De_Nascimento') ? ' is-invalid' : '' }}"
                                name='Data_De_Nascimento' value="{{ old('DataDeNascimento') }}" required>

                                @if ($errors->has('Data_De _Nascimento'))
                                    <span class= "invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Data_De_Nascimento') }}</strong>
                                    </span>
                                @endif
                               </div>                               
                            </div>

                       
                                          <br/>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">                        
                                   <div class="form-group row mb-0">
                                      <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                           {{ __('Register') }}
                                    </button>
                                        </div>
                                    </div>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection