@extends('layout/_main')
@section('content')
    <div class="full-height">
        <div class="episodes uk-text-center">
            <ul class="uk-grid" data-uk-grid-margin>
                <li class="uk-animation-fade uk-width-small-1-3 uk-width-medium-1-3 uk-width-large-1-5">
                    <a href="{!! route('episodes') !!}"
                       class="uk-button uk-button-danger uk-width-1-1 season-button uk-margin-small-bottom">All
                        Episodes</a>
                    <a href="{!! route('season',1) !!}"
                       class="uk-button uk-button-danger uk-width-1-1 season-button uk-margin-small-bottom">Season 1</a>
                    <a href="{!! route('season',2) !!}"
                       class="uk-button uk-button-danger uk-width-1-1 season-button uk-margin-small-bottom">Season 2</a>
                </li>
                @foreach($episodes as $episode)
                    <li class="uk-animation-fade uk-width-small-1-3 uk-width-medium-1-3 uk-width-large-1-5">
                        <div class="episode-item" data-episode-link="">
                            @if($episode['imageMedium'] )
                                <img src="{!! $episode['imageMedium'] !!}" alt="">
                            @else
                                <img src="{!! asset('images/episodes/fsociety.png') !!}" alt="">
                            @endif
                            <p>
                                {!! $episode['name'] !!}
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function () {
            $('.episode-item').each(function (index, value) {
                var self = $(this);
                var link = self.data('episode-link');
                self.click(function () {
                    window.location = link;
                });
                self.hover(function () {
                    self.children().toggleClass('hovered')
                }, function () {
                    self.children().toggleClass('hovered')
                });
            });
        });
    </script>
@endsection