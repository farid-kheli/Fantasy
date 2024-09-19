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
   for(let i=0;i<round.length;i++ ){
    round[i].innerHTML = shuffledArray[i].innerHTML
   }
   console.log(shuffledArray[3])
   document.getElementById('save').href="/Admin/Save/Fixture"
}