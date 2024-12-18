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
    <title>Edit Player</title>
</head>
<body class="w-full">
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
                        <a href="index2.php">
                            <p>Nationality</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="w-1/2 ml-64">
        <form action="" method="POST" >
            <div class="grid grid-cols-2 gap-3 w-full ">
                    <?php
                    $playerAdd = "SELECT * FROM player where id=" . $_GET['id'];
                    $resultAdd = mysqli_query($conn, $playerAdd);
                    $rowEdit = mysqli_fetch_assoc($resultAdd);
                    
                    ?>

                    <label for="">Name<input  type="text" name="name" value="<?php echo $rowEdit['name'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Photo<input  type="file" name="photo" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Position
                    <select name="position" id="" value="" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="<?= $rowEdit['position']?>"><?= $rowEdit['position']?></option>
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
                    <label for="">Nationality <select name="nations" value="<?php echo $rowEdit['id_nationality'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">choisir le nationality</option>
                        <?php
                        $nationality = "SELECT * FROM nationality";
                        $resultNationality = mysqli_query($conn, $nationality);
                        while($rowNationality = mysqli_fetch_assoc($resultNationality)){
                            echo '<option value="'.$rowNationality['id_nationality'].'">'.$rowNationality['nationality_name'].'</option>';
                            if($rowNationality['id_nationality'] == $rowEdit['id_nationality']){
                                echo '<option selected value="'.$rowNationality['id_nationality'].'">'.$rowNationality['nationality_name'].'</option>';
                            }
                        }
                        ?> 
                    </select>
                    </label>
                    <label for="">Club<select name="club" value="<?php echo $rowEdit['id_club'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">Choisir le club</option>
                        <?php
                        $club = "SELECT * FROM club";
                        $resultClub = mysqli_query($conn, $club);

                        while($rowClub = mysqli_fetch_assoc($resultClub)){
                            echo '<option value="'.$rowClub['id_club'].'">'.$rowClub['club_name'].'</option>';
                            if($rowClub['id_club'] == $rowEdit['id_club']){
                                echo '<option selected value="'.$rowClub['id_club'].'">'.$rowClub['club_name'].'</option>';
                            }
                        }
                        
                        ?> 
                        </select>
                    </label>
                    <label for="">Rating<input  type="number" name="rating" value="<?php echo $rowEdit['Rating'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Pace<input  type="number" name="pace" value="<?php echo $rowEdit['pace'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Shooting<input  type="number" name="shooting" value="<?php echo $rowEdit['shooting'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Passing<input  type="number" name="passing" value="<?php echo $rowEdit['passing'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Dribbling<input  type="number" name="dribbling" value="<?php echo $rowEdit['dribbling'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Defending<input  type="number" name="defending" value="<?php echo $rowEdit['defending'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Physical<input  type="number" name="physical" value="<?php echo $rowEdit['physical'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <button type="submit" name="edit" class="px-4 py-2 text-white w-1/2  bg-green-500 rounded-xl hover:bg-green-800 col-span-2 justify-self-center">Update</button>
                </div>
                <?php
                if(isset($_POST['edit'])){
                    $name = $_POST['name'];
                    // echo $name;
                    $photo = $_POST['photo'];
                    $position = $_POST['position'];
                    $rating = $_POST['rating'];
                    $pace = $_POST['pace'];
                    $shooting = $_POST['shooting'];
                    $passing = $_POST['passing'];
                    $dribbling = $_POST['dribbling'];
                    $defending = $_POST['defending'];
                    $physical = $_POST['physical'];
                    $nationality = $_POST['nations'];
                    $club = $_POST['club'];

                    $sql = "UPDATE player 
                    set name='$name',photo='$photo',position='$position',Rating='$rating',pace='$pace',shooting='$shooting',passing='$passing',dribbling='$dribbling',defending='$defending',physical='$physical'
                    WHERE id=".$_GET['id'];


                        if (mysqli_query($conn, $sql)) {
                        } else {
                        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        ob_clean();
                        header("location: index2.php");
                }
                
                ?>
                

        </form>
    </div>
</body>
</html>