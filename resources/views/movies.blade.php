<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>
<body>
  <div class="container">
      <h1 class="mt-4 mb-4">Movie List</h1>

      <div class="row">
          @foreach ($movies as $movie)
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{ $movie->title }}</h5>
                          <p class="card-text">
                              <strong>Original Title:</strong> {{ $movie->original_title }}<br>
                              <strong>Nationality:</strong> {{ $movie->nationality }}<br>
                              <strong>Date:</strong> {{ $movie->date }}<br>
                              <strong>Vote:</strong> {{ $movie->vote }}
                          </p>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>

</body>

</html>
