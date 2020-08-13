'use strict';

    document.addEventListener('DOMContentLoaded', function() {
    
    let canvas = document.getElementById("canvas");
    let colorspicker = document.getElementById("colors");
    let context = canvas.getContext("2d");
    let context1 = colorspicker.getContext("2d");
    let drawing = false;
    let colors = document.querySelectorAll(".color");
    let lines = document.querySelectorAll(".line");
    let del = document.querySelector(".clear");
    
   
    function click () {
        let rectangle = canvas.getBoundingClientRect();// récupère les coordonées de la souris.
        let x = event.clientX - rectangle.x;
        let y = event.clientY - rectangle.y;
        context.beginPath();
        context.moveTo(x,y); // repositionne pour un nouveau tracer.
        drawing = true;
  }
     
    function draw () {
        if (drawing ==true){
        let rectangle = canvas.getBoundingClientRect();
        let x = event.clientX - rectangle.x;
        let y = event.clientY - rectangle.y;
    
       
        context.lineTo(x, y); //trace un trait de position x,y.
        context.stroke();
        }
        }
    
    
    function stop () {
        drawing = false;
        context.closePath();
        console.log('ok');
        }
        
    function changeColor(){
       
        let color = this.dataset.color;
        context.strokeStyle = color;
    }
   
        function changeLine(){
        
        let line = this.dataset.line;
        context.lineWidth = line;
    }
    
    function clear(){
        
        context.clearRect(0,0,canvas.width,canvas.height);
    }
    
    function picker() {
    
        let rectangle = colorspicker.getBoundingClientRect();
        let x = event.clientX - rectangle.x;
        let y = event.clientY - rectangle.y;
        let data = context1.getImageData(x,y,1,1).data;
        
        
        context.strokeStyle = `rgba(${data[0]}, ${data[1]}, ${data[2]}, ${data[3] / 255 } )`;
    }
    
    canvas.addEventListener('mousemove', draw); // déclenche un évenement au mouvement de la souris.
    canvas.addEventListener('mousedown', click);   
    //  declenche un évenement pendant que l'on est cliqué sur le bouton
    canvas.addEventListener('mouseout',stop); // L'événement se produit lorsque le pointeur est sorti
    canvas.addEventListener('mouseup', stop);
    del.addEventListener('click', clear);
    colorspicker.addEventListener('click', picker);
    for( let i = 0; i < colors.length ; i++ )
    {
        colors[i].addEventListener('click' , changeColor);
    }
    
      for( let i = 0; i < lines.length ; i++ )
    {
        lines[i].addEventListener('click' , changeLine);
    }
    
    let gradient = context1.createLinearGradient(0,0,colorspicker.width,0); //gradient crée des dégradés
    gradient.addColorStop(0,    "rgb(255,   0,   0)");      //ajoute une couleur
    gradient.addColorStop(0.15, "rgb(255,   0, 255)");
    gradient.addColorStop(0.33, "rgb(0,     0, 255)");
    gradient.addColorStop(0.49, "rgb(0,   255, 255)");
    gradient.addColorStop(0.67, "rgb(0,   255,   0)");
    gradient.addColorStop(0.84, "rgb(255, 255,   0)");
    gradient.addColorStop(1,    "rgb(255,   0,   0)");
 
    context1.fillStyle = gradient;
    context1.fillRect(10,10,200,100);
    
});