
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




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <button class="btn btn-outline-primary">
                    <h2 style="color: #01156b" class="masthead-heading">MANAGER EVENT & PAYMENT REQUEST LIST</h2>

                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>Sl</th>
                            <th>Event Manager</th>
                            <th>Event Name</th>
                            <th>Manager's Bkash Number</th>
                            <th>Transaction ID</th>
                            <th>Event Fee</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($events as $key=>$data )
                            <tr>
                                <th scope="row">{{$key+1}}</th>

                                <td>{{$data->managers}}</td>
                                <td>{{$data->eventName}}</td>
                                <td>{{$data->bkash}}</td>
                                <td>{{$data->transac_id}}</td>
                                <td>{{$data->fee}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>


                                    <a href="" type="button" class="btn btn-success waves-effect">
                                        <i class="material-icons"> approve</i>

                                    </a>

                                    <a href="" type="button" class="btn btn-danger waves-effect">
                                        <i class="material-icons"> reject</i>

                                    </a>


                                </td>

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
