<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>CRUD ORM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    table {
      border-collapse: separate !important;
      border-spacing: 0 !important;
    }
    table tr th,
    table tr td {
      border-right: 1px solid #dee2e6 !important;
      border-bottom: 1px solid #dee2e6 !important;
    }
    table tr th:first-child,
    table tr td:first-child {
      border-left: 1px solid #dee2e6 !important;
    }
    table tr th {
      border-top: 1px solid #dee2e6 !important;
    }

    /* top-left border-radius */
    table tr:first-child th:first-child {
      border-top-left-radius: 0.25rem !important;
    }

    /* top-right border-radius */
    table tr:first-child th:last-child {
      border-top-right-radius: 0.25rem !important;
    }

    /* bottom-left border-radius */
    table tr:last-child td:first-child {
      border-bottom-left-radius: 0.25rem !important;
    }

    /* bottom-right border-radius */
    table tr:last-child td:last-child {
      border-bottom-right-radius: 0.25rem !important;
    }
    
    
  </style>
</head>

<body class="container d-flex flex-column h-100">


  <!-- Begin page content -->
  <main class="flex-shrink-0">
    <div class="container">
      @yield('content')
    </div>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  @stack('scripts')
</body>

</html>