<!DOCTYPE html>
<html>
<head>

    <title>{{ $post->title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <a href="/" class="btn btn-secondary mb-4">
        Kembali
    </a>

    <img src="{{ asset('storage/' . $post->image) }}"
         class="w-100 mb-4"
         style="height:500px; object-fit:cover;">

    <h1>
        {{ $post->title }}
    </h1>

    <p>
        <b>Author:</b> {{ $post->author }}
    </p>

    <p>
        <b>Tanggal:</b> {{ $post->published_at }}
    </p>

    <hr>

    <p style="font-size:18px;">
        {{ $post->content }}
    </p>

</div>

</body>
</html>