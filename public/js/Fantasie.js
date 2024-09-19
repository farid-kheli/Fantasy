function formation(defance,midfiled,attac){
    document.getElementById('vu').innerHTML=`${defance}-${midfiled}-${attac}`
    document.getElementById('defance').innerHTML=''
    document.getElementById('midfield').innerHTML=''
    document.getElementById('attaque').innerHTML=''
    for(let i=1; i<=defance;i++){
        document.getElementById('defance').innerHTML+=`<div class="card">
        <div class="try">
            <div class="points">
                <h1>5</h1>
            </div>
        </div>
        <div class="imag">
            <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                alt="">
        </div>
        <div class="name"></div>
    </div>`
    }
    for(let i=1; i<=midfiled;i++){
        document.getElementById('midfield').innerHTML+=`<div class="card">
        <div class="try">
            <div class="points">
                <h1>5</h1>
            </div>
        </div>
        <div class="imag">
            <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                alt="">
        </div>
        <div class="name"></div>
    </div>`
    }
    for(let i=1; i<=attac;i++){
        document.getElementById('attaque').innerHTML+=`<div class="card">
        <div class="try">
            <div class="points">
                <h1>5</h1>
            </div>
        </div>
        <div class="imag">
            <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                alt="">
        </div>
        <div class="name"></div>
    </div>`
    }
    
}
function check(){
    
} 