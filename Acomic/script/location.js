


function marvelFunction() {
    document.getElementById("locate").innerHTML = "Marvel"; 
    var marvelComic = document.getElementsByClassName("comic-image");
    for (var i = 0; i < marvelComic.length; i+= 1){
    marvelComic[i].src = '../images/MARVEL.jpg';}
  }

function dcFunction() {
    document.getElementById("locate").innerHTML = "DC";
    var dcComic = document.getElementsByClassName("comic-image");
    for (var i = 0; i < dcComic.length; i+= 1){
    dcComic[i].src = '../images/DC.jpeg';}
}

function recommendedFunction() {
    document.getElementById("locate").innerHTML = "Recommended";
    var recComic = document.getElementsByClassName("comic-image");
    for (var i = 0; i < recComic.length; i+= 1){
    recComic[i].src = '../images/Test.jpeg';}
    
}

function otherFunction() {
    document.getElementById("locate").innerHTML = "Other";
    var otherComic = document.getElementsByClassName("comic-image");
    for (var i = 0; i < otherComic.length; i+= 1){
    otherComic[i].src = '../images/Other.jpg';}
}