@extends('master')
@section('page')
<head>
    <title>Marmalade Suite 3</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
            <div class="title">Welcome to Marmalade Suite {{ config('msuite.app.version') }}</div>
            <button onclick="document.location='{{ route('login') }}'" style="cursor: pointer; border-radius: 10px; background-color: #ddd; padding: 15px; border: 0; width: 490px; margin-top: 30px; font-size: 13pt;">Login</button>
        </div>
    </div>
    
    @if (Modules::has(App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module\ShopModule::class))
    <div style="position: fixed; bottom: 0px; right: 0px; padding-right: 20px;">
        <h4>Or go to the <a href="{{ route('shopHome') }}">Shop</a></h4>
    </div>
    @endif
    
    
</body>
@endsection