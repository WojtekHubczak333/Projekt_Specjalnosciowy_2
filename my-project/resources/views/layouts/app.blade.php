<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
   
    <!-- Dodanie Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<header>
    <!-- Wstaw tutaj nagłówek strony -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-5">
    @yield('content') <!-- Ta sekcja będzie wypełniona zawartością widoków -->
</main>

<footer class="bg-light text-center py-3">
    <!-- Wstaw tutaj stopkę strony -->
    &copy; 2023
</footer>

<!-- Dodanie Bootstrap JavaScript (opcjonalnie) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
