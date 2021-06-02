
<!doctype html>
<html lang="en">
<head>



    <title>Participators</title>
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
                    <h2 style="color: #01156b" class="masthead-heading">BLOG LIST</h2>

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
                            <th scope="col">User Name</th>
                            <th scope="col">Game Name</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($list as $key=>$data )
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$data->name}}</td>
                                <td>{{$data->game}}</td>
                                <td>{{$data->message}}</td>

                                <td>
                                    <a class="btn btn-danger" href="{{route('blog.delete',$data->id)}}">Delete</a>
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
