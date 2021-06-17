@extends('layouts.app')

@section('content')
<div class="global">
<div class="profile" style="height: 40vh; padding: 10px; border-bottom-style: solid; border-color: rgba(3, 2, 13, 1);">
<div class="grid-container" style="display: grid; grid-template-areas: 'menu main main right-top' 'menu footer footer right' 'menu footer footer right-bottom'; grid-gap: 10px; padding: 10px;">
  <div class="item1" style="grid-area: menu;">photo
    <img src="{{ asset($userpage->photo) }}" alt="profile img"/>
  </div>
  <div class="item2" style="grid-area: main;">{{ DB::table('users')->where('id', $userpage->username)->first() }}</div>
  <div class="item3" style="grid-area: footer;">{{ $userpage->describtion }}</div>  
  <div class="item4" style="grid-area: right-top;">edit/subscribe</div>
  <div class="item5" style="grid-area: right;">search</div>
  <div class="item6" style="grid-area: right-bottom;">post</div>
</div>
</div>
<div class="posts">
    @if (count($voiceposts)==0)
    <div class="nada" style="height: 100vh; vertical-align: middle;"> <span class="boo" style="display: inline-block; vertical-align: middle; margin-top: 50vh;">{{ __('lang.span1')}}</span></div>
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
