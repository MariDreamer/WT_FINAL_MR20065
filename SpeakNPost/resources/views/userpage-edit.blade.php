@extends('layouts.app')

@section('content')
<div class="global">
  <div class="profile" style="height: 40vh; padding: 10px; border-bottom-style: solid; border-bottom-width: 5px; border-color: rgba(3, 2, 13, 1);">
    <form method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
    @csrf
      <div class="grid-container" style="display: grid; grid-template-areas: 'menu main main right-top' 'menu2 footer footer right' 'menu3 footer footer right-bottom'; grid-gap: 10px; padding: 10px;">
        <div class="item1" style="grid-area: menu; vertical-align: middle;">
          <img src="{{ url('/storage/pic/'.$userpage->photo) }}" alt="profile img" width="70"/>
        </div>
        <div class="item11" style="grid-area: menu2; vertical-align: middle;">
        <label for="photo">{{__('lang.cnpp')}}</label>
        </div>
        <div class="item111" style="grid-area: menu3; vertical-align: middle;">
        <input class="form-control-file" type="file" name="photo" id="photo">
        </div>
        <div class="item2" style="grid-area: main;">{{ DB::table('users')->where('id', $userpage->username)->first()->username }}</div>
        <div class="item3" style="grid-area: footer;"><input type="text" name="description" id="description" value="{{ $userpage->description }}" style="width: 100%; height: 40px;"></div>
        <div class="item5" style="grid-area: right;"><button type="submit" class="btn btn-primary">{{__('lang.upd')}}</button></div>
      </div>
    </form>
  </div>
</div>
@endsection
