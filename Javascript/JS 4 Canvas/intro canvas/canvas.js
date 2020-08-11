'use strict';

document.addEventListener('DOMContentLoaded', function() {
    
    let canvas = document.getElementById("canvas");

    let context = canvas.getContext("2d");
    
          /****
         *  x = 0 , y = 0          x = 500 , y = 0
         *  ----------------------
         *  |                    |
         *  |    x = 250 y = 150 |
         *  |                    |
         *  ----------------------
         *  x = 0 , y = 300      x = 500 , y = 300
    
        /* exemple cours
        context.fillStyle = 'rgb(100,100,0)';
        context.fillRect(20, 10, 150, 100);

        context.beginPath();
        context.strokeStyle = "blue";
        context.lineWidth = 10

        context.moveTo(50, 50);
        context.lineTo(100, 100);
        context.lineTo(250, 100);
        context.stroke();
        context.closePath();

        context.beginPath();
        context.strokeStyle = "purple";
        context.lineWidth = 5
        context.moveTo(300, 150);
        context.lineTo(0, 0);
        context.stroke();
        context.closePath();
    */
    
       //carré
       
        context.moveTo(50, 50);
        context.lineTo(100, 50);
        context.lineTo(100, 100);
        context.lineTo(50, 100);
        context.lineTo(50, 50);
   
      
    
    //triangle
      context.moveTo(325, 125);
        context.lineTo(300, 200);
        context.lineTo(350, 200);
        context.lineTo(320, 120);
        
         // losange

        context.moveTo(200, 50);
        context.lineTo(150, 100);
        context.lineTo(200, 150);

        context.lineTo(250, 100);
        context.lineTo(200, 50);
        context.lineTo(200, 150);
        context.moveTo(150, 100);
        context.lineTo(250, 100);

      
     // grille

        context.moveTo(400, 400);
        context.lineTo(400, 600);
        context.lineTo(600, 600);
        context.lineTo(600, 400);
        context.lineTo(400, 400);

        // lignes horizontales

        for (let i = 420; i <= 580; i += 20) {
            
            context.lineTo(400, i);
            context.lineTo(600, i);
            context.lineTo(600, i + 20);
            context.lineTo(400, i + 20);
            /*
            context.moveTo(400,i);
            context.lineTo(600,i)
            */
        }

        for (let i = 580; i >= 420; i -= 40) {
            context.lineTo(i, 600);
            context.lineTo(i, 400);
            context.lineTo(i - 20, 400);
            context.lineTo(i - 20, 600);
        }



    //spirale
          // spirale
        
        let x = 300;
        let y = 200;
        
        context.moveTo(x,y);
        /*
        for ( let i = 0 ; i <= 400; i += 50)
        {
            x -= i;
            context.lineTo(x,y);
            y += i;
            context.lineTo(x,y);
            i -= 50;
            x += i;
            context.lineTo(x,y);
            y -= i;
            context.lineTo(x,y);
        }
        */
        
        let gap = 30;
        for (let i = 0; i < 5; i++) {
    
            context.lineTo((y - i * gap), (x + i * gap));
            context.lineTo((y - i * gap), (y - i * gap));
            context.lineTo((x + i * gap), (y - i * gap));
            context.lineTo((x + i * gap), (x + i * gap + gap));
    
        }
      
    


    context.stroke();
});