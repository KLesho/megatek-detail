<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TEST</h1>
    <div> @foreach($details as $detail )
        <p>{{$detail->code}}</p>
        <a href="{{route('details.show',[$detail->code])}}">Code</a>
        @endforeach
    </div>
</body>

</html>