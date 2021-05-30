
<!doctype html>
<html lang="en">


<head>

    <title>Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset("table")}}/css/style.css">

</head>
<body>
<section class="ftco-section">


    @if(Session()->has('message'))
        <div style="color:green" class="alert alert-success"> {{ Session()->get('message') }}</div>
    @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <button class="btn btn-outline-primary">
                    <h2 style="color: #01156b" class="masthead-heading">EVENT LIST</h2>

                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Manager Name</th>
                            <th scope="col">Manager Bkash Number</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Event Fee</th>
                            <th scope="col">Event Date</th>
                            <th scope="col">Registration Start</th>
                            <th scope="col">Registration End</th>

                        </tr>
                        </thead>

                        <tbody>



                        @foreach($list as $key=>$data )
                            <tr>
                                <th scope="row">{{$key+1}}</th>

                                <td>{{$data->managers}}</td>
                                <td>{{$data->bkash}}</td>
                                <td>{{$data->eventName}}</td>
                                <td>{{$data->fee}}</td>
                                <td>{{$data->eventDate}}</td>
                                <td>{{$data->startDate}}</td>
                                <td>{{$data->endDate}}</td>



                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset("table")}}/js/jquery.min.js"></script>
<script src="{{asset("table")}}/js/popper.js"></script>
<script src="{{asset("table")}}/js/bootstrap.min.js"></script>
<script src="{{asset("table")}}/js/main.js"></script>

</body>
</html>
