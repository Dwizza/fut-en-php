<?php
ob_start();
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <title>Document</title>
</head>
<body>
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
<div  class="justify-center items-center">
    <div class="bg-white p-4 rounded-lg w-[500px] relative left-[600px] top-16">
        <form action="" method="POST" class="flex flex-col w-full gap-5 p-5 bg-white rounded-xl" >
        <?php
        $nationalityEdit = "SELECT * FROM nationality where id_nationality= " . $_GET['id'];
        $resultEdit = mysqli_query($conn, $nationalityEdit);
        $rowEdit = mysqli_fetch_assoc($resultEdit);
        ?>
        <label>Club<br><input type="text" value="<?= $rowEdit['nationality_name']?>" name="nationality_name" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
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