<!DOCTYPE html>
<html lang="en">

     

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <title>Ticket</title>
</head>

<body>
<div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
<div class="form-container">
    <form method="POST" action="{{route('details.search')}}">
        @csrf
        @method('post')
    
        <div class="kodi">
            <label>Kodi</label>
            <input type="text" name="code" placeholder="" value="{{empty($detail) || $detail === null ? '' : $detail->code}}" />
        </div>

        <div>
            <input type="submit" value="Search" />
        </div>
    </form>
</div>

<!--<a href="{{ url('/comparison') }}" class="btn btn-xs btn-info pull-right">Edit</a>-->

@if (empty($detail) || $detail === null)
    Nuk u gjet asnje rezultat!

@else

    <div class="ticket">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('megatekLogo.png') }}" alt="Logo">
            </div>
            <div class="code-field">
                <span>Kodi:{{$detail->code}}</span>
            </div>
        </div>
        <div class="content">
            <h2 class="product-name">{{$detail->name}}</h2>
            <h3 class="product-subname">{{$detail->codeName}}</h2>
            <div class="product-info-image">
                <div class="product-info">
                    <p>Materiali i struktures: {{$detail->structureMaterial}}</p>
                    <p>Materiali veshes: {{$detail->clothMaterial}}</p>
                    <p>Ngjyra: {{$detail->color}}</p>
                    <p>Cilesia e sfungjerit: {{$detail->spongeQuality}}</p>
                    <p>Rezistenca ndaj ferkimit: {{$detail->resitance}}</p>
                    <p>Perfshihen jasteket: {{$detail->pillowsIncluded}}</p>
                    <p>Nevojitet montim: {{$detail->isAssemblyNeeded}} </p>
                    <p>Krahu majtas: {{$detail->leftSide}}</p>
                    <p>Permasat: {{$detail->size}} </p>
                </div>
                <div class="product-image">
                        <img src="{{ asset('divan.webp') }}" alt="Product Image">
                </div>
            </div>
        </div>
        <div class="description-section">
            <div class="description">
                <p>
                {{$detail->description}}
                </p>
                <!-- Add more description content as needed -->
            </div>
            <div class="qr-code">
                {{$detail->qrCode}}
            </div>
        </div>
        <div class="price-section">
            <p class="price-value">{{$detail->price}}</p>
        </div>
    </div>
@endif
</body>

</html>