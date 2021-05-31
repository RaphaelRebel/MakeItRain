function onClickMenu(){
    document.getElementById("menu").classList.toggle("change");
    
    document.getElementById("nav").classList.toggle("change");
  }

  window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    document.getElementById("container").className = "balk-active";
  } else {
    document.getElementById("container").className = "center";
  }
}