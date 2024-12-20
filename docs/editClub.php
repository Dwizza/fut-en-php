<?php
ob_start();
include 'database.php';
?>

<?php include_once 'header.php';?>
<div  class="justify-center items-center">
    <div class="bg-white p-4 rounded-lg w-[500px] relative left-[600px] top-16">
        <form action="" method="POST" class="flex flex-col w-full gap-5 p-5 bg-white rounded-xl" >
        <?php
        $clubEdit = "SELECT * FROM club where id_club= " . $_GET['id'];
        $resultEdit = mysqli_query($conn, $clubEdit);
        $rowEdit = mysqli_fetch_assoc($resultEdit);
        ?>
        <label>Club<br><input type="text" value="<?= $rowEdit['club_name']?>" name="club_name" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
        </label>
        <label>Lien du photo<br><input type="text" name="photoUrl" value="<?= $rowEdit['photoClub']?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
        </label>
        <button class="px-4 py-2 text-white bg-green-500 rounded-xl hover:bg-green-800" name="UpdateClub">Update</button>
        </form>
    </div>
</div>
</body>
</html>

<?php
                if(isset($_POST['UpdateClub'])){
                    $club = $_POST['club_name'];
                    $photo = $_POST['photoUrl'];

                    $sql = "UPDATE club 
                    set club_name='$club',photoClub='$photo'
                    WHERE id_club=".$_GET['id'];

                        if (mysqli_query($conn, $sql)) {
                        } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        ob_clean();
                        header("location: club.php");
                }