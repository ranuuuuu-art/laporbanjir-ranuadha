<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'LaporBanjir')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }

        header {
            background-color: #1976d2;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
        }

        nav {
            background-color: #1565c0;
            padding: 12px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .container {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #1976d2;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1565c0;
        }

        .laporan-card {
            background-color: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header>
        <h1>LaporBanjir</h1>
        <p>Sistem Pelaporan Banjir Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('laporan.form') }}">Form Laporan</a>
        <a href="{{ route('laporan.daftar') }}">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 LaporBanjir - BPBD Kabupaten Bandung</p>
    </footer>

</body>
</html>