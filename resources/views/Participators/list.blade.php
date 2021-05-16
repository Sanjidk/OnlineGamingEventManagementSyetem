
<!doctype html>
<html lang="en">
<head>

    <a class="nav-link js-scroll-trigger" href="{{route('frontend.master')}}">
        <button type="submit" class="btn btn-danger">
            GO TO DASHBOARD
        </button>
    </a>


    <title>Participators</title>
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
                    <h2 style="color: #01156b" class="masthead-heading">PARTICIPATOR LIST</h2>

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
                            <th scope="col">Event Name</th>
                            <th scope="col">Participator Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($list as $key=>$data )
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$data->type}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->payment}}</td>
                                <td>

                                    <img style="width: 200px;" src="{{url('/photo/food/',$data->photo)}}" alt="Image not found">

                                </td>

                                <td>
                                    <a class="btn btn-primary" href="{{route('participator.editlist',$data->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('participator.delete',$data->id)}}">Delete</a>
                                    <a class="btn btn-warning" href="{{route('participator.updatelist',$data->id)}}">Update</a>
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
