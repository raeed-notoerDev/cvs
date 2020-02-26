<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!--style-->
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}


</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="header">
        @include('pages.header')
        </div>
        <div class="body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="owl-one owl-carousel ">
                            <div>
                                <img src="{{asset('images/NOTOER.png')}}" style="width: 190px;height: 190px;">
                            </div>
                            <div><img src="{{asset('images/Avatar.png')}}" style="width: 190px;height: 190px;"></div>
                            <div> He Content</div>
                            <div> She Content</div>
                            <div> Her Content</div>
                            <div> Him Content</div>
                            <div> Our Content</div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="owl-two owl-carousel" id="www">
                            <div>
                                <img src="{{asset('images/NOTOER.png')}}" style="width: 190px;height: 190px;">
                            </div>
                            <div><img src="{{asset('images/Avatar.png')}}" style="width: 190px;height: 190px;"></div>
                            <div> He Conten1t</div>
                            <div> She Content1</div>
                            <div> Her Content1</div>
                            <div> Him Content1</div>
                            <div> Our Content1</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="title ">
                            <p class="text-right">
                            <h1>فرص العمل والتوظيف دليلك القوي في تركيا لتجد عمل.</h1>
                            </p>
                            <hr>
                            <p class="description text-left">
                            <h4>Left aligned text on all viewport sizes.</h4>
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <p class="text-right">
                                    آلاف الفرص من العمل بانتظارك
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="text-right">
                                    كل ماعليك أن تفعله هو أن تسجل دخول وتقوم بالبحث عن الفرص المناسبة
                                    <br>
                                    ..... التسجيل عليك والتوظيف علينا
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col " style="height: 100px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="card form-group">

                            <div class="card-body">
                                <h1>
                                    <p class="text-center">


                                        أضف فرص العمل أو قم بالتقدم على فرصة
                                    </p></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col " style="height: 100px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" style="height: 150px">
                            <div class="card-header">
                                <p class="text-center">
                                    <h3>
                                    فرص العمل

                                </h3>

                                </p>
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="height: 150px">
                            <div class="card-header">
                                <p class="text-center">
                                <h3>
                                    فرص العمل

                                </h3>

                                </p>
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" >
                            <div class="card-header">
                                <p class="text-center">
                                <h3>
                                    الأفراد المسجلين

                                </h3>

                                </p>
                            </div>
                            <div class="card-body">
                                <img src="{{asset('images/Avatar.png')}}" style="width: 190px;height: 190px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }} "></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}
{{--<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/myjs.js') }}"></script>
</body>
</html>
