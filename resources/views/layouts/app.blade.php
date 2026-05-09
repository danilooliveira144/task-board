<!DOCTYPE html>
<html lang="pt-BR">
        <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f4f4;
            padding: 40px;
            color: #222;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            border: 2px solid #333;
            padding: 30px;
        }

        h1 {
            margin-bottom: 25px;
            font-size: 32px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .project-name {
            border: 2px solid #333;
            padding: 12px;
            width: 250px;
            background: #fafafa;
        }

        .filter-box {
            width: 100%;
            padding: 14px;
            border: 2px solid #333;
            margin-bottom: 25px;
        }

        .task-list {
            border: 2px solid #333;
            min-height: 400px;
            padding: 20px;
        }

        .task-item {
            border: 2px solid #333;
            padding: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            gap: 15px;
        }    

        .task-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            border: 2px solid #333;
            background: #fff;
            padding: 10px 18px;
            cursor: pointer;
            text-decoration: none;
            color: #222;
            display: inline-block;
            transition: 0.2s;
        }

        .btn:hover {
            background: #e9e9e9;
        }

        .form-container {
            display: flex;
            justify-content: center;
        }

        .task-form {
            width: 320px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .input {
            width: 100%;
            padding: 12px;
            border: 2px solid #333;
        }

        textarea.input {
            resize: none;
            height: 180px;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .details-box {
            border: 2px solid #333;
            padding: 20px;
            min-height: 300px;
            margin: 20px 0;
            background: #fafafa;
        }

        .details-title {
            border: 2px solid #333;
            padding: 12px;
            text-align: center;
            margin-bottom: 20px;
            background: #fff;
        }

        .date-box {
            border: 2px solid #333;
            padding: 12px;
            text-align: center;
            margin-bottom: 20px;
            background: #fff;
        }

        .details-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .top-bar,
            .task-item,
            .form-actions,
            .details-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .project-name {
                width: 100%;
            }

            .task-actions {
                width: 100%;
                flex-direction: column;
            }

            .btn {
                text-align: center;
            }
        }
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>