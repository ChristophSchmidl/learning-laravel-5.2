<!doctype html>
<html lang="en" class="fuelux">
<head>
    <meta charset="utf-8">
    {{ Html::style('css/app.css') }}


    <title>Document</title>

</head>
<body>

@include ('articles._nav')

<div class="container">
    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{ Session::get('flash_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        </div>
    @endif

    @yield('content')
</div>

{{ Html::script('js/vendor.js') }}
{{ Html::script('js/app.js') }}

@yield('footer')
</body>
</html>