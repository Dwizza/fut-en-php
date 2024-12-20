<?php
include 'database.php';
    if(isset($_POST['add'])){
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
    // $diving = $_POST['diving'];
    // $handling = $_POST['handling'];
    // $kicking = $_POST['kicking'];
    // $reflexes = $_POST['reflexes'];
    // $speed = $_POST['speed'];
    // $positioning = $_POST['positioning'];
    $nationality = $_POST['nations'];
    $club = $_POST['club'];

    if($position != "GK"){
        echo "cccccccc";
        $sql = "INSERT INTO player (name, photo, position, Rating, pace, shooting, passing, dribbling, defending, physical, id_nationality, id_club)
            VALUES ('$name', '$photo', '$position', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical','$nationality','$club')";


if (mysqli_query($conn, $sql)) {
} else {
                echo "cccccccc";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }else{
            $sqli = "INSERT INTO GK (name, photo, position, rating, diving, handling, kicking, reflexes, speed, positioning, id_nationality, id_club) 
                    VALUES ('$name', '$photo', '$position', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical','$nationality','$club');";
                    
                    if (mysqli_query($conn, $sqli)) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
        }
    }
        // mysqli_close($conn);

?>

<?php include_once 'header.php'; ?>


    <div class="ml-64 pt-10 flex flex-col gap-3">

        <div>
            <button id="openButton" class="px-4 py-2 text-white bg-green-500 rounded-xl hover:bg-green-800">Ajouter</button>
        </div>
        

        <div class="flex flex-col gap-3 items-center">
            <h1 class="text-4xl">Players</h1>
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
                    <?php
                    $playerAdd = "SELECT * FROM player";
                    $resultAdd = mysqli_query($conn, $playerAdd);
                    while($rowAdd = mysqli_fetch_assoc($resultAdd)){
                        echo '<tr class="bg-gray-200 py-4 border-b-2 border-stone-950" >';
                        echo '<td class="text-center">'.$rowAdd['name'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['position'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['Rating'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['pace'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['shooting'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['passing'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['dribbling'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['defending'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['physical'].'</td>';
                        echo '<td class="text-center"><a href="edit.php?id='.$rowAdd['id'].'" class="text-green-500 "><i class="fa-solid fa-pen-to-square"></i></a></td>';
                        echo '<td class="text-center"><a href="delete.php?id='.$rowAdd['id'].'" class="text-red-500"><i class="fa-solid fa-trash"></i></a></td>';
                        echo '</tr>';
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <div class="border-b-4 border-black h-10"></div>
        <div class="flex flex-col items-center gap-3">
            <h1 class="text-4xl">Goal Keeper</h1>
            <table class="min-w-full table-auto bg-white shadow-lg rounded-lg overflow-hidden mb-10">
                <thead class="bg-green-500 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Position</th>
                        <th class="py-3 px-4 text-center">Rating</th>
                        <th class="py-3 px-4 text-center">diving</th>
                        <th class="py-3 px-4 text-center">handling</th>
                        <th class="py-3 px-4 text-center">kicking</th>
                        <th class="py-3 px-4 text-center">reflexes</th>
                        <th class="py-3 px-4 text-center">speed</th>
                        <th class="py-3 px-4 text-center">positioning</th>
                        <th class="py-3 px-4 text-center">Edit</th>
                        <th class="py-3 px-4 text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $playerAdd = "SELECT * FROM GK";
                    $resultAdd = mysqli_query($conn, $playerAdd);
                    while($rowAdd = mysqli_fetch_assoc($resultAdd)){
                        echo '<tr class="bg-gray-200 py-4 border-b-2 border-stone-950" >';
                        echo '<td class="text-center">'.$rowAdd['name'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['position'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['rating'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['diving'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['handling'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['kicking'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['reflexes'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['speed'].'</td>';
                        echo '<td class="text-center">'.$rowAdd['positioning'].'</td>';
                        echo '<td class="text-center"><a href="editGK.php?id='.$rowAdd['id'].'" class="text-green-500 "><i class="fa-solid fa-pen-to-square"></i></a></td>';
                        echo '<td class="text-center"><a href="deleteGK.php?id='.$rowAdd['id'].'" class="text-red-500"><i class="fa-solid fa-trash"></i></a></td>';
                        echo '</tr>';
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>


    <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-4 rounded-lg w-[500px] relative left-[600px] top-16">
            <h1 class="text-2xl font-bold">Ajouter un joueur</h1>
            <form class="flex flex-col justify-center items-center gap-5 mt-5" method="post">
                <div class="grid grid-cols-2 gap-3 w-full">
                    <label for="">Name<input required type="text" name="name" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Photo<input required type="url" name="photo" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Position
                    <select name="position" required id="" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">Choisir..</option>
                        <option value="ST">ST</option>
                        <option value="RW">RW</option>
                        <option value="LW">LW</option>
                        <option value="CAM">CAM</option>
                        <option value="CDM">CDM</option>
                        <option value="CM">CM</option>
                        <option value="RB">RB</option>
                        <option value="LB">LB</option>
                        <option value="CB1">CB1</option>
                        <option value="CB2">CB2</option>
                        <option value="GK">GK</option>
                    </select></label>
                    <label for="">Nationality <select required name="nations" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">choisir le nationality</option>
                        <?php
                        $nationality = "SELECT * FROM nationality";
                        $resultNationality = mysqli_query($conn, $nationality);
                        while($rowNationality = mysqli_fetch_assoc($resultNationality)){
                            echo '<option value="'.$rowNationality['id_nationality'].'">'.$rowNationality['nationality_name'].'</option>';
                        }
                        ?>
                    </select>
                    </label>
                    <label for="">Club<select required name="club" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">Choisir le club</option>
                        <?php
                        $club = "SELECT * FROM club";
                        $resultClub = mysqli_query($conn, $club);
                        while($rowClub = mysqli_fetch_assoc($resultClub)){
                            echo '<option value="'.$rowClub['id_club'].'">'.$rowClub['club_name'].'</option>';
                        }
                        ?> 
                        </select>
                    </label>
                    <label for="">Rating<input min="30" max="100" required type="number" name="rating" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Pace<input min="30" max="100" required type="number" name="pace" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Shooting<input min="30" max="100" required type="number" name="shooting" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Passing<input min="30" max="100" required type="number" name="passing" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Dribbling<input min="30" max="100" required type="number" name="dribbling" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Defending<input min="30" max="100" required type="number" name="defending" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Physical<input min="30" max="100" required type="number" name="physical" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                </div>
                <button type="submit" name="add" class="px-4 py-2 text-white bg-green-500 rounded-xl hover:bg-green-800">Ajouter</button>
            </form>
            <button id="closeModalButton" class="absolute top-2 right-2 text-red-500 font-bold"><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
    </div>


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

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>