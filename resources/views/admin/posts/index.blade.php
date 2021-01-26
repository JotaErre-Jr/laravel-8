<<<<<<< HEAD
<h1>index de post</h1>
@foreach($posts as $post)

<p>{{$post->title}}</p><br>
<p>{{$post->content}}</p><br>

@endforeach
=======
<<<<<<< HEAD
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
=======
<h1>index de post</h1>

@foreach($posts as $post) 
    <p>{{$post->title}}</p></br>
    <p>{{$post->content}}</p>
@endforeach
>>>>>>> e103c649e25e78f6e15689bb92394d283f892e49
>>>>>>> c0c7634342d4c6d7042d161d3554e2c78896f14f
