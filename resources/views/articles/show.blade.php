@extends('layout')

@section('content')


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->title}}</h2>
			    <p>{{ $article->body }}</p>
                <p>
                    @foreach($article->tags as $tag)
                        <a href="/articles?tag={{$tag->name}}">{{ $tag->name }}</a>
                    @endforeach
                </p>
		</div>
	</div>
</div>


@endsection
