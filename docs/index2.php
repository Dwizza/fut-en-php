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
                        <a href="#">
                            <p>Player setting</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

  
    <div class="pl-72 pt-10 flex flex-col gap-3">
        <div>
          
            <button id="openModalButton" class="px-4 py-2 text-white bg-green-500 rounded-xl hover:bg-green-800">Ajouter</button>
        </div>

      
        <div>
            <table class="min-w-full table-auto bg-white shadow-lg rounded-lg overflow-hidden">
                <thead class="bg-green-500 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Position</th>
                        <th class="py-3 px-4 text-center">Rating</th>
                        <th class="py-3 px-4 text-center">Pace</th>
                        <th class="py-3 px-4 text-center">Shooting</th>
                        <th class="py-3 px-4 text-center">Passing</th>
                        <th class="py-3 px-4 text-center">Dribbling</th>
                        <th class="py-3 px-4 text-center">Defending</th>
                        <th class="py-3 px-4 text-center">Physical</th>
                        <th class="py-3 px-4 text-center">Edit</th>
                        <th class="py-3 px-4 text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                </tbody>
            </table>
        </div>
    </div>


    <div id="modal" class="fixed inset-0  bg-gray-900 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-4 rounded-lg w-96 relative left-[700px] top-16">
            <h1 class="text-2xl font-bold">Ajouter un joueur</h1>
            <form class="flex flex-col justify-center items-center gap-5 mt-5" method="post">
                <div class="grid grid-cols-2 gap-3 w-full">
                    <label for="">Name<input type="text" name="name" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Photo<input type="url" name="photo" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Position
                    <select name="position" id="" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">Choisir..</option>
                        <option value="ST">ST</option>
                        <option value="RW">RW</option>
                        <option value="LW">LW</option>
                        <option value="CAM">CAM</option>
                        <option value="CM">CM</option>
                        <option value="CDM">CDM</option>
                        <option value="RB">RB</option>
                        <option value="LB">LB</option>
                        <option value="CB1">CB1</option>
                        <option value="CB2">CB2</option>
                        <option value="GK">GK</option>
                    </select></label>
                    <label for="">Nationality <datalist>

                    </datalist></label>
                    <label for="">Club<input type="text" name="club" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Rating<input type="number" name="rating" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Pace<input type="number" name="pace" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Shooting<input type="number" name="shooting" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Passing<input type="number" name="passing" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Dribbling<input type="number" name="dribbling" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Defending<input type="number" name="defending" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Physical<input type="number" name="physical" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                </div>
                <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded-xl hover:bg-green-800">Ajouter</button>
            </form>
            <button id="closeModalButton" class="absolute top-2 right-2 text-red-500 font-bold"><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
    </div>

    <script>
        
        const modal = document.getElementById("modal");
        const openModalButton = document.getElementById("openModalButton");
        const closeModalButton = document.getElementById("closeModalButton");

        
        openModalButton.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });

        
        closeModalButton.addEventListener("click", () => {
            modal.classList.add("hidden");
        });

        
        window.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.add("hidden");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname = "fut_champions_ultimate_team";

$conn = mysqli_connect('localhost', 'root', '','fut_champions_ultimate_team');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $position = $_POST['position'];
    $rating = $_POST['rating'];
    $pace = $_POST['pace'];
    $shooting = $_POST['shooting'];
    $passing = $_POST['passing'];
    $dribbling = $_POST['dribbling'];
    $defending = $_POST['defending'];
    $physical = $_POST['physical'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO player (name, photo, position, Rating, pace, shooting, passing, dribbling, defending, physical)
            VALUES ('$name', '$photo', '$position', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical')";


        if (mysqli_query($conn, $sql)) {
            header("Location: " . $_SERVER['PHP_SELF']); // Redirection vers la même page
        exit();
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


mysqli_close($conn);


?>