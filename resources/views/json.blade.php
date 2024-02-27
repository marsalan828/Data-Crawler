<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSON Output</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="json-container">
        <p><span class="json-key">"p":</span>{!! $formattedJson['p'] !!}</p>
        <p><span class="json-key">"img":</span>{!! $formattedJson['img'] !!}</p>
        <p><span class="json-key">"h1":</span>{!! $formattedJson['h1'] !!}</p>
    </div>
    
</body>
</html>