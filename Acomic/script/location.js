function marvelFunction() {
    document.getElementById("locate").innerHTML = "Marvel"; 
  }

function dcFunction() {
    document.getElementById("locate").innerHTML = "DC";
    document.getElementById("comic-image").src = '../images/DC.jpeg';
}

function recommendedFunction() {
    document.getElementById("locate").innerHTML = "Recommended";
    document.getElementById("comic-image").src = '../images/Test.jpeg';
}

function otherFunction() {
    document.getElementById("locate").innerHTML = "Other";
}