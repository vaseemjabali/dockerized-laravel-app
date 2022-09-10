@extends('main')

@section('content')

            <div class="map_container clearfix">

                <div class="column x3">

                    <div class="column x5">

                        <ul class="list">
                            <li class="header visited">Visited</li>
                            @foreach ($visited as $place)
                                <li>{{ $place->name }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="column x5">

                        <ul class="list">
                            <li class="header togo">To Go</li>
                            @foreach ($togo as $newplace)
                                <li>{{ $newplace->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="column x7">
                    <div id="map" class="map"></div>
                </div>

                <div class="clearfix"></div>
            </div>

@endsection

@section('footer')
    <div class="footer">
        <p>
            <a href="https://github.com/do-community/travellist-laravel-demo/tree/tutorial-04" target="_blank" title="Source Code on Github">Travellist Laravel Demo</a>
        </p>
    </div>
@endsection
