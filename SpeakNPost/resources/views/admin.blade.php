@extends('layouts.app')

@section('content')
<div class="global">
  
  <div class="posts">
      @if (count($topics)==0)
      <div class="nada" style=" vertical-align: middle;"> <span class="boo" style="display: inline-block; vertical-align: middle; margin-top: 30vh;">{{ __('lang.notopics')}}</span></div>
      @else
      <!-- <p> Boo normal!</p> -->
      <div >
          @foreach ( $topics as $topic )
            <div class="profile" style="height: 20%; padding: 20px; text-align: left; border-bottom-style: solid; border-bottom-width: 5px; border-color: rgba(3, 2, 13, 1);">
                <p style="display: inline">
                    <a style="display: inline">{{ $topic->t_name }}</a>
                    <form method="POST" action="{{ route('deltopic') }}" style="display: inline; float: right;">
                        @csrf
                        <input type="text" name="id" id="id" value="{{ $topic->id }}" style=" visibility: hidden;">
                        <button type="submit" class="btn btn-primary">
                            {{__('lang.del')}}
                        </button>
                    </form>
                </p>

                <div style="padding-left: 40px;">
                    @if (DB::table('subtopics')->where('t_id', $topic->id)->first()==NULL)
                    <div class="nada" style=" vertical-align: middle;"> <span class="boo" style="display: inline-block; vertical-align: middle;">{{ __('lang.nostopics')}}</span></div>
                    @else
                    <!-- <p> Boo normal!</p> -->
                    <!-- <li> -->
                    <div >
                        @foreach ( $subtopics as $subtopic )
                            @if ($subtopic->t_id==$topic->id)
                            <div class="profile" style="height: 20%; padding: 8px; margin-right: 250px; text-align: left; border-bottom-style: solid; border-bottom-width: 2px; border-color: rgba(3, 2, 13, 1);">
                                <p style="display: inline">
                                    <a style="display: inline">{{ $subtopic->st_name }}</a>
                                    <form method="POST" action="{{ route('deltopic') }}" style="display: inline; float: right;">
                                        @csrf
                                        <input type="text" name="id" id="id" value="{{ $subtopic->id }}" style=" visibility: hidden;">

                                        <button type="submit" class="btn btn-primary">
                                            {{__('lang.del')}}
                                        </button>
                                    </form>
                                </p>
                            </div>
                            @endif
                            
                        @endforeach
                    </div>
                    @endif
                    <div>
                            <form method="POST" action="{{ route('addstopic') }}">
                                @csrf
                                <input type="text" name="t_id" id="t_id" value="{{ $topic->id }}" style=" visibility: hidden;">

                                <button type="submit" class="btn btn-primary">
                                    {{__('lang.addstopic')}}
                                </button>
                            </form>
                    </div>
                    <!-- </li> -->
                </div>





            </div>
              
          @endforeach
      </div>
      @endif
      <div>
            <form method="POST" action="{{ route('addtopic') }}">
                @csrf

                <button type="submit" class="btn btn-primary">
                    {{__('lang.addtopic')}}
                </button>
            </form>
      </div>
  </div>
</div>
@endsection
