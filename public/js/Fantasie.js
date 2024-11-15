


let element2


function empty(element) {
    //console.log(id)
    //element= document.getElementById(id);
    element.innerHTML = '+'
    element.className = 'Void'
    if (document.getElementById('change1') != null) {
    remove()
}
}

function remove() {
    document.getElementsByClassName('change')[0].remove();
}
function check(i){
 return (document.getElementById(i)!=null)
}