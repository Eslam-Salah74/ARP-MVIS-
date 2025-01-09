<h1>New Article Published!</h1>
<p>Title: {{ $article->title }}</p>
<p>{{ $article->excerpt }}</p>
<a href="{{ url('/articles/' . $article->id) }}">Read more</a>
