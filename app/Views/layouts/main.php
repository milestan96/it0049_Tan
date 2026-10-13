<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | Miles Tan TFA1</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="site-header">
        <nav class="nav" aria-label="Main navigation">
            <a class="brand" href="/"><span class="brand-mark">T</span> Tasks for Today</a>
            <div class="nav-links">
                <a href="/">Today</a>
                <a href="/tasks">Task List</a>
                <a href="/profile">Profile</a>
                <a href="/about">About</a>
                <a href="/customers">Customers</a>
                <a href="/users">Users</a>
            </div>
        </nav>
    </header>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="site-footer">
        <div class="site-footer-inner">
            <p>&copy; <?= date('Y') ?> Miles Tan</p>
            <p>A simple space for getting today done.</p>
        </div>
    </footer>
</body>
</html>
