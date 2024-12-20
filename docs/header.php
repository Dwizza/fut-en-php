<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://kit.fontawesome.com/e9ee48a8e3.js" crossorigin="anonymous"></script>
</head>
<body class="h-screen font-ubuntu-light">
    <header class="grid grid-cols-2 h-16 bg-white">
        <div class="col-span-2 flex justify-between items-center border-b-2">
            <h1 class=" text-lg md:text-2xl font-bold text-white pl-5">Dashboard</h1>
            <a href="index.php" class="text-decoration-none pr-5"> 
                <button class="bg-zinc-800 text-white py-2 px-4 rounded-xl hover:bg-zinc-500">User</button>
            </a>
        </div>
    </header>

    <aside class="fixed top-0 h-screen w-56 sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <p class="d-block text-[#FFFFFF]">Dashboard</p>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="hover:bg-zinc-600 px-4 py-2">
                        <a href="index2.php">
                            <p>Player setting</p>
                        </a>
                    </li>
                    <li class="hover:bg-zinc-600 px-4 py-2">
                        <a href="nationality.php">
                            <p>Nationality</p>
                        </a>
                    </li>
                    <li class="hover:bg-zinc-600 px-4 py-2">
                        <a href="club.php">
                            <p>Club</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>