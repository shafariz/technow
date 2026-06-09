<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Tambah Berita</h2>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Isi Berita</label>
            <textarea name="content" class="form-control" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal Terbit</label>
            <input type="date" name="published_at" class="form-control">
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

</body>
</html>