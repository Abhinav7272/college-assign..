let status ="ON";
function game(){
    const val = document.getElementById('button');
    const image=document.getElementById('image');
    if(status=="ON"){
        status = "OFF";
        image.src= "ONbulb.jpg";
        document.getElementById('button').innerHTML = "OFF";
    }
    else{
        status = "ON" ;
        image.src="OFFbulb.jpg";
        document.getElementById('button').innerHTML = "ON";
    }
}