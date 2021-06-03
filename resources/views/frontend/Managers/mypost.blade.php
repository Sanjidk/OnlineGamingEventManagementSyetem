@extends('frontend.Others.muster')
@section('content')


{{--<head>--}}
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Online Gaming Event Management System</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <style>.section {
            margin-top: 20px
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            margin: 0;
            padding: 0;
            -webkit-tap-highlight-color: transparent;
            zoom: 1
        }

        html {
            font-size: 16px;
            min-height: 100%
        }

        body {
            font: 75%/150% "Lato", Arial, Helvetica, sans-serif;
            background-color: #ffffff;
            color: #000000;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -ms-overflow-style: scrollbar;
        }



        .box-title {
            margin-bottom: 0;
            line-height: 1em
        }

        .box-title small {
            font-size: 10px;
            color: #838383;
            text-transform: uppercase;
            display: block;
            margin-top: 4px
        }

        button,
        input[type="button"].button,
        a.button {
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 0 15px;
            white-space: nowrap
        }

        button.btn-small,
        input[type="button"].button.btn-small,
        a.button.btn-small {
            height: 28px;
            padding: 0 24px;
            line-height: 28px;
            font-size: 0.9167em
        }

        a.button {
            display: inline-block;
            background: #0739cd;
            font-size: 0.8333em;
            line-height: 1.8333em;
            white-space: nowrap;
            text-align: center
        }

        button.yellow,
        a.button.yellow,
        input[type="button"].button.yellow {
            background: #f12f12
        }

        button.yellow:hover,
        a.button.yellow:hover,
        input[type="button"].button.yellow:hover {
            background: #f0715f
        }

        .price {
            color: #560000;
            font-size: 1.6667em;
            text-transform: uppercase;
            float: right;
            text-align: right;
            line-height: 1;
            display: block
        }


        .image-carousel.style2 .slides>li {
            margin-right: 30px
        }

        .image-box .box>.details,
        .image-box.box>.details {
            padding: 12px 15px
        }

        .listing-style1.hotel .action .button:last-child {
            float: right
        }

        .box {
            border: 1px solid #ff0303
        }


    </style>
{{--    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>--}}
{{--    <script type='text/javascript'></script>--}}
{{--</head>--}}
<body>
<div class="section">
    <div class="container">

        <div class="row justify-content-center">
                    <h2 class="text-dark">EVENT LIST</h2>
        </div>

        <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                <ul class="slides image-box hotel listing-style1" style="width: 1000%;">

                    @foreach($events as $data)


                        <li style="width: 270px; float: left; display: block;">
                        <article class="box">
                            <figure> <a href="#" class="hover-effect popup-gallery">
                                    <img width="270" height="160" alt="" src="{{url('/photo/banner/',$data->banner)}}" draggable="false">
                                </a> </figure>
                            <div class="details"> <span class="price"> {{$data->fee}} BDT</span>
                                <h4 class="box-title">{{$data->eventName}} </h4>
                                <br>
                                <div class="action">
                                    <a class="btn btn-primary" href="{{route('event.list',[$data->id])}}"> View Details</a>

                                    @if($data->id == auth()->user()->id)

                                        @if(auth()->user()->type == 'Manager')
                                            <a class="btn btn-danger" href="{{route('event.delete',$data->id)}}">Delete</a>
                                        @endif

                                    @endif


                                    @if(auth()->user()->type == 'Participator')
                                    <a class="btn btn-dark" href="{{route('payment.form',$data->id)}}">Join Event</a>
                                        @endif
                                </div>
                            </div>

                        </article>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</body>

@stop
