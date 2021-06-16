
@extends('layouts.app')

@section('content')
<div class="this">
    @csrf
    @if (count($voiceposts)==0)
    <div class="nada" style="height: 100vh; vertical-align: middle;"> <span class="boo" style="display: inline-block; vertical-align: middle; margin-top: 50vh;">There are no posts on Speak'N'Post yet! Be first to voicepost!</span></div>
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
@endsection