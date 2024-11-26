const inputs = document.querySelectorAll('input');
const position = document.getElementById('position');
const form1 = document.getElementById("form1");
const myForm = document.getElementById("myForm");
let cards = null

function cardPlayers(event){
    cards = event.currentTarget;
    console.log(cards);
    form1.style.display = 'block';
}

    function putValue(event) {
        event.preventDefault();
        // add Images
        const imgPlayer = cards.children[1].children[0];
        imgPlayer.removeAttribute('src');
        imgPlayer.setAttribute('src',inputs[1].value);
        // Add rating
        const rating = cards.children[2].children[0];
        rating.innerHTML = inputs[6].value;
        // Add Name
        const name = cards.children[3].children[0].children[0];
        name.innerHTML = inputs[0].value;
        // Add Pace
        const pace = cards.children[3].children[1].children[0].children[1];
        pace.innerHTML = inputs[7].value;
        // Add shooting
        const shooting = cards.children[3].children[1].children[1].children[1];
        shooting.innerHTML = inputs[8].value;
        // Add passing
        const passing = cards.children[3].children[1].children[2].children[1];
        passing.innerHTML = inputs[9].value;
        // Add dribbling
        const dribbling = cards.children[3].children[1].children[3].children[1];
        dribbling.innerHTML = inputs[10].value;
        // Add defending
        const defending = cards.children[3].children[1].children[4].children[1];
        defending.innerHTML = inputs[11].value;
        // Add physical
        const physical = cards.children[3].children[1].children[5].children[1];
        physical.innerHTML = inputs[12].value;
        
        myForm.reset();
        form1.style.display = 'none';
    }


