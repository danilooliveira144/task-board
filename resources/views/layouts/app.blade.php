
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

    <style>
        body {
            background: #121212;
            color: #f1f1f1;
            min-height: 100vh;
        }

        .main-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 30px;
        }

        .dark-card {
            background: #1e1e1e;
            border: 1px solid #2f2f2f;
            border-radius: 16px;
            box-shadow: 0 0 10px rgba(13,110,253,.35);
        }

        .custom-input::placeholder {
            color: #aaa;
        }

        .task-card {
            background: #222;
            border: 1px solid #333;
            border-radius: 14px;
            transition: .2s;
            box-shadow: 0 4px 14px rgba(0,0,0,.35);
        }

        .task-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(0,0,0,.45);
        }

        .btn {
            border-radius: 10px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,.35);
        }

        .btn-primary {
            background: #0d6efd;
            border: none;
        }

        .btn-success {
            background: #198754;
            border: none;
        }

        .btn-danger {
            background: #dc3545;
            border: none;
        }

        .btn-warning {
            background: #ffc107;
            border: none;
            color: #000;
        }

        .btn-secondary {
            background: #495057;
            border: none;
        }

        .details-box {
            background: #252525;
            border-radius: 14px;
            padding: 25px;
            border: 1px solid #343434;
            box-shadow: 0 5px 18px rgba(0,0,0,.4);
        }
    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://tse1.mm.bing.net/th/id/OIP.FRr6BxL244MtvQqAVxMFZgHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Task Board
          </a>
        </div>
      </nav>
<div class="container main-container"> 
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>