@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach($dados as $d => $dado)
            <div class="post-preview">
                <a href="{{ $d }}">
                    <h2 class="post-title">
                        {{ $dado['titulo'] }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $dado['subtitulo'] }}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">{{ $dado['user'] }}</a> on {{ strftime('%d %B, %Y', strtotime($dado['created_at'])) }}</p>
            </div>
            <hr>
        @endforeach
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Older Posts &rarr;</a>
            </li>
        </ul>
    </div>
</div>
@stop