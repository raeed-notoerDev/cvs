@extends('layouts.general')

@section('content')
    <div class="container" dir="rtl">
        @include('pages.headerjobs')
        @for ($i=$specializations->count(); $i>0;$i--)
            <div class="row">
                @for ($col=0; $col<2;$col++,$i--)
                    @if(($specializations->count()-$i)!== $specializations->count())
                        <div class="col">
                            <div class="container  form-group">
                                <div class="border border-dark" style="padding:10px">
                                    <div class="media">
                                        <img class="mr-3" src="/images/Avatar.png" style="height: 100px;width: 100px"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">  {{$specializations[$specializations->count()-$i]->specialization_name}}</h5>

                                            {{$specializations[$specializations->count()-$i]->opportunity()->count()}}
                                            فرصة

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif
                @endfor
                @php
                    $i++;
                @endphp
            </div>
        @endfor
    </div>
{{--    <job></job>--}}
@endsection
