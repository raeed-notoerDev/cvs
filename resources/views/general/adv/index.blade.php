@extends('layouts.general')
@section('content')
        <adv-index></adv-index>
{{--        <router-view></router-view>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            @foreach($ads as $ad)--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="row">--}}
{{--                        {{$ad->name}}--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}

{{--                           {{($ad->properties)}}--}}
{{--                        --}}{{--                        @foreach(unserialize($ad->properties) as $a)--}}
{{--                        --}}{{--                            {{$a}}--}}
{{--                        --}}{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection


