@extends('layouts.app')

@section('content')
<div class="global">
    <form method="POST" action="{{ route('savestopic') }}">
    @csrf
        <div class="form-group row">
            <label for="st_name" class="col-md-4 col-form-label text-md-right">{{ __('lang.addstopic') }}</label>

            <div class="col-md-6">
                <input id="st_name" type="text" class="form-control " name="st_name" required autofocus>
                <input id="t_id" type="text" class="form-control " name="t_id" value="{{ $t_id }}" style=" visibility: hidden;">


                @error('st_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">
            {{__('lang.addstopic')}}
        </button>
    </form>
</div>
@endsection