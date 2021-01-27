<h1>index de post</h1>
@foreach($posts as $post)

<p>{{$post->title}}</p><br>
<p>{{$post->content}}</p><br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá mundo</h1>
    <?php
        echo "olá mundo em php!";
    ?>
</body>
</html>
<h1>index de post</h1>

@foreach($posts as $post) 
    <p>{{$post->title}}</p></br>
    <p>{{$post->content}}</p>
@endforeach

echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";