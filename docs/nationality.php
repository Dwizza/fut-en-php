<?php
include 'database.php';
?>
<?php include_once 'header.php'; ?>
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
            <th class="py-3 text-center">Nombre du joueur</th>
            <th class="py-3 px-2 text-center">Country</th>
            <th class="py-3 px-3 text-center">Url</th>      
            <th class="py-3 px-4 text-center">Edit</th>      
            <th class="py-3 px-4 text-center">Delete</th>      
        </tr>
        </thead>
        <tbody>
        <?php
            $nation = "SELECT nationality.*,COUNT(player.id) total
                        FROM nationality 
                        LEFT JOIN player ON nationality.id_nationality=player.id_nationality
                        GROUP BY nationality.id_nationality
                        ORDER BY total DESC;";
            $connect = mysqli_query($conn, $nation);
            while($rowAdd = mysqli_fetch_assoc($connect)){
                echo '<tr class="bg-gray-200">';
                echo '<td class="text-center">'.$rowAdd['total'].'</td>';
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