'use strict';

    document.addEventListener('DOMContentLoaded', function() {
    
    let canvas = document.getElementById("canvas");
    let context = canvas.getContext("2d");
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
        console.log('couleur');
        let color = this.dataset.color;
        context.strokeStyle = color;
    }
   
        function changeLine(){
        console.log('line');
        let line = this.dataset.line;
        context.lineWidth = line;
    }
    
    function clear(){
        console.log('clear');
        context.clearRect(0,0,canvas.width,canvas.height);
   
  
    }
    
    canvas.addEventListener('mousemove', draw); // déclenche un évenement au mouvement de la souris.
    canvas.addEventListener('mousedown', click);
     //  declenche un évenement pendant que l'on est cliqué sur le bouton
    canvas.addEventListener('mouseout',stop);
    canvas.addEventListener('mouseup', stop);
    del.addEventListener('click', clear);//  L'événement se produit lorsque le pointeur est sorti
    for( let i = 0; i < colors.length ; i++ )
    {
        colors[i].addEventListener('click' , changeColor);
    }
    
      for( let i = 0; i < lines.length ; i++ )
    {
        lines[i].addEventListener('click' , changeLine);
    }
    
});