const arr=['circle','square','rectangle-v', 'rectangle-h' ,'oval'];
var s;
logic();
var start 

function logic(){
    
    setInterval(changeshape,(Math.floor(Math.random()*500)+1200));

}
function response(){ 
    var end = Date.now(); 
    console.log(end);
    var diff = end - start; 
    var diff1 = diff / 600; 
    document.getElementById('response').innerHTML ="response time: "+ diff1; 
} 
function changecolor(){
    var a = Math.floor(Math.random()*256);
    var b = Math.floor(Math.random()*256);
    var c = Math.floor(Math.random()*256);
    return "rgb(" +a+", "+ b+", " +c+")";
}
function changeshape(){
    start = new Date().getTime();
    var cs= document.getElementById('whatyouwant');
    cs.classList.remove(arr[s]);
    s = Math.floor(Math.random()*5);
    var mar1 = Math.floor(Math.random()*500);
    var mar2 =Math.floor(Math.random()*700);
    var mar3 =Math.floor(Math.random()*700);
    var mar4 =Math.floor(Math.random()*500);

    console.log(arr[s]);
    cs= document.getElementById('whatyouwant');
    cs.classList.add(arr[s]);
    cs.style.marginTop= mar1+"px";
    cs.style.marginLeft=mar2+"px";
    cs.style.marginRight = mar4+"px";
    cs.style.marginBottom =mar3+"px";   
    cs.style.backgroundColor = changecolor();
    
   
}
