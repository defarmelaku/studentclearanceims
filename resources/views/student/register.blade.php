@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('PLACE REGISTER Student information') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('student/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="Fname" class="col-md-4 col-formlabel text-md-right">{{ __('Fname') }}</label>
 <div class="col-md-6">
 <input id="Fname" type="text" class="formcontrol @error('name') isinvalid @enderror" name="Fname" value="{{ old('Fname') }}" required autocomplete="
name" autofocus>
 @error('Fname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="Mname" class="col-md-4 col-formlabel text-md-right">{{ __('Mname') }}</label>
 <div class="col-md-6">uantity
 <input id="Mname" type="text" class="formcontrol @error('Mname') isinvalid @enderror" name="Mname" value="{{ old('Mname') }}" required autocomplete
="Mname">
 @error('Mname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Lname" class="col-md-4 col-formlabel text-md-right">{{ __('Lname') }}</label>
 <div class="col-md-6">
 <input id="Lname" type="text" class="formcontrol @error('Lname') isinvalid @enderror" name="Lname" value="{{ old('Lname') }}" required autocomplete
="Lname">
 @error('Lname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Email" class="col-md-4 col-formlabel text-md-right">{{ __('Email') }}</label>
 <div class="col-md-6">
 <input id="Email" type="text" class="formcontrol @error('Email') isinvalid @enderror" name="Email" value="{{ old('Email') }}" required autocomplete
="Email">
 @error('Email')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="department" class="col-md-4 col-formlabel text-md-right">{{ __('department') }}</label>
 <div class="col-md-6">
 <input id="department" type="text" class="formcontrol @error('Mname') isinvalid @enderror" name="department" value="{{ old('department') }}" required autocomplete
="Mname">
 @error('department')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="facaulity" class="col-md-4 col-formlabel text-md-right">{{ __('facaulity') }}</label>
 <div class="col-md-6">
 <input id="facaulity" type="text" class="formcontrol @error('Mname') isinvalid @enderror" name="facaulity" value="{{ old('facaulity') }}" required autocomplete
="Mname">
 @error('facaulity')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="classyear" class="col-md-4 col-formlabel text-md-right">{{ __('classyear') }}</label>
 <div class="col-md-6">
 <input id="classyear" type="text" class="formcontrol @error('Mname') isinvalid @enderror" name="classyear" value="{{ old('classyear') }}" required autocomplete
="Mname">
 @error('classyear')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Register') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection