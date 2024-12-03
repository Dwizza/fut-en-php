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
}

function putValue(event) {
    event.preventDefault();
    if(!inputs[0].value || !inputs[1].value || !inputs[2].value || !inputs[3].value || !inputs[4].value || !inputs[5].value || !inputs[6].value|| !inputs[7].value){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Please fill all fields",
            showConfirmButton: false,
            timer: 1500
        });
        return;
    }else if (inputs[1].value<30 || inputs[2].value<30 || inputs[3].value<30 || inputs[4].value<30 || inputs[5].value<30 || inputs[6].value<30){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "30 < statistic < 100",
            showConfirmButton: false,
            timer: 1500
        });
        return
    }else if (inputs[1].value>100 || inputs[2].value>100 || inputs[3].value>100 || inputs[4].value>100 ||inputs[5].value>100 || inputs[6].value>100 ){
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

    form1.setAttribute('class', 'm-5 md:w-[20%] w-full absolute -top-[1000px] ease-in-out duration-300 left-[30%]')
    myForm.reset();}
}
function putChangement(event){
    event.preventDefault();
    if(position.value == "vide" || !inputs1[0].value || !inputs1[1].value || !inputs1[2].value || !inputs1[3].value || !inputs1[4].value || !inputs1[5].value || !inputs1[6].value || !inputs1[7].value){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Please fill all fields",
            showConfirmButton: false,
            timer: 1000
        });
        return;
    }else if (inputs1[1].value<30 || inputs1[2].value<30 || inputs1[3].value<30 || inputs1[4].value<30 || inputs1[5].value<30 || inputs1[6].value<30){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "30 < statistic < 100",
            showConfirmButton: false,
            timer: 1000
        });
        return
    }else if (inputs1[1].value>100 || inputs1[2].value>100 || inputs1[3].value>100 || inputs1[4].value>100 || inputs1[5].value>100 || inputs1[6].value>100 ){
        Swal.fire({
            position: "center",
            icon: "error",
            title: "30 < statistic < 100",
            showConfirmButton: false,
            timer: 1000
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
    team.setAttribute('src', document.querySelector('.Team').src);
    // Add rating
    const rating = cards.querySelector('p');
    rating.textContent = inputs1[1].value;
    // Add Position
    const position = cards.querySelectorAll('p')[1];
    position.textContent = document.getElementById('position').value;
    
    // Add Name
    const name = cards.querySelectorAll('p')[2];
    name.textContent = inputs1[0].value;
    // Add Pace
    const pace = cards.querySelectorAll('p')[4];
    pace.textContent = inputs1[2].value;
    // Add shooting
    const shooting = cards.querySelectorAll('p')[6];
    shooting.textContent = inputs1[3].value;
    // Add passing
    const passing = cards.querySelectorAll('p')[8];
    passing.textContent = inputs1[4].value;
    // Add dribbling
    const dribbling = cards.querySelectorAll('p')[10];
    dribbling.textContent = inputs1[5].value;
    // Add defending
    const defending = cards.querySelectorAll('p')[12];
    defending.textContent = inputs1[6].value;
    // Add physical
    const physical = cards.querySelectorAll('p')[14];
    physical.textContent = inputs1[7].value;
    
    const displayStatistique = cards.querySelectorAll('div')[2];
    displayStatistique.style.display = 'flex';

    Swal.fire({
        position: "center",
        icon: "success",
        title: "Your player is added",
        showConfirmButton: false,
        timer: 1000
    });

    form2.setAttribute('class', 'm-5 md:w-[20%] w-full absolute -top-[1000px] ease-in-out duration-300 left-[30%]');
    myForm1.reset();
    return;
}
}

function edit(event){
    const target = event.currentTarget.parentElement.parentElement;
    
    const rating = target.querySelectorAll('p')[0];
    inputs[1].value = rating.textContent;
    // Add Name
    const name = target.querySelectorAll('p')[2];
    inputs[0].value = name.textContent ; 
    // Add Pace
    const pace = target.querySelectorAll('p')[4];
    inputs[2].value = pace.textContent ;
    // Add shooting
    const shooting = target.querySelectorAll('p')[6];
    inputs[3].value = shooting.textContent;
    // Add passing
    const passing = target.querySelectorAll('p')[8];
    inputs[4].value = passing.textContent;
    // Add dribbling
    const dribbling = target.querySelectorAll('p')[10];
    inputs[5].value = dribbling.textContent;
    // Add defending
    const defending = target.querySelectorAll('p')[12];
    inputs[6].value = defending.textContent;
    // Add physical
    const physical = target.querySelectorAll('p')[14];
    inputs[7].value = physical.textContent;

    form1.setAttribute('class', 'm-5 md:w-[20%] w-full absolute -top-[1000px] ease-in-out duration-300 left-[10%] md:left-[25%]')
}
function editC(){
    const rating = cards.querySelectorAll('p')[0];
    inputs1[1].value = rating.textContent;
    // Add Name
    const name = cards.querySelectorAll('p')[2];
    inputs1[0].value = name.textContent ; 
    // Add POSITION
    const position = cards.querySelectorAll('p')[1];
    document.getElementById('position').value = position.textContent ;
    // Add Pace
    const pace = cards.querySelectorAll('p')[4];
    inputs1[2].value = pace.textContent ;
    // Add shooting
    const shooting = cards.querySelectorAll('p')[6];
    inputs1[3].value = shooting.textContent;
    // Add passing
    const passing = cards.querySelectorAll('p')[8];
    inputs1[4].value = passing.textContent;
    // Add dribbling
    const dribbling = cards.querySelectorAll('p')[10];
    inputs1[5].value = dribbling.textContent;
    // Add defending
    const defending = cards.querySelectorAll('p')[12];
    inputs1[6].value = defending.textContent;
    // Add physical
    const physical = cards.querySelectorAll('p')[14];
    inputs1[7].value = physical.textContent;
    form2.setAttribute('class', 'm-5 md:w-[20%] w-full absolute -top-[1000px] ease-in-out duration-300 left-[30%]')
}
function delet(event){
    const target = event.currentTarget.parentElement.parentElement;
    
    // image player
    const imgPlayer = target.querySelectorAll('img')[1];
    imgPlayer.removeAttribute('src');
    imgPlayer.setAttribute('src',"../assets/players/Untitled-1.png");
    imgPlayer.setAttribute('class',"animate-pulse");
    //flag image
    const nation = target.querySelectorAll('img')[2];
    nation.removeAttribute('src');
    //team image
    const team = target.querySelectorAll('img')[3];
    team.removeAttribute('src')
    // Add rating
    const rating = target.querySelector('p');
    rating.textContent = "";
    // Add Name
    const name = target.querySelectorAll('p')[2];
    name.textContent = "";
    // Add Pace
    const pace = target.querySelectorAll('p')[4];
    pace.textContent = "";
    // Add shooting
    const shooting = target.querySelectorAll('p')[6];
    shooting.textContent = "";
    // Add passing
    const passing = target.querySelectorAll('p')[8];
    passing.textContent = "";
    // Add dribbling
    const dribbling = target.querySelectorAll('p')[10];
    dribbling.textContent = "";
    // Add defending
    const defending = target.querySelectorAll('p')[12];
    defending.textContent = "";
    // Add physical
    const physical = target.querySelectorAll('p')[14];
    physical.textContent = "";
    const displayStatistique = target.querySelectorAll('div')[2];
    displayStatistique.style.display = 'none';
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
    changement.setAttribute('class','flex flex-col items-center overflow-y-scroll gap-5 w-[25%] h-[80%] ease-in-out duration-500 text-center fixed left-2 -bottom-[600px] bg-[#404040] rounded-xl')
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
    // nation
    new TomSelect('#select-nation1',{
        valueField: 'img',
        labelField: 'name',
        searchField: 'name',
        // fetch remote data
        load: function(query, callback) {
            fetch("./json-pack/nation.json")
                .then(response => response.json())
                .then(json => {
                    callback(json);
            
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
    // team
    new TomSelect('#select-team1',{
        valueField: 'img',
        labelField: 'name',
        searchField: 'name',
        // fetch remote data
        load: function(query, callback) {
            fetch("./json-pack/teams.json")
                .then(response => response.json())
                .then(json => {
                    callback(json);
            
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
    // player
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
    // player
    new TomSelect('#select-player1',{
        valueField: 'img',
        labelField: 'name',
        searchField: 'name',
        // fetch remote data
        load: function(query, callback) {
            fetch("./json-pack/players.json")
                .then(response => response.json())
                .then(json => {
                    callback(json);
            
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





    