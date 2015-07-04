<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main_Title_of_the_document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        function check () {
            return confirm('Are you sure you want to delte this entry');
        }
    </script>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="main-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="{{ URL::to('/') }}" class="navbar-brand">Crud System</a>
        </div> <!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse">

            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/view') }}">View</a></li>
            </ul>
        </div> <!-- end collapse -->
    </div> <!-- end container -->
</nav>
<div class="jumbotron">
    <div class="container">
        <h1>Crud System :: VIEW</h1>
        <h3>Basic Crud System using Laravel 5</h3>
    </div> <!-- end container -->
</div> <!-- end jumbotron -->

<div class="container">

    {{ Session::get('message') }}

    <table class="table table-striped">
        <!--available -- table class =    .table-striped, .table-bordered, .table-hover, .table-condensed-->
        <!--available -- contextual tr class = active, success, warning, danger, info-->
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <th scope="row">{{ $student->id }}</th>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->email }}</td>
                <td><a href="{{URL::to('/edit/'.$student->id)}}">Edit</a> ! <a onclick="return check()" href="{{URL::to('/delete/'.$student->id)}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! str_replace('/?', '?', $students->render()) !!}


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>