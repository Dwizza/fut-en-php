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
        imgPlayer.setAttribute('class',"");
        // Add rating
        const rating = cards.children[2].children[0];
        rating.textContent = inputs[6].value;
        // Add Name
        const name = cards.children[3].children[0].children[0];
        name.textContent = inputs[0].value;
        // Add Pace
        const pace = cards.children[3].children[1].children[0].children[1];
        pace.textContent = inputs[7].value;
        // Add shooting
        const shooting = cards.children[3].children[1].children[1].children[1];
        shooting.textContent = inputs[8].value;
        // Add passing
        const passing = cards.children[3].children[1].children[2].children[1];
        passing.textContent = inputs[9].value;
        // Add dribbling
        const dribbling = cards.children[3].children[1].children[3].children[1];
        dribbling.textContent = inputs[10].value;
        // Add defending
        const defending = cards.children[3].children[1].children[4].children[1];
        defending.textContent = inputs[11].value;
        // Add physical
        const physical = cards.children[3].children[1].children[5].children[1];
        physical.textContent = inputs[12].value;
        
        myForm.reset();
    }
    function edit(){
        const rating = cards.children[2].children[0];
        inputs[6].value = rating.textContent;
        // Add Name
        const name = cards.children[3].children[0].children[0];
         inputs[0].value = name.textContent ;
        // Add nation
        const nation = cards.children[3].children[0].children[0];
         inputs[0].value = name.textContent ;
        // Add Pace
        const pace = cards.children[3].children[1].children[0].children[1];
        inputs[7].value = pace.textContent ;
        // Add shooting
        const shooting = cards.children[3].children[1].children[1].children[1];
        inputs[8].value = shooting.textContent;
        // Add passing
        const passing = cards.children[3].children[1].children[2].children[1];
       inputs[9].value = passing.textContent;
        // Add dribbling
        const dribbling = cards.children[3].children[1].children[3].children[1];
        inputs[10].value = dribbling.textContent;
        // Add defending
        const defending = cards.children[3].children[1].children[4].children[1];
        inputs[11].value = defending.textContent;
        // Add physical
        const physical = cards.children[3].children[1].children[5].children[1];
        inputs[12].value = physical.textContent;
    }
    function delet(){
        const imgPlayer = cards.children[1].children[0];
        imgPlayer.removeAttribute('src');
        imgPlayer.setAttribute('src',"../images/2661440.png");
        imgPlayer.setAttribute('class',"animate-pulse");
        
        // Add rating
        const rating = cards.children[2].children[0];
        rating.textContent = "--";
        // Add Name
        const name = cards.children[3].children[0].children[0];
        name.textContent = "------";
        // Add Pace
        const pace = cards.children[3].children[1].children[0].children[1];
        pace.textContent = "--";
        // Add shooting
        const shooting = cards.children[3].children[1].children[1].children[1];
        shooting.textContent = "--";
        // Add passing
        const passing = cards.children[3].children[1].children[2].children[1];
        passing.textContent = "--";
        // Add dribbling
        const dribbling = cards.children[3].children[1].children[3].children[1];
        dribbling.textContent = "--";
        // Add defending
        const defending = cards.children[3].children[1].children[4].children[1];
        defending.textContent = "--";
        // Add physical
        const physical = cards.children[3].children[1].children[5].children[1];
        physical.textContent = "--";
        form1.style.display = 'none';
    }
    new TomSelect('#select-nation',{
        valueField: 'img',
        labelField: 'name',
        searchField: 'name',
        // fetch remote data
        load: function(query, callback) {
            fetch("./json-pack/nation.json")
                .then(response => response.json())
                .then(json => {
                    callback(json);
                    console.log(json);
                }).catch(()=>{
                    callback();
                });
    
        },
        // custom rendering functions for options and items
        render: {
            option: function(item, escape) {
                return `<div class="flex w-full">
                        <img src="${item.img}" alt="" class="w-[20px] h-[20px]" >
                        <h1>${item.name}</h1>
                        </div>;`
            },
            item: function(item, escape) {
                return `<div class="flex" style="display: flex;align-items: center;">
                        <img src="${item.img}" alt="" class="aymane w-[20px] h-[20px]" >
                        <span>${item.name}</span>
                        </div>;`
            }
        },
    });
   

