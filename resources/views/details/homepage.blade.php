<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/stylesHomePage.css') }}" rel="stylesheet">
    <title>Homepage with Tabs</title>
</head>
<body>
    <h1>Homepage</h1>
    <div class="tabs">
        <div class="a3">
            <a href="{{route('details.show',[$detail->code])}}">A3</a>
            <p>{{$detail->code}}</p>
        </div>
            <div class="a5">
            <a href="{{route('detailsComparison',[$detail->code])}}">A5</a>
        <p>{{$detail->code}}</p>
        </div>
            <div class="eslSmall">
            <a href="{{route('smallEsl',[$detail->code])}}">ESL e vogel</a>
        <p>{{$detail->code}}</p>
        </div>
            <div class="eslBig">
            <a href="{{route('bigEsl',[$detail->code])}}">ESL e madhe</a>
        <p>{{$detail->code}}</p>
        </div>
    </div>
    <script src="{{ asset('js/homePageScript.js') }}"></script>
</body>
</html>
