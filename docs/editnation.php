<?php
ob_start();
include 'database.php';
?>

<?php include_once 'header.php';?>
<div  class="justify-center items-center">
    <div class="bg-white p-4 rounded-lg w-[500px] relative left-[600px] top-16">
        <form action="" method="POST" class="flex flex-col w-full gap-5 p-5 bg-white rounded-xl" >
        <?php
        $nationalityEdit = "SELECT * FROM nationality where id_nationality= " . $_GET['id'];
        $resultEdit = mysqli_query($conn, $nationalityEdit);
        $rowEdit = mysqli_fetch_assoc($resultEdit);
        ?>
        <label>Nationality<br><input type="text" value="<?= $rowEdit['nationality_name']?>" name="nationality_name" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
        </label>
        <label>Lien du photo<br><input type="text" name="photoUrl" value="<?= $rowEdit['photoNation']?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
        </label>
        <button class="px-4 py-2 text-white bg-green-500 rounded-xl hover:bg-green-800" name="Updatenationality">Update</button>
        </form>
    </div>
</div>
</body>
</html>

<?php
                if(isset($_POST['Updatenationality'])){
                    $nationality = $_POST['nationality_name'];
                    $photo = $_POST['photoUrl'];

                    $sql = "UPDATE nationality 
                    set nationality_name='$nationality',photoNation='$photo'
                    WHERE id_nationality=".$_GET['id'];

                        if (mysqli_query($conn, $sql)) {
                        } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        ob_clean();
                        header("location: nationality.php");
                }