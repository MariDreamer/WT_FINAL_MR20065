@extends('layouts.app')

@section('content')
<div class="global">
    <form method="POST" action="{{ route('savetopic') }}">
    @csrf
        <div class="form-group row">
            <label for="t_name" class="col-md-4 col-form-label text-md-right">{{ __('lang.addtopic') }}</label>

            <div class="col-md-6">
                <input id="t_name" type="text" class="form-control " name="t_name" required autofocus>

                @error('t_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">
            {{__('lang.addtopic')}}
        </button>
    </form>
</div>
@endsection