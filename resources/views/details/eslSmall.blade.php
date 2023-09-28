<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/stylesESLSmall.css') }}" rel="stylesheet">
    <title>ESLSmall</title>
</head>

<body>

<div class="form-container">
    <form method="POST" action="{{route('smallEslSearch')}}">
        @csrf
        @method('POST')
    
        <div class="kodi">
            <label>Kodi</label>
            <input type="text" id="refresh-text" name="code" placeholder=""  value="" />
        </div>
        <div>
            <input type="submit" value="Refresh" />
        </div>
    </form>
</div>
@if (empty($details) || $details === null)

@else
    
    <header>
        <div class="button-container">
       
        <form method="POST" action="{{route('smallEslSearch')}}">
        @csrf
        @method('POST')
        <input type="submit"  class="red-button" value="Clear" />
        </form>
        </div>
    </header>
    
    <div class="content-container">
        <div class="column-left">
            <!-- Section 1 -->
            <div> @foreach($details as $detail)

            <section class="section">
                <div class="section-title">
                    {{$detail->name}}
                </div>
                <div class="sub-section">
                    <div class="sub-section-right">
                        {{$detail->codeName}}
                    </div>
                    <div class="sub-section-left">
                        Kodi: {{$detail->code}}
                    </div>
                </div>
                <div class="description">
                    {{$detail->description}}
                </div>
            </section>
            @endforeach

            </div>
    </div>

    @endif

   
</body>

</html>