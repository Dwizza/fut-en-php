<?php 
ob_start();
include 'database.php';
?>

<?php include_once 'header.php';?>
    <div class="w-1/2 ml-64">
        <form action="" method="POST" >
            <div class="grid grid-cols-2 gap-3 w-full ">
                    <?php
                    $playerAdd = "SELECT * FROM GK where id=" . $_GET['id'];
                    $resultAdd = mysqli_query($conn, $playerAdd);
                    $rowEdit = mysqli_fetch_assoc($resultAdd);
                    
                    ?>

                    <label for="">Name<input  type="text" name="name" value="<?php echo $rowEdit['name'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Photo<input  type="url" name="photo" value="<?= $rowEdit['photo']?>" required class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">Position
                    <select name="position" id="" required value="" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="<?= $rowEdit['position']?>"><?= $rowEdit['position']?></option>
                    </select></label>
                    <label for="">Nationality <select required name="nations" value="<?php echo $rowEdit['id_nationality'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">choisir le nationality</option>
                        <?php
                        $nationality = "SELECT * FROM nationality";
                        $resultNationality = mysqli_query($conn, $nationality);
                        while($rowNationality = mysqli_fetch_assoc($resultNationality)){
                            if($rowNationality['id_nationality'] != $rowEdit['id_nationality']){
                                echo '<option value="'.$rowNationality['id_nationality'].'">'.$rowNationality['nationality_name'].'</option>';
                            }else{
                                echo '<option selected value="'.$rowNationality['id_nationality'].'">'.$rowNationality['nationality_name'].'</option>';
                            }
                        }
                        ?> 
                    </select>
                    </label>
                    <label for="">Club<select required name="club" value="<?php echo $rowEdit['id_club'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full">
                        <option value="">Choisir le club</option>
                        <?php
                        $club = "SELECT * FROM club";
                        $resultClub = mysqli_query($conn, $club);

                        while($rowClub = mysqli_fetch_assoc($resultClub)){
                            if($rowClub['id_club'] != $rowEdit['id_club']){
                                echo '<option value="'.$rowClub['id_club'].'">'.$rowClub['club_name'].'</option>';
                            }else{
                                echo '<option selected value="'.$rowClub['id_club'].'">'.$rowClub['club_name'].'</option>';
                            }
                        }
                        
                        ?> 
                        </select>
                    </label>
                    <label for="">Rating<input min="30" max="100" required type="number" name="rating" value="<?php echo $rowEdit['rating'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">diving<input min="30" max="100" required type="number" name="diving" value="<?php echo $rowEdit['diving'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">handling<input min="30" max="100" required type="number" name="handling" value="<?php echo $rowEdit['handling'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">kicking<input min="30" max="100" required type="number" name="kicking" value="<?php echo $rowEdit['kicking'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">reflexes<input min="30" max="100" required type="number" name="reflexes" value="<?php echo $rowEdit['reflexes'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">speed<input min="30" max="100" required type="number" name="speed" value="<?php echo $rowEdit['speed'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <label for="">positioning<input min="30" max="100" required type="number" name="positioning" value="<?php echo $rowEdit['positioning'] ?>" class="focus:border-b-green-500 border-b-2 outline-none text-black w-full"></label>
                    <button type="submit" name="edit" class="px-4 py-2 text-white w-1/2  bg-green-500 rounded-xl hover:bg-green-800 col-span-2 justify-self-center">Update</button>
                </div>
                <?php
                if(isset($_POST['edit'])){
                    $name = $_POST['name'];
                    $photo = $_POST['photo'];
                    $position = $_POST['position'];
                    $rating = $_POST['rating'];
                    $diving = $_POST['diving'];
                    $handling = $_POST['handling'];
                    $kicking = $_POST['kicking'];
                    $reflexes = $_POST['reflexes'];
                    $speed = $_POST['speed'];
                    $positioning = $_POST['positioning'];
                    $nationality = $_POST['nations'];
                    $club = $_POST['club'];

                    $sql = "UPDATE GK 
                    set name='$name',photo='$photo',position='$position',rating='$rating',diving='$diving',handling='$handling',kicking='$kicking',reflexes='$reflexes',speed='$speed',positioning='$positioning',id_nationality='$nationality',id_club='$club'
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