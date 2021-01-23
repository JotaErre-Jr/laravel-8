<h1>index de post</h1>

@foreach($posts as $post) 
    <p>{{$post->title}}</p></br>
    <p>{{$post->content}}</p>
@endforeach