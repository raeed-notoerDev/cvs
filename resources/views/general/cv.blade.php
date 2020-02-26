@extends('layouts.general')

@section('content')
    <div class="container" dir="rtl">
        @include('pages.headerjobs')
        @for ($i=$cvs->count(); $i>0;$i--)
            <div class="row">
                @for ($col=0; $col<2;$col++,$i--)
                    @if(($cvs->count()-$i)!== $cvs->count())
                        <div class="col">
                            <div class="container  form-group">

                                <div class="border border-dark" style="padding: 19px">
                                    <div class="media">
                                        <img class="mr-3" src="/images/Avatar.png" style="height: 100px;width: 100px"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Media heading</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.
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
@endsection
