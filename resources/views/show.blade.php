<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Post</title>
</head>
<body>
	@foreach ($posts as $post)
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->body }}</p>
		{{-- only visible for that user who created this post --}}
		@can('update', $post)
			<span><button>Update Post</button></span>
		@endcan
	@endforeach


</body>
</html>