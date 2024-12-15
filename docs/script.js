const inputs = document.querySelectorAll('.input');
const inputs1 = document.querySelectorAll('.input1');
const position = document.getElementById('position');
const form1 = document.getElementById("form1");
const form2 = document.getElementById("form2");
const myForm = document.getElementById("myForm");
let cards = null

function cardPlayers(event){
    if(event.target.hasAttribute('data-info')) {
        return;
    }

    cards = event.currentTarget;
    form1.setAttribute('class', 'm-5 md:w-[50%] w-[70%] absolute top-10 ease-in-out duration-300 left-[10%] md:left-[25%]')
    
}
function cardPlayer(event){
    if(event.target.hasAttribute('data-info')) {
        return;
    }

    cards = event.currentTarget;
    form2.setAttribute('class', 'm-5 md:w-[50%] w-[70%] absolute top-10 ease-in-out duration-300 left-[25%] md:left-[30%]')
}

function fermer(){
    form1.setAttribute('class', 'm-5 md:w-[20%] w-full absolute -top-[1000px] ease-in-out duration-300 left-[30%]')
    form2.setAttribute('class', 'm-5 md:w-[20%] w-full absolute -top-[1000px] ease-in-out duration-300 left-[30%]');
    myForm1.reset();
    myForm.reset();
}

//changement 
function benchUp(){
    const changement = document.getElementById('changement');
    const down = document.getElementById('down');
    const up = document.getElementById('up');
    changement.setAttribute('class','flex flex-col gap-5 overflow-y-scroll items-center w-[25%] h-[80%] ease-in-out duration-500 text-center fixed left-2 bottom-20 bg-[#404040] rounded-xl')
    up.style.display="none"
    down.style.display="block"
}
function benchDown(){
    const changement = document.getElementById('changement');
    const down = document.getElementById('down');
    const up = document.getElementById('up');
    changement.setAttribute('class','flex flex-col items-center overflow-y-scroll gap-5 w-[25%] h-[80%] ease-in-out duration-500 text-center fixed left-2 -bottom-[800px] bg-[#404040] rounded-xl')
    up.style.display="block"
    down.style.display="none"
}


