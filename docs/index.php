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

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full"> <!--0-->
                        <div class="absolute w-[60%] top-8 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div> <!--1-->
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1"> <!--2-->
                            <p></p>
                            <p>LW</p>
                        </div>
                        
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>
                    

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)"> 
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse " class=""></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>ST</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                           
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>RW</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="flex justify-center gap-10">
                    
                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CM</p>
                        </div>
                        <div class=" flex flex-col  absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CM</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CM</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    <div class="flex absolute gap-1 flex-col top-6 right-2"> <!--4-->
                        <div class="">
                            <img  alt="" class="w-5">
                        </div>
                        <div class="">
                            <img src="" alt="" class="w-5">
                        </div>
                    </div>
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-around">

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>LB</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CB</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>CB</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>RB</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0" style="display: none;">
                            <div class="text-center"><p></p></div>
                            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SHO</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PAS</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DRI</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>DEF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>PHY</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        

                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5" > <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
                            </div>
                        </div>

                    </div>
                    
                </div>
                
                <div class="flex justify-center">

                    <div class="relative md:w-28 w-24 h-[9.7rem] cursor-pointer bottom-3 hover:[filter:drop-shadow(0px_0px_25px#F7E7C3)] cards" onclick="cardPlayers(event)">
                        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
                        <div class="absolute w-[60%] top-8 left-5"><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
                        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
                            <p></p>
                            <p>GK</p>
                        </div>
                        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-5 -left-0 " style="display: none;">
                            <div class="text-center "><p></p></div>
                            <div class=" flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                                <div class="flex flex-col items-center justify-center">
                                    <p>DIV</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>HAN</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>KIC</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>REF</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>SPD</p>
                                    <p></p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p>POS</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2 absolute left-7 -top-3 md:left-9 md:-top-5"> <!--5-->
                           
                            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                                <i class="fa-solid fa-trash" data-info="action-icon"></i>
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

<!-- form changement  -->

<div id="form2" class="m-5 md:w-[35%] w-[90%] absolute -top-[1000px] ease-in-out duration-300 left-[40%]">
    <form action="" id="myForm1"
        class="grid grid-cols-1 md:grid-cols-2  bg-neutral-600 gap-4 p-4 rounded-xl drop-shadow-2xl shadow-neutral-950">
        <div ><i class="fa-solid fa-circle-xmark text-white cursor-pointer" onclick="fermer()"></i></div>
        <p class="col-span-2 text-center text-emerald-50 font-semibold">Ajouter un changement</p>
        <label class="w-full text-white">
            Name<br>
            <input type="text" placeholder="name" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required>
        </label>
        <label class="w-full text-white">Photo
        <select id="select-player1" class="w-full rounded-lg  bg-[#333533]" placeholder="Pick the player image..."></select>
        </label>
        <label for="" class="w-full text-white">Nation
            <select id="select-nation1" class="w-full rounded-lg  bg-[#333533]" placeholder="Pick the nation..." ></select>
        </label>
        <label class="w-full text-white">Team<br><select id="select-team1" class="w-full rounded-lg bg-[#333533]" placeholder="Pick the team..." ></select></label>
        <label class="w-full text-white">Position<br><select id="position" class="w-full rounded-lg bg-[#333533] py-2" placeholder="Pick the position..." >
            <option value="vide">Position</option>
            <option value="ST">ST</option>
            <option value="RW">RW</option>
            <option value="LW">LW</option>
            <option value="CM">CM</option>
            <option value="RB">RB</option>
            <option value="CB">CB</option>
            <option value="LB">LB</option>
            <option value="GK">GK</option>
        </select></label>
        <label class="w-full text-white">Rating<br><input min="30" max="100" placeholder="30-100" type="number" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required></label>
        <label class="w-full text-white">Pace<br><input min="30" max="100" placeholder="30-100" type="number" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required></label>
        <label class="w-full text-white">Shooting<br><input min="30" max="100" placeholder="30-100" type="number" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required></label>
        <label class="w-full text-white">Passing<br><input min="30" max="100" placeholder="30-100" type="number" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required></label>
        <label class="w-full text-white">Dribbling<br><input min="30" max="100" placeholder="30-100" type="number" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required></label>
        <label class="w-full text-white">Defending<br><input min="30" max="100" placeholder="30-100" type="number" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required></label>
        <label class="w-full text-white">Physical<br><input min="30" max="100" placeholder="30-100" type="number" class="input1 w-full rounded-lg px-2 py-2 bg-[#333533]" required></label>
        <button
        data-twe-ripple-init
        data-twe-ripple-color="dark"
        type="button" onclick="putChangement(event)"
            class="px-5 py-2 bg-[#f5cb5c] rounded-xl text-black col-span-2 text-center">ADD</button>
    </form>
</div>


<!-- card  -->


<div class="flex flex-wrap overflow-y-scroll scroll-smooth shadow-zinc-900 items-center gap-5 w-[25%] h-[80%] ease-in-out duration-500 text-center fixed left-2 -bottom-[800px] bg-[#404040] rounded-xl" id="changement" >
    
    <p class="text-white col-span-2 text-center py-5">Changement</p>

    <div draggable="true" class="relative md:w-28 w-24 h-[9.7rem] hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cursor-pointer cards" onclick="cardPlayer(event)" >
        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
        <div class="absolute w-[60%] md:top-8 md:left-6 top-7 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
            <p></p>
            <p></p>
        </div>
        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-3 -left-0 " style="display: none;" >
            <div class="text-center"><p></p></div>
            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                <div class="flex flex-col items-center justify-center">
                    <p>PAC</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>SHO</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PAS</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DRI</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DEF</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PHY</p>
                    <p></p>
                </div>
            </div>
           
        </div>
        <div class="flex absolute flex-col top-6 right-2 gap-1">
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
        </div>
        <div class="flex gap-2 absolute left-[35px] -top-5" > <!--5-->
            <div class="cursor-pointer text-teal-300"  onclick="editC()">
                <i class="fa-solid fa-pen-to-square" ></i>
            </div>
            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                <i class="fa-solid fa-trash" data-info="action-icon"></i>
            </div>
        </div>
    </div>

    <div draggable="true" class="relative md:w-28 w-24 h-[9.7rem] hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cursor-pointer cards" onclick="cardPlayer(event)">
        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
        <div class="absolute w-[60%] md:top-8 md:left-6 top-7 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
        <div class="flex flex-col items-center text-sm justify-center absolute top-4 left-1">
            <p></p>
            <p></p>
        </div>
        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-3 -left-0 "  style="display: none;" >
            <div class="text-center"><p></p></div>
            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                <div class="flex flex-col items-center justify-center">
                    <p>PAC</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>SHO</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PAS</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DRI</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DEF</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PHY</p>
                    <p></p>
                </div>
            </div>
           
        </div>
        <div class="flex absolute flex-col gap-1 top-6 right-2">
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
        </div>
        <div class="flex gap-2 absolute left-[35px] -top-5" > <!--5-->
            <div class="cursor-pointer text-teal-300"  onclick="editC()">
                <i class="fa-solid fa-pen-to-square" ></i>
            </div>
            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                <i class="fa-solid fa-trash" data-info="action-icon"></i>
            </div>
        </div>
    </div>

    <div draggable="true" class="relative md:w-28 w-24 h-[9.7rem] hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cursor-pointer cards" onclick="cardPlayer(event)">
        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
        <div class="absolute w-[60%] md:top-8 md:left-6 top-7 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
            <p></p>
            <p></p>
        </div>
        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-3 -left-0 " style="display: none;" >
            <div class="text-center"><p></p></div>
            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                <div class="flex flex-col items-center justify-center">
                    <p>PAC</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>SHO</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PAS</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DRI</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DEF</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PHY</p>
                    <p></p>
                </div>
            </div>
           
        </div>
        <div class="flex absolute flex-col top-6 right-2 gap-1">
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
        </div>
        <div class="flex gap-2 absolute left-[35px] -top-5" > <!--5-->
            <div class="cursor-pointer text-teal-300"  onclick="editC()">
                <i class="fa-solid fa-pen-to-square" ></i>
            </div>
            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                <i class="fa-solid fa-trash" data-info="action-icon"></i>
            </div>
        </div>
    </div>

    <div draggable="true" class="relative md:w-28 w-24 h-[9.7rem] hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cursor-pointer cards" onclick="cardPlayer(event)">
        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
        <div class="absolute w-[60%] md:top-8 md:left-6 top-7 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
            <p></p>
            <p></p>
        </div>
        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-3 -left-0 " style="display: none;" >
            <div class="text-center"><p></p></div>
            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                <div class="flex flex-col items-center justify-center">
                    <p>PAC</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>SHO</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PAS</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DRI</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DEF</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PHY</p>
                    <p></p>
                </div>
            </div>
           
        </div>
        <div class="flex absolute flex-col top-6 right-2 gap-1">
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
        </div>
        <div class="flex gap-2 absolute left-[35px] -top-5" > <!--5-->
            <div class="cursor-pointer text-teal-300"  onclick="editC()">
                <i class="fa-solid fa-pen-to-square" ></i>
            </div>
            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                <i class="fa-solid fa-trash" data-info="action-icon"></i>
            </div>
        </div>
    </div>

    <div draggable="true" class="relative md:w-28 w-24 h-[9.7rem] hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cursor-pointer cards" onclick="cardPlayer(event)">
        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
        <div class="absolute w-[60%] md:top-8 md:left-6 top-7 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
            <p></p>
            <p></p>
        </div>
        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-3 -left-0 " style="display: none;" >
            <div class="text-center"><p></p></div>
            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                <div class="flex flex-col items-center justify-center">
                    <p>PAC</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>SHO</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PAS</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DRI</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DEF</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PHY</p>
                    <p></p>
                </div>
            </div>
           
        </div>
        <div class="flex absolute flex-col top-6 right-2 gap-1">
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
        </div>
        <div class="flex gap-2 absolute left-[35px] -top-5" > <!--5-->
            <div class="cursor-pointer text-teal-300"  onclick="editC()">
                <i class="fa-solid fa-pen-to-square" ></i>
            </div>
            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                <i class="fa-solid fa-trash" data-info="action-icon"></i>
            </div>
        </div>
    </div>

    <div draggable="true" class="relative md:w-28 w-24 h-[9.7rem] hover:[filter:drop-shadow(0px_0px_30px#F7E7C3)] cursor-pointer cards" onclick="cardPlayer(event)">
        <img src="../images/badge_gold.png" alt="" class="object-contain h-full w-full ">
        <div class="absolute w-[60%] md:top-8 md:left-6 top-7 left-5" ><img src="../assets/players/Untitled-1.png" alt="" class=" animate-pulse "></div>
        <div class="flex flex-col items-center text-sm justify-center absolute top-5 left-1">
            <p></p>
            <p></p>
        </div>
        <div class=" flex flex-col absolute md:bottom-3 md:-left-0 bottom-3 -left-0 " style="display: none;" >
            <div class="text-center"><p></p></div>
            <div class="flex gap-1 justify-center items-center w-24 text-[0.4em] md:w-28 md:text-[0.5em]">
                <div class="flex flex-col items-center justify-center">
                    <p>PAC</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>SHO</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PAS</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DRI</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>DEF</p>
                    <p></p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p>PHY</p>
                    <p></p>
                </div>
            </div>
           
        </div>
        <div class="flex absolute flex-col top-6 right-2 gap-1">
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
            <div class="">
                <img src="" alt="" class="w-5">
            </div>
        </div>
        <div class="flex gap-2 absolute left-[35px] -top-5" > <!--5-->
            <div class="cursor-pointer text-teal-300"  onclick="editC()">
                <i class="fa-solid fa-pen-to-square" ></i>
            </div>
            <div class="cursor-pointer text-red-600" data-info="action-btn" onclick="delet(event)">
                <i class="fa-solid fa-trash" data-info="action-icon"></i>
            </div>
        </div>
    </div>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/js/tom-select.complete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="script.js"></script>
</body>

</html>
