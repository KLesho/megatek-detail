<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/stylesESLBig.css') }}" rel="stylesheet">
    <title>ESLSmall</title>
</head>

<body>
    <h1>TEST</h1>
    <div> @foreach($details as $detail )
        <p>{{$detail->code}}</p>
        <a href="{{route('details.show',[$detail->code])}}">Code</a>
        @endforeach
    </div>
    <header>
        <div class="button-container">
            <button class="red-button">Refresh</button>
            <button class="red-button">Clear</button>
        </div>
    </header>
    
    <div class="content-container">
        <div class="column">
            <!-- Section 1 -->
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
            
            <!-- Section 2 -->
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
            
            <!-- Section 3 -->
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
            
            <!-- Section 4 -->
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
            
            <!-- Section 5 -->
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
        </div>
        
        <div class="column">
            <!-- Section 6 -->
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
            
            <!-- Section 7 -->
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
            
            <!-- Section 8 -->
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
            
            <!-- Section 9 -->
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
            
            <!-- Section 10 -->
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
        </div>
    </div>
</body>

</html>