//iteration Counter
let i=0;
// Variable to set time in seconds
let t=3;
//Array to store all values to be shown
let arr=["Confident", "Smart", "Intelligent", "Shweta Jaiswal"];
//ELEMENT TO BE EFFECTED
let typewrite = document.getElementById('typewrite');
//CONTAINER OF ELEMENT TO BE EFFECTED
let typewriter = document.getElementById('typewriter');
// CURSOR
let cursor = document.getElementById('cursor');

cursor.style.height=typewrite.offsetHeight+"px";
cursor.style.top=typewrite.offsetHeight+"px";

typewriter.style.left=typewrite.offsetWidth+"px";
typewriter.style.animation="type-anim "+t+"s steps("+(typewrite.innerHTML.length)+") infinite";
setTimeout(function(){
    typewriter.style.animation="type-anim "+(t)+"s steps("+(typewrite.innerHTML.length)+") reverse infinite";
},(t*1000));

    setInterval(function(){
        typewrite.innerHTML=arr[i];
        typewriter.style.left = typewrite.offsetWidth+"px";
        typewriter.style.animation="type-anim "+t+"s steps("+(typewrite.innerHTML.length)+") infinite";
        setTimeout(function(){
           typewriter.style.animation="type-anim "+(t)+"s steps("+(typewrite.innerHTML.length)+") reverse infinite";
        },(t*1000));
        i++;
        if(i==arr.length){
            i=0;
        }
    },(2*t*1000));