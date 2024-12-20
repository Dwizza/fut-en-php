<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUT-UltimateTeam</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/css/tom-select.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/e9ee48a8e3.js" crossorigin="anonymous"></script>
    <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />


</head>

<body class="bg-black h-full font-ubuntu-light"
    style="background-image: url(../images/bg-stade.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">

    <header class="h-14 bg-gradient-to-b from-neutral-900 to-neutral-500 flex items-center justify-around">
        <h1 class="text-white text-lg md:text-2xl font-bold">FUT Ultimate Team</h1>
        <div>
          <a href="index2.php" class="text-decoration-none"> <button class="bg-zinc-800 text-white py-2 px-4 rounded-xl hover:bg-zinc-500">Admin</button></a>

        </div>
    </header>

<div class=" px-4 py-6">
    <div class="relative mt-5 h-[655px] max-h-screen w-full sm:w-[90%] md:w-[60%] m-auto terrain">
                <img src="../images/téléchargement.svg" alt="" class="object-cover w-full h-full [filter:drop-shadow(5px_0px_100px#000)]">
        <div class="absolute bottom-5 w-full h-full flex flex-col gap-1"> 
                
            <div class="flex justify-around">
                <div id="LW">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full"> <!--0-->
                        <div class="absolute w-[60%] top-8 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div> <!--1-->
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1"> <!--2-->
                            <p></p>
                            <p>LW</p>
                        </div>
                    </div>
                </div> 
                <div id="ST">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)"> 
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse " class=""></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>ST</p>
                        </div>
                        
                    </div>
                </div>
                <div id="RW">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>RW</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center gap-10">
                <div id="CAM">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CAM</p>
                        </div>
                    </div>
                </div>
                <div id="CDM"> 
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CDM</p>
                        </div>
                    </div>
                </div>
                <div id="CM"> 
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CM</p>
                        </div>
                    
                    </div>
                </div> 
            </div>

            <div class="flex justify-around">
                <div id="LB">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>LB</p>
                        </div>
                    </div>
                </div>
                <div id="CB1">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CB1</p>
                        </div>
                    </div>
                </div>
                <div id="CB2">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CB2</p>
                        </div>
                    </div>
                </div>
                <div id="RB">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>RB</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <div id="GK">
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer bottom-3 hover:[filter:drop-shadow(0px_0px_25px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>GK</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
</div>

    <!-- changement  -->

<!-- button up down  -->

<div class="relative group" id="up">
    <button 
    onclick="benchUp()"
        class=" fixed left-10 bottom-0 z-10 animate-bounce"
        onmouseover="document.getElementById('notification').classList.remove('hidden')" 
        onmouseout="document.getElementById('notification').classList.add('hidden')">
        <i class="fa-solid fa-circle-arrow-up text-white text-3xl"></i>
    </button>
    <div id="notification" class="hidden fixed bottom-12 left-2 bg-gray-800 text-white text-sm px-4 py-2 rounded shadow-lg">
        The bench
    </div>
</div>
<div class="relative group" id="down" style="display: none;">
    <button 
    onclick="benchDown()"
        class=" fixed left-10 bottom-0 z-10 animate-bounce"
        onmouseover="document.getElementById('notification').classList.remove('hidden')" 
        onmouseout="document.getElementById('notification').classList.add('hidden')">
        <i class="fa-solid fa-circle-arrow-down  text-white text-3xl"></i>
    </button>
</div>

<!-- card  -->


<!-- card end  -->
<div id="modal" class="fixed inset-0 bg-stone-950 bg-opacity-70 hidden justify-center items-center">
    <div class="bg-[#404040] px-6 py-3 flex flex-col w-[500px] gap-4 rounded-lg fixed left-[500px] top-[100px]" >
        <button id="closeButton" class="absolute top-1 right-2 text-red-500 font-bold"><i class="fa-solid fa-circle-xmark"></i></button>
        <div class="grid grid-cols-3 justify-items-center gap-2">
            <?php
            $playerAdd = "SELECT * FROM player 
                        NATURAL JOIN nationality 
                        NATURAL JOIN club;";
            $resultAdd = mysqli_query($conn, $playerAdd);
            $rowAdd = $resultAdd->fetch_all(1);

            for($i = 0; $i < count($rowAdd);$i++){
                echo "<div onclick=\"appendInStadium(event)\" class=\"relative hidden md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cardsFromDB\" onclick=\"cardPlayers(event)\">
                                <img src=\"../images/badge_gold.png\" alt=\"\" class=\"object-contain h-full w-full\">
                                <div class=\"absolute w-[60%] top-8 left-5\" ><img src=\"".$rowAdd[$i]['photo']."\" alt=\"\"></div>
                                <div class=\"flex flex-col items-center text-sm justify-center absolute top-5 left-1\">
                                    <p>".$rowAdd[$i]['Rating']."</p>
                                    <p>" .$rowAdd[$i]['position']."</p>
                                </div>
                                <div class=\" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0\" >
                                    <div class=\"text-center\"><p>".$rowAdd[$i]['name']."</p></div>
                                    <div class=\"flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]\">
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>PAC</p>
                                            <p>".$rowAdd[$i]['pace']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>SHO</p>
                                            <p>".$rowAdd[$i]['shooting']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>PAS</p>
                                            <p>".$rowAdd[$i]['passing']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>DRI</p>
                                            <p>".$rowAdd[$i]['dribbling']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>DEF</p>
                                            <p>".$rowAdd[$i]['defending']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>PHY</p>
                                            <p>".$rowAdd[$i]['physical']."</p>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"flex absolute gap-1 flex-col top-6 right-2\">
                                    <div class=\"\">
                                        <img src=\"".$rowAdd[$i]['photoNation']."\" alt=\"\" class=\"w-5\">
                                    </div>
                                    <div class=\"\">
                                        <img src=\"".$rowAdd[$i]['photoClub']."\" alt=\"\" class=\"w-5\">
                                    </div>
                                </div>
                            </div>";
            }
            $playerAdd = "SELECT * FROM GK 
                        NATURAL JOIN nationality 
                        NATURAL JOIN club;";
            $resultAdd = mysqli_query($conn, $playerAdd);
            $rowAdd = $resultAdd->fetch_all(1);

            for($i = 0; $i < count($rowAdd);$i++){
                echo "<div onclick=\"appendInStadium(event)\" class=\"relative hidden md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cardsFromDB\" onclick=\"cardPlayers(event)\">
                                <img src=\"../images/badge_gold.png\" alt=\"\" class=\"object-contain h-full w-full\">
                                <div class=\"absolute w-[60%] top-8 left-5\" ><img src=\"".$rowAdd[$i]['photo']."\" alt=\"\"></div>
                                <div class=\"flex flex-col items-center text-sm justify-center absolute top-5 left-1\">
                                    <p>".$rowAdd[$i]['rating']."</p>
                                    <p>" .$rowAdd[$i]['position']."</p>
                                </div>
                                <div class=\" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0\" >
                                    <div class=\"text-center\"><p>".$rowAdd[$i]['name']."</p></div>
                                    <div class=\"flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]\">
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>DIV</p>
                                            <p>".$rowAdd[$i]['diving']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>HDL</p>
                                            <p>".$rowAdd[$i]['handling']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>KIC</p>
                                            <p>".$rowAdd[$i]['kicking']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>REF</p>
                                            <p>".$rowAdd[$i]['reflexes']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>SPD</p>
                                            <p>".$rowAdd[$i]['speed']."</p>
                                        </div>
                                        <div class=\"flex flex-col items-center justify-center\">
                                            <p>POS</p>
                                            <p>".$rowAdd[$i]['positioning']."</p>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"flex absolute gap-1 flex-col top-6 right-2\">
                                    <div class=\"\">
                                        <img src=\"".$rowAdd[$i]['photoNation']."\" alt=\"\" class=\"w-5\">
                                    </div>
                                    <div class=\"\">
                                        <img src=\"".$rowAdd[$i]['photoClub']."\" alt=\"\" class=\"w-5\">
                                    </div>
                                </div>
                            </div>";
            }
            ?>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/js/tom-select.complete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js?v=1.2"></script>
</body>

</html>

