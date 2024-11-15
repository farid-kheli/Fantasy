list=[]
function random(){
   //console.log(document.getElementById(`16`))
   clubsList = document.querySelector('.ClubsList')
   clubs = clubsList.querySelectorAll('[class=c]')
   for(let i=0;i<clubs.length;i++ ){
    list[i]=clubs[i]
   }
    const shuffledArray = list.sort((a, b) => 0.5 - Math.random());
    clubsList = document.querySelector('.round')
   round = clubsList.querySelectorAll('[class=stage]')
   console.log(shuffledArray[1].id)
   for(let i=0;i<shuffledArray.length;i++ ){
    round[i].innerHTML = shuffledArray[i].innerHTML + `<input type="hidden" name="team${i}" id="team1Input" value="${shuffledArray[i].id}">`
   }
}