<!DOCTYPE html>
<html>
<head>

    <title>TechNow</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="/">
            TechNow
        </a>

        <a href="/posts" class="btn btn-light">
            Admin
        </a>

    </div>

</nav>

<div class="container mt-4">

    <div id="carouselExample" class="carousel slide mb-5">

        <div class="carousel-inner">

            @foreach($posts->take(3) as $key => $post)

            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

                <img src="{{ asset('storage/' . $post->image) }}"
                     class="d-block w-100"
                     style="height:500px; object-fit:cover;">

                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">

                    <h3>{{ $post->title }}</h3>

                    <p>
                        {{ $post->author }}
                    </p>

                </div>

            </div>

            @endforeach

        </div>

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>

        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>

        </button>

    </div>

    <h2 class="mb-4">
        Berita Terbaru
    </h2>

    <div class="row">

        @foreach($posts as $post)

        <div class="col-md-4 mb-4">

            <div class="card h-100">

                <img src="{{ asset('storage/' . $post->image) }}"
                     class="card-img-top"
                     style="height:250px; object-fit:cover;">

                <div class="card-body">

                    <a href="/berita/{{ $post->id }}"
                       style="text-decoration:none; color:black;">

                        <h5>
                            {{ $post->title }}
                        </h5>

                    </a>

                    <p>
                        {{ Str::limit($post->content, 100) }}
                    </p>

                </div>

                <div class="card-footer">

                    <small>
                        {{ $post->author }}
                    </small>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>