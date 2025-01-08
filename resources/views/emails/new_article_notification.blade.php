<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Article Published</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->subtitle }}</p>
    <p>{{ $article->summary }}</p>
    {{-- <a href="{{ url('/articles/' . $article->slug) }}">Read More</a> --}}
</body>
</html>
