<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFrame Crawler</title>
</head>
<body>
    <iframe src="https://besthf.com/best/Furniture/Chairs" style="height: 500px; width:500px; "></iframe>
    {{-- <iframe src="https://blog.apify.com/" style="height: 500px; width:500px; "></iframe> --}}
    <form action="{{ route('crawl')}}" method="POST">
    @csrf
    <button type="submit">Crawl Data</button>
    </form>
</body>
</html>