let slected = []

function select(position, number, name, id, place) {
    let pl = document.querySelector(`.${place}`);
    elms = pl.querySelectorAll(`[class=Line]`);
    for (var i = 0; i < elms.length; i++) {
        player = elms[i].querySelectorAll(`[class=playerP]`);
        for (var j = 0; j < player.length; j++) {
        player[j].setAttribute('onclick', "chang(this)");
    }
    }
    
    slected[0] = position
    slected[1] = number
    slected[2] = name
    slected[3] = id
    slected[4] = place
    document.getElementById(id).style = 'background:black';
}
function chang(element) {
    //if (element.className != 'void') {
    //    AddToList(element.getElementsByClassName('player-name')[0].innerText, element.id)
    //}
    //let pl = document.querySelector(`.${slected[4]}`);
//
    //elms = pl.querySelectorAll(`[id=${slected[0]}]`);
    //console.log(elms)
    element.innerHTML = `
                                <div oncontextmenu="remove(this,'${element.id}',${slected[3]})" class="player">${slected[1]}</div>
                                <div  class="player-name">${slected[2]}</div>
                                <input type="hidden" name = '${element.id}' value='${slected[3]}'>
                                
                                `
 element.className = 'player-card'

    document.getElementById(slected[3]).remove()
    unselect()

}

function unselect() {
    slected = []
    var elmsG = document.querySelectorAll(`[class=player-card]`);
    for (var i = 0; i < elmsG.length; i++) {
        var players = elmsG[i].getElementsByClassName('unslected');
        for (var j = 0; j < players.length; j++) {
            players[j].className = 'player'
        }
    }
    var element = document.querySelectorAll(`[class=playerP]`);
    for (var i = 0; i < element.length; i++) {
        element[i].removeAttribute('onclick');
        element[i].style.cursor = 'default'
    }
    var element = document.querySelectorAll(`[class=player-card]`);
    for (var i = 0; i < element.length; i++) {
        element[i].removeAttribute('onclick');
        element[i].style.cursor = 'default'
    }
}
function AddToList(position, name) {

    document.getElementById('player-list').innerHTML += `<div id="1" onclick="select('STR',10,'Player name',this.id)" class="player">
                            <div class="psision">${name}</div>
                            <h3>${position}22222</h3>
                            <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png" alt="">
                        </div>`
}
let f =[]
function formation(def, mid, str, place) {
    
    f[1]=def
    f[2]=mid
    f[3]=str
    for(i=1;i<=11;i++){
        if(document.getElementById(`player${i}`).className=='player-card'){
            console.log(i,document.getElementById(`player${i}`),`player${i}`,parseInt(document.getElementsByName(`player${i}`)[0].value))
            remove(document.getElementById(`player${i}`),`player${i}`,parseInt(document.getElementsByName(`player${i}`)[0].value))
        }
    }
    let pl = document.querySelector(`.${place}`);
    if (place != 'away-team') {
        line = pl.querySelectorAll('[class=Line]')
        line[0].innerHTML = `<div id="player1" class="playerP">
                                +
                            </div>`
                            x=1
        
        for(j=1;j<=3;j++){
            let i = 1 
            line[j].innerHTML = ''
            for (i = 1; i <= f[j]; i++) {
                console.log(i,x)
                line[j].innerHTML += `<div id="player${i+x}" class="playerP">
                                    +
                                </div>`
                                
            }
            x=i+x-1
            
        }
        
    }

    document.getElementById('formation').value=`${def}-${mid}-${str}`
    verify()
}