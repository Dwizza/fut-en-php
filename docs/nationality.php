<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://kit.fontawesome.com/e9ee48a8e3.js" crossorigin="anonymous"></script>
    <title>Ajouter Country</title>
</head>
<body>
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
<div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center">
    <div class="bg-white p-4 rounded-lg w-[500px] relative left-[600px] top-16">
        <form action="" method="POST" class="flex flex-col w-full gap-5 p-5 bg-white rounded-xl" >
        <label>Nationality<br><input type="text" name="nation" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
        </label>
        <label>Lien du photo<br><input type="text" name="photoUrl" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
        </label>
        <button class="px-4 py-2 text-white bg-green-500 rounded-xl hover:bg-green-800" name="AddNation">Ajouter</button>
        </form>
        <button id="closeModalButton" class="absolute top-2 right-2 text-red-500 font-bold"><i class="fa-solid fa-circle-xmark"></i></button>
    </div>
</div>

<div class="ml-64 pt-10 flex flex-col gap-3">
    <button id="openButton" class="px-4 py-2 w-fit text-white bg-green-500 rounded-xl hover:bg-green-800">Ajouter</button>
    <table class="min-w-full table-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <thead class="bg-green-500 text-white">
        <tr >
            <th class="py-3 px-4 text-center">Id</th>
            <th class="py-3 px-2 text-center">Country</th>
            <th class="py-3 px-3 text-center">Url</th>      
            <th class="py-3 px-4 text-center">Edit</th>      
            <th class="py-3 px-4 text-center">Delete</th>      
        </tr>
        </thead>
        <tbody>
        <?php
            $nation = "SELECT * FROM nationality order by nationality_name ASC";
            $connect = mysqli_query($conn, $nation);
            while($rowAdd = mysqli_fetch_assoc($connect)){
                echo '<tr>';
                echo '<td class="text-center">'.$rowAdd['id_nationality'].'</td>';
                echo '<td class="text-center">'.$rowAdd['nationality_name'].'</td>';
                echo '<td class="flex justify-center"><img src="'.$rowAdd['photoNation'].'" class="w-16"></td>';
                echo '<td class="text-center"><a href="editnation.php?id='.$rowAdd['id_nationality'].'" class="text-green-500 "><i class="fa-solid fa-pen-to-square"></i></a></td>';
                echo '<td class="text-center"><a href="deletenation.php?id='.$rowAdd['id_nationality'].'" class="text-red-500"><i class="fa-solid fa-trash"></i></a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<script>
        
        const modal = document.getElementById("modal");
        const openButton = document.getElementById("openButton");
        const closeButton = document.getElementById("closeModalButton");

        openButton.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });

        
        closeButton.addEventListener("click", () => {
            modal.classList.add("hidden");
        });

        
        window.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.add("hidden");
            }
        });
    </script>
    <?php
    
    
    if(isset($_POST['AddNation'])){
        $nation_name = $_POST['nation'];
        $nation_photo = $_POST['photoUrl'];
        $stmt = $conn->prepare("INSERT INTO nationality (nationality_name, photoNation) VALUES (?,?)");
        $stmt->bind_param("ss", $nation_name, $nation_photo);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        exit;
    }
    ?>