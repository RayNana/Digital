<!doctype html>
<html lang="ja">
<head>
  <title>Demo Blog</title>
  <meta charset="UTF-8">
</head>
<body>
<h1>Demo Blog</h1>
@foreach ($posts as $post)
  <a href="{{ action('PostController@show', $post->id) }}">{{{ $post->title }}}</a> {{ $post->created_at }}<br />
@endforeach
</body>
</html>