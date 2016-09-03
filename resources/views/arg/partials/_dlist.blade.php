<?php
$result = isset($result) ? $result : $arg;
?>
<dl class="uk-description-list-horizontal">
    <dt>Created By</dt>
    <dd>{{ $result->creator->name }}</dd>
    <dt>Last Modified</dt>
    <dd>{{ $result->updated_at->diffForHumans() }}</dd>
    <dt>Description</dt>
    <dd> {{ $result->description }}</dd>
    @if($result->connections()->count())
        <dt>Seasons</dt>
        <dd>
            @foreach($result->inSeasons() as $connection)
                <a href="{{route('season', $connection->episode->season_id)}}" title="{{$connection->episode->season->tagline}}">{{$connection->episode->season_id}}</a>
            @endforeach
        </dd>
        <dt>Episodes</dt>
        <dd>
            @foreach($result->inEpisodes() as $connection)
                <a href="{{route('episode', $connection->episode->slug)}}" title="{{$connection->episode->name}}">
                    {{$connection->episode->number}}
                </a>
            @endforeach
        </dd>
    @endif
</dl>