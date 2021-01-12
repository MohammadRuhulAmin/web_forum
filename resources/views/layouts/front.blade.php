<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Forum</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/cerulean/bootstrap.min.css">

    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<body>

@include('layouts.partials.navbar')
@yield('banner')
<div class="container">
    <div class="row">

        <div class="row content-heading">
{{--            <div class="col-md-3"><h4>Category</h4></div>--}}
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4"><h4 class="main-content-heading"></h4>

                           <a href="{{route('thread.create')}}" class="btn btn-primary">Create Thread</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-md-3">
            <ul class="list-group">
                <a href="{{route('thread.index')}}" class="list-group-item">
                    <span class="badge">14</span>
                    All Thread

                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">23</span>
                    PHP

                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">23</span>
                    Python
                </a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="content-wrap well">
                @yield('content')
            </div>

        </div>


    </div>

</div>






<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
