let i=0;
let write_title="Hello there...<br>I'm ";
let arr=["Confident", "Smart", "Intelligent"];
let title=document.getElementById('title');
console.log(title.innerHTML);
setTimeout(function(){
    setInterval(function(){
        title.innerHTML=write_title+arr[i];
        i++;
        if(i==arr.length){
            i=0;
        }
    },3000);
},2000);

