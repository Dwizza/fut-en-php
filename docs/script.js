const inputs = document.querySelectorAll('input');
const position = document.getElementById('position');
const form1 = document.getElementById("form1");
const myForm = document.getElementById("myForm");
let cards = null
let cache = document.getElementById("cache");

function cardPlayers(event){
    if(event.target.hasAttribute('data-info')) {
        return;
    }

    cards = event.currentTarget;
    form1.style.display = 'block';
    
}
function fermer(){
    form1.style.display = 'none';
    myForm.reset();
}

function putValue(event) {
    event.preventDefault();
    if(!inputs[0].value || !inputs[1].value ||!inputs[2].value||!inputs[3].value || !inputs[4].value || !inputs[5].value ||!inputs[6].value||!inputs[7].value){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Please fill all fields",
            showConfirmButton: false,
            timer: 1500
        });
        return;
    }else if ((inputs[2].value&&inputs[3].value && inputs[4].value && inputs[5].value &&inputs[6].value&&inputs[7].value)<30){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "30 < statistic < 100",
            showConfirmButton: false,
            timer: 1500
        });
        return
    }else if ((inputs[2].value&&inputs[3].value && inputs[4].value && inputs[5].value &&inputs[6].value&&inputs[7].value )>100){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "30 < statistic < 100",
            showConfirmButton: false,
            timer: 1500
        });
        return
    }
    else{
    // add Images
    const imgPlayer = cards.querySelectorAll('img')[1];
    imgPlayer.removeAttribute('class',"animate-pulse");
    imgPlayer.setAttribute('src', document.querySelector('.Player').src);
    // add nation
    const nation = cards.querySelectorAll('img')[2];
    nation.setAttribute('src', document.querySelector('.Flag').src);
    // add team
    const team = cards.querySelectorAll('img')[3];
    team.setAttribute('src', document.querySelector('.Team').src) 
    // Add rating
    const rating = cards.querySelector('p');
    rating.textContent = inputs[1].value;
    // Add Name
    const name = cards.querySelectorAll('p')[2];
    name.textContent = inputs[0].value;
    // Add Pace
    const pace = cards.querySelectorAll('p')[4];
    pace.textContent = inputs[2].value;
    // Add shooting
    const shooting = cards.querySelectorAll('p')[6];
    shooting.textContent = inputs[3].value;
    // Add passing
    const passing = cards.querySelectorAll('p')[8];
    passing.textContent = inputs[4].value;
    // Add dribbling
    const dribbling = cards.querySelectorAll('p')[10];
    dribbling.textContent = inputs[5].value;
    // Add defending
    const defending = cards.querySelectorAll('p')[12];
    defending.textContent = inputs[6].value;
    // Add physical
    const physical = cards.querySelectorAll('p')[14];
    physical.textContent = inputs[7].value;
    
    const displayStatistique = cards.querySelectorAll('div')[2];
    displayStatistique.style.display = 'flex';

    Swal.fire({
        position: "center",
        icon: "success",
        title: "Your player is added",
        showConfirmButton: false,
        timer: 1000
    });

    form1.style.display = 'none';
    myForm.reset();}
}

function edit(){
    const imgPlayer = cards.querySelectorAll('img')[1];
    inputs[1].value = imgPlayer.getAttribute('src');
    
    const rating = cards.querySelectorAll('p')[0];
    inputs[2].value = rating.textContent;
    // Add Name
    const name = cards.querySelectorAll('p')[2];
    inputs[0].value = name.textContent ; 
    // Add Pace
    const pace = cards.querySelectorAll('p')[4];
    inputs[3].value = pace.textContent ;
    // Add shooting
    const shooting = cards.querySelectorAll('p')[6];
    inputs[4].value = shooting.textContent;
    // Add passing
    const passing = cards.querySelectorAll('p')[8];
    inputs[5].value = passing.textContent;
    // Add dribbling
    const dribbling = cards.querySelectorAll('p')[10];
    inputs[6].value = dribbling.textContent;
    // Add defending
    const defending = cards.querySelectorAll('p')[12];
    inputs[7].value = defending.textContent;
    // Add physical
    const physical = cards.querySelectorAll('p')[14];
    inputs[8].value = physical.textContent;

    form1.style.display = 'none';
}
function delet(){
    // image player
    const imgPlayer = cards.querySelectorAll('img')[1];
    imgPlayer.removeAttribute('src');
    imgPlayer.setAttribute('src',"../assets/players/Untitled-1.png");
    imgPlayer.setAttribute('class',"animate-pulse");
    //flag image
    const nation = cards.querySelectorAll('img')[2];
    nation.removeAttribute('src');
    //team image
    const team = cards.querySelectorAll('img')[3];
    team.removeAttribute('src')
    // Add rating
    const rating = cards.querySelector('p');
    rating.textContent = "";
    // Add Name
    const name = cards.querySelectorAll('p')[2];
    name.textContent = "";
    // Add Pace
    const pace = cards.querySelectorAll('p')[4];
    pace.textContent = "";
    // Add shooting
    const shooting = cards.querySelectorAll('p')[6];
    shooting.textContent = "";
    // Add passing
    const passing = cards.querySelectorAll('p')[8];
    passing.textContent = "";
    // Add dribbling
    const dribbling = cards.querySelectorAll('p')[10];
    dribbling.textContent = "";
    // Add defending
    const defending = cards.querySelectorAll('p')[12];
    defending.textContent = "";
    // Add physical
    const physical = cards.querySelectorAll('p')[14];
    physical.textContent = "";
    form1.style.display = 'none';
    const displayStatistique = cards.querySelectorAll('div')[2];
    displayStatistique.style.display = 'none';
    myForm.reset();
}
//changement 
function benchUp(){
    const changement = document.getElementById('changement');
    const down = document.getElementById('down');
    const up = document.getElementById('up');
    changement.setAttribute('class','grid grid-cols-2 gap-5 items-center w-[20%] h-[80%] ease-in-out duration-500 text-center fixed left-0 bottom-20 bg-slate-800 rounded-3xl')
    up.style.display="none"
    down.style.display="block"
}
function benchDown(){
    const changement = document.getElementById('changement');
    const down = document.getElementById('down');
    const up = document.getElementById('up');
    changement.setAttribute('class','grid grid-cols-2 gap-5 items-center w-[20%] h-[80%] ease-in-out duration-500 text-center fixed left-0 -bottom-[600px] bg-slate-800 rounded-3xl')
    up.style.display="block"
    down.style.display="none"
}
    // nation
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
        render: {
            option: function(item, escape) {
                return `<div class="flex w-full">
                        <img src="${item.img}" alt="" class="w-[20px] h-[20px]" >
                        <h1>${item.name}</h1>
                        </div>;`
            },
            item: function(item, escape) {
                return `<div class="flex" style="display: flex;align-items: center;">
                        <img src="${item.img}" alt="" class="Flag w-[20px] h-[20px]" >
                        <span>${item.name}</span>
                        </div>;`
            }
        },
    });
    // team
    new TomSelect('#select-team',{
        valueField: 'img',
        labelField: 'name',
        searchField: 'name',
        // fetch remote data
        load: function(query, callback) {
            fetch("./json-pack/teams.json")
                .then(response => response.json())
                .then(json => {
                    callback(json);
                    console.log(json);
                }).catch(()=>{
                    callback();
                });
    
        },
        render: {
            option: function(item, escape) {
                return `<div class="flex w-full">
                        <img src="${item.img}" alt="" class="w-[20px] h-[20px]" >
                        <h1>${item.name}</h1>
                        </div>;`
            },
            item: function(item, escape) {
                return `<div class="flex" style="display: flex;align-items: center;">
                        <img src="${item.img}" alt="" class="Team w-[20px] h-[20px]" >
                        <span>${item.name}</span>
                        </div>;`
            }
        },
    });
    new TomSelect('#select-player',{
        valueField: 'img',
        labelField: 'name',
        searchField: 'name',
        // fetch remote data
        load: function(query, callback) {
            fetch("./json-pack/players.json")
                .then(response => response.json())
                .then(json => {
                    callback(json);
                    console.log(json);
                }).catch(()=>{
                    callback();
                });
    
        },
        render: {
            option: function(item, escape) {
                return `<div class="flex w-full">
                        <img src="${item.img}" alt="" class="w-[20px] h-[20px]" >
                        <h1>${item.name}</h1>
                        </div>;`
            },
            item: function(item, escape) {
                return `<div class="flex" style="display: flex;align-items: center;">
                        <img src="${item.img}" alt="" class="Player w-[20px] h-[20px]" >
                        <span>${item.name}</span>
                        </div>;`
            }
        },
    });


