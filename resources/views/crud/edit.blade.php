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
        <h1>Crud System :: EDIT</h1>
        <h3>Basic Crud System using Laravel 5</h3>
    </div> <!-- end container -->
</div> <!-- end jumbotron -->

<div class="container">

    {!! Form::open(array('url' => 'update-student')) !!}
    <div class="form-group">
        <label for="first_name">First Name</label>
         <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $student->first_name }}">
         <input type="hidden" name="id" class="form-control" id="first_name" value="{{ $student->id }}">
    </div>
    <div class="form-group">
        <label for="last_name">last Name</label>
        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $student->last_name }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" id="email" value="{{ $student->email }}">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" name="address" id="" cols="30" rows="10">{{ $student->address }}</textarea>
    </div>

    <button type="submit" name="" class="btn btn-default">Submit</button>

    {!!  Form::close() !!}
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>