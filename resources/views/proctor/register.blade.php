@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('PLACE REGISTER YOUR DORMITARY MATERIAL') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('student/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="block_no" class="col-md-4 col-formlabel text-md-right">{{ __('block_no') }}</label>
 <div class="col-md-6">
 <input id="block_no" type="text" class="formcontrol @error('block_no') isinvalid @enderror" name="block_no" value="{{ old('block_no') }}" required autocomplete="
block_no" autofocus>
 @error('block_no')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="dorm_no" class="col-md-4 col-formlabel text-md-right">{{ __('dorm_no') }}</label>
 <div class="col-md-6">
 <input id="dorm_no" type="text" class="formcontrol @error('dorm_no') isinvalid @enderror" name="dorm_no" value="{{ old('dorm_no') }}" required autocomplete
="dorm_no">
 @error('dorm_no')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="dormitary_material" class="col-md-4 col-formlabel text-md-right">{{ __('dormitary_material') }}</label>
 <div class="col-md-6">
 <input id="dormitary_material" type="text" class="formcontrol @error('dormitary_material') isinvalid @enderror" name="dormitary_material" value="{{ old('dormitary_material') }}" required autocomplete
="dormitary_material">
 @error('dormitary_material')
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
// @csrf
 <div class="form-group row">
 <label for="materialid" class="col-md-4 col-formlabel text-md-right">{{ __('materialid') }}</label>
 <div class="col-md-6">
 <input id="materialid" type="text" class="formcontrol @error('materialid') isinvalid @enderror" name="materialid" value="{{ old('materialid') }}" required autocomplete="
materialid" autofocus>
 @error('block_no')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf

@endsection
