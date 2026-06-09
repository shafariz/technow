<!DOCTYPE html>
<html>
<head>
    <title>Admin Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Data Berita</h2>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="btn btn-danger mb-3">
            Logout
        </button>
    </form>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">
        Tambah Berita
    </a>

    <form method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari berita...">
    </form>

    <table class="table table-bordered">

        <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Author</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        @foreach($posts as $post)

        <tr>

            <td>
                <img src="{{ asset('storage/' . $post->image) }}" width="100">
            </td>

            <td>{{ $post->title }}</td>

            <td>{{ $post->author }}</td>

            <td>{{ $post->published_at }}</td>

            <td>

                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>