let cards = null
let cardsFromDB = document.querySelectorAll('.cardsFromDB');
const modal = document.getElementById("modal");
const openButton = document.getElementById("openButton");
const closeButton = document.getElementById("closeButton");
let position = null;


function cardPlayers(event){
    cards = event.currentTarget;
    position = cards.querySelectorAll('p')[1].textContent;
    
    for (let i = 0; i < cardsFromDB.length; i++) {
        const positionPDB = cardsFromDB[i].querySelectorAll('p')[1];
        if(positionPDB.textContent === position){
            positionPDB.parentElement.parentElement.classList.remove("hidden");
        }
    }
    modal.classList.remove("hidden")
}
function appendInStadium(e){
    const cardsDB = e.currentTarget;
    cardsDB.classList.remove("cardsFromDB");
    console.log(position);
    const div = document.getElementById(`${position}`);
    
    div.appendChild(cardsDB);
    div.children[0].classList.add("hidden");
    modal.classList.add("hidden");

}
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.classList.add("hidden");
        cardsFromDB.forEach(card => card.classList.add("hidden"));
    }
});
closeButton.addEventListener("click", () => {
    modal.classList.add("hidden");
    cardsFromDB.forEach(card => card.classList.add("hidden"));
});
function cardPlayer(event){
    cards = event.currentTarget
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


