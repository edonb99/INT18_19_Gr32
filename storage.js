 /*  The localStorage Object */
                   
  function clickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+1;
    } else {
      localStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "You have watched this video " + localStorage.clickcount + " time(s).";
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}

/* ---- */




/* The sessionStorage Object */

function clickCounter1() {
  if (typeof(Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
    } else {
      sessionStorage.clickcount = 1;
    }
    document.getElementById("result2").innerHTML = "You have played " + sessionStorage.clickcount + " time(s) in this session.";
  } else {
    document.getElementById("result2").innerHTML = "Sorry, your browser does not support web storage...";
  }
}

/* ---- */