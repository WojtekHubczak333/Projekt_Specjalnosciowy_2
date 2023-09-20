<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>

    <!-- Stylizacja tabeli -->
    <style>
        /* Stylizacja tabeli */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        /* Stylizacja nagłówków tabeli */
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        /* Dodatkowe style dla wierszy i komórek tabeli (opcjonalnie) */
        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #e0e0e0;
        }
    </style>

</head>
<body>
<header>
    <!-- Wstaw tutaj nagłówek strony -->
</header>

<nav>
    <!-- Wstaw tutaj nawigację, jeśli jest potrzebna -->
</nav>

<main>
    @yield('content') <!-- Ta sekcja będzie wypełniona zawartością widoków -->
</main>

<footer>
    <!-- Wstaw tutaj stopkę strony -->
</footer>
</body>
</html>
