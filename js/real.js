var slideid=0;
function slideshow()
{
    var slides=document.querySelectorAll(".slides");
    for(var i=0;i<slides.length;i++){
        slides[i].style.display="none";
    }
    if(slideid<slides.length-1){
    slideid++;
    }
    else{
        slideid=1;
    }
    slides[slideid-1].style.display="block";
    setTimeout(slideshow,6000);
}
function slider(n){
    var slides=document.querySelectorAll(".slides");
    var left=document.querySelectorAll(".l");
    slides[n].style.display="block";
}
window.onload=slideshow;
function view(a,c){
    const about=document.querySelector(a);
    var section=document.querySelector(c);
    section.scrollIntoView({behavior:'smooth'});
}
function collapse(){
    var cot=document.querySelector(".art1");
    var read=document.getElementById("read");
    var link=document.querySelector(".link");
    var hide=document.createElement("a");
    hide.classList.add("link");
    read.style.display="block";
    hide.innerText="Hide"
    read.appendChild(hide);
    link.style.display="none";
    cot.style.height="auto";
    hide.onclick= function(){
        read.style.display="none";
        read.removeChild(hide);
        link.style.display="block";
    };
}
