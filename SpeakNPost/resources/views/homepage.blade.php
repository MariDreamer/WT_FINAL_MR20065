<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>

<style>
    html 
    {
        
        display: block;
        font-family: 'Nunito', sans-serif;
        background: rgba(60, 40, 72, 1);

    }
    body
    {
        display: block;
        max-width: 60em;
        padding: 0 20px;
        margin: 6em auto 19em;
        background: rgba(37, 14, 76, 1);
        position: relative;
        box-shadow: 0 0.3em 1em #000;
    }
    
</style>
</head>
<body>
@csrf
@if (count($voiceposts)==0)
<p color='red'> There are no posts on Speak'N'Post yet! Be first to voicepost!</p>
@else
<p color='red'> Boo normal!</p>
<div >
    @foreach ( $voiceposts as $voicepost )
        <p>
            <a>{{ $voicepost->date }} {{ $voicepost->t_name }} </a>
        </p>
    @endforeach
</div>
@endif

</body>
</html>