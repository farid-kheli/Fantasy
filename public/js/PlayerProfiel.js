total=0
calculate(document.getElementById('MinutePlayed1'),'MinutePlayed')
calculate(document.getElementById('Goals1'),'Goals')
calculate(document.getElementById('GoalAssists1'),'GoalAssists')
calculate(document.getElementById('BigChanceCreated1'),'BigChanceCreated')
calculate(document.getElementById('BallsIntoTheBox1'),'BallsIntoTheBox')
calculate(document.getElementById('PinaltiesSaved1'),'PinaltiesSaved')
calculate(document.getElementById('Saves1'),'Saves')
calculate(document.getElementById('EffectiveClearances1'),'EffectiveClearances')
calculate(document.getElementById('PenaltiesMissed1'),'PenaltiesMissed')
calculate(document.getElementById('OwnGoals1'),'OwnGoals')
calculate(document.getElementById('YellowCard1'),'YellowCard')
calculate(document.getElementById('RedCard1'),'RedCard')
calculate(document.getElementById('EffectiveDribbles1'),'EffectiveDribbles')
calculate(document.getElementById('Recoveries1'),'Recoveries')
calculate(document.getElementById('LostBalls1'),'LostBalls')
function calculate(elemnt,id){
    number = elemnt.value
    switch(id) {
        case 'MinutePlayed':
          points = number/2-((number/2)%1)
          break;
        case 'Goals':
          points = number*2
          break;
        case 'GoalAssists':
          points = number*1
          break;
        case 'BigChanceCreated':
          points = number*1
          break;
        case 'BallsIntoTheBox':
          points = number/2-((number/2)%1)
          break;
        case 'PinaltiesSaved':
          points = number*3
          break;
        case 'Saves':
          points = number/2-((number/2)%1)
          break;
        case 'EffectiveClearances':
          points = number/3-(number/3)%1
          break;
        case 'PenaltiesMissed':
          points = number * (-2)
          break;
        case 'OwnGoals':
            points = number * (-2)
          break;
        case 'YellowCard':
            points = number * (-1)
          break;
        case 'RedCard':
            points = number * (-3)
          break;
        case 'EffectiveDribbles':
            points = number/2-((number/2)%1)
          break;
        case 'Recoveries':
            points = number/5-((number/5)%1)
          break;
        case 'LostBalls':
            points = (number/5-((number/5)%1))*-1
          break;
        }
    if(id!='AddisionallPoints'){
    document.getElementById(id).innerHTML = points
}

    //total = total + Number(document.getElementById(id).innerText)
    //document.getElementById('TOTAL').innerHTML = total
    TOTAL()
}
function TOTAL(){
    total = 0
    total =  Number(document.getElementById('MinutePlayed').innerText)
    total = total + Number(document.getElementById('Goals').innerText)
    total = total + Number(document.getElementById('GoalAssists').innerText)
    total = total + Number(document.getElementById('BigChanceCreated').innerText)
    total = total + Number(document.getElementById('BallsIntoTheBox').innerText)
    total = total + Number(document.getElementById('PinaltiesSaved').innerText)
    total = total + Number(document.getElementById('EffectiveClearances').innerText)
    total = total + Number(document.getElementById('PenaltiesMissed').innerText)
    total = total + Number(document.getElementById('OwnGoals').innerText)
    total = total + Number(document.getElementById('YellowCard').innerText)
    total = total + Number(document.getElementById('EffectiveDribbles').innerText)
    total = total + Number(document.getElementById('Recoveries').innerText)
    total = total + Number(document.getElementById('LostBalls').innerText)
    total = total + Number(document.getElementById('AddisionallPoints').value)
    console.log(document.getElementById('AddisionallPoints').value)
    document.getElementById('TOTAL').innerHTML = total
    document.getElementById('TOTALPOINTS').value = total
    
}