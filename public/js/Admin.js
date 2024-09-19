

function toggleNav() {
    var sidenav = document.getElementById("sidenav");
    var mainContent = document.getElementsByClassName("main-content")[0];
    if (sidenav.style.width === "250px") {
      sidenav.style.width = "0";
      mainContent.style.marginLeft = "0";
    } else {
      sidenav.style.width = "250px";
      mainContent.style.marginLeft = "250px";
    }
  }function click1(value){
    document.getElementById('drop1').value=value;
    
  }
  function click2(value){
    document.getElementById('drop2').value=value;
  }

  
  