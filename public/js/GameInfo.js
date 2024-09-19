let slected = []
function select(position, number, name, id, place) {
    let pl = document.querySelector(`.${place}`);

    elms = pl.querySelectorAll(`[id=${position}]`);
    for (var i = 0; i < elms.length; i++) {
        elms[i].style = 'cursor:pointer';
        elms[i].setAttribute('onclick', "chang(this)");
    }
    if (position != 'GOL') {
        var elmsG = document.querySelectorAll(`[id=GOL]`);
        for (var i = 0; i < elmsG.length; i++) {
            var players = elmsG[i].getElementsByClassName('player');
            for (var j = 0; j < players.length; j++) {
                players[j].className = 'unslected'
            }
        }
    }
    if (position != 'DEF') {
        var elmsG = document.querySelectorAll(`[id=DEF]`);
        for (var i = 0; i < elmsG.length; i++) {
            var players = elmsG[i].getElementsByClassName('player');
            for (var j = 0; j < players.length; j++) {
                players[j].className = 'unslected'
            }
        }
    }
    if (position != 'MID') {
        var elmsG = document.querySelectorAll(`[id=MID]`);
        for (var i = 0; i < elmsG.length; i++) {
            var players = elmsG[i].getElementsByClassName('player');
            for (var j = 0; j < players.length; j++) {
                players[j].className = 'unslected'
            }
        }
    }
    if (position != 'STR') {
        var elmsG = document.querySelectorAll(`[id=STR]`);
        for (var i = 0; i < elmsG.length; i++) {
            var players = elmsG[i].getElementsByClassName('player');
            for (var j = 0; j < players.length; j++) {
                players[j].className = 'unslected'
            }
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
    console.log(element.className)
    if (element.className != 'void') {
        AddToList(element.getElementsByClassName('player-name')[0].innerText, element.id)
    }
    let pl = document.querySelector(`.${slected[4]}`);

    elms = pl.querySelectorAll(`[id=${slected[0]}]`);
    console.log(elms)
    let number = 1;
    for(let i=0 ; i<=elms.length ; i++ ){
        console.log(elms[i].className)
        if( elms[i].className != 'void'){
            number ++
        }
    }
    element.innerHTML = `
                                <div class="player">${slected[1]}</div>
                                <div name = '${slected[4]}${number}' value='${slected[3]}' class="player-name">${slected[2]}</div>`
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
    var element = document.querySelectorAll(`[class=player-card]`);
    for (var i = 0; i < element.length; i++) {
        element[i].removeAttribute('onclick');
        element[i].style.cursor = 'default'
    }
    element = document.querySelectorAll(`[class=void]`);
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

function formation(def, mid, str, place) {
    let pl = document.querySelector(`.${place}`);
    console.log(pl, def)
    if (place != 'away-team') {
        line = pl.querySelectorAll('[class=Line]')
        console.log(line[1])
        line[0].innerHTML = `<div id="GOL" class="void">
                                +
                            </div>`
        line[1].innerHTML = ''
        for (let i = 0; i < def; i++) {
            line[1].innerHTML += `<div id="DEF" class="void">
                                +
                            </div>`
        }
        line[2].innerHTML = ''
        for (let i = 0; i < mid; i++) {
            line[2].innerHTML += `<div id="MID" class="void">
                                +
                            </div>`
        }
        line[3].innerHTML = ''
        for (let i = 0; i < str; i++) {
            line[3].innerHTML += `<div id="STR" class="void">
                                +
                            </div>`
        }
    }else{
        line = pl.querySelectorAll('[class=Line]')
        console.log(line[1])
        line[3].innerHTML = `<div id="GOL" class="void">
                                +
                            </div>`
        line[2].innerHTML = ''
        for (let i = 0; i < def; i++) {
            line[2].innerHTML += `<div id="DEF" class="void">
                                +
                            </div>`
        }
        line[1].innerHTML = ''
        for (let i = 0; i < mid; i++) {
            line[1].innerHTML += `<div id="MID" class="void">
                                +
                            </div>`
        }
        line[0].innerHTML = ''
        for (let i = 0; i < str; i++) {
            line[0].innerHTML += `<div id="STR" class="void">
                                +
                            </div>`
        }
    }
}