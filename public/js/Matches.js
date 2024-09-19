
function toggleDropdown() {
    var dropdown = document.getElementById("services-dropdown");
    dropdown.classList.toggle("active");
}
function matche(int,home,away){
    document.getElementById('matchenumber').value=int
    if(int=='first'){

        document.getElementById('home').value = home
        document.getElementById('away').value = away
    }
    if(int=='secend'){
        document.getElementById('home').value = home
        document.getElementById('away').value = away
    }
    if(int=='thirde'){    
        document.getElementById('home').value = home
        document.getElementById('away').value = away
    }
}

