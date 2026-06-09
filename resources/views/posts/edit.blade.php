<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Berita</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>

        <div class="mb-3">
            <label>Gambar Baru</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Isi Berita</label>
            <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
        </div>

        <div class="mb-3">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="{{ $post->author }}">
        </div>

        <div class="mb-3">
            <label>Tanggal Terbit</label>
            <input type="date" name="published_at" class="form-control" value="{{ $post->published_at }}">
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>