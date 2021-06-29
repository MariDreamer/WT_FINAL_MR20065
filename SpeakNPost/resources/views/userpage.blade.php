@extends('layouts.app')

@section('content')
<div class="global">
  <div class="profile" style="height: 20vh; padding: 10px; border-bottom-style: solid; border-bottom-width: 5px; border-color: rgba(3, 2, 13, 1);">
    <div class="grid-container" style="display: grid; grid-template-areas: 'menu main main right-top' 'menu footer footer right' 'menu footer footer right-bottom'; grid-gap: 10px; padding: 10px;">
      <div class="item1" style="grid-area: menu; vertical-align: middle;">
        <img src="{{ url('/storage/pic/'.$userpage->photo) }}" alt="profile img" width="70"/>
      </div>
      <div class="item2" style="grid-area: main;">{{ DB::table('users')->where('id', $userpage->username)->first()->username }}</div>
      <div class="item3" style="grid-area: footer;">{{ $userpage->description }}</div>
      @if ($userpage->username==Auth::user()->id)  
      <div class="item4" style="grid-area: right-top;">
        <form method="POST" action="{{ route('edit') }}">
            @csrf
            <a href="{{ route('edit') }}"onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('lang.edit') }}</a>
        </form>
      </div>
      @else
      <div class="item4" style="grid-area: right-top;">{{ __('lang.subscribe') }}</div>
      @endif
      <div class="item5" style="grid-area: right;">{{ __('lang.search') }}</div>
      <div class="item6" style="grid-area: right-bottom;">{{ __('lang.post') }}</div>
    </div>
  </div>
  <div class="posts">
      @if (count($voiceposts)==0)
      <div class="nada" style=" vertical-align: middle;"> <span class="boo" style="display: inline-block; vertical-align: middle; margin-top: 30vh;">{{ __('lang.span1')}}</span></div>
      @else
      <p> Boo normal!</p>
      <div >
          @foreach ( $voiceposts as $voicepost )
              <p>
                  <a>{{ $voicepost->date }} {{ $voicepost->url_vp }} {{ $voicepost->t_name }} </a>
              </p>
          @endforeach
      </div>
      @endif
  </div>
</div>
@endsection
