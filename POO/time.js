'use strict';

class Time {
    constructor() {
        this.seconde = 0;
        this.minutes = 0;
        this.hours = 0;
    }
    
    setTime(hours, minutes, seconde){
        this.seconde = seconde;
        this.minutes = minutes;
        this.hours = hours;
    }
  
    
    addSecond(seconde){
    
     
       if (this.seconde === 59) {
                this.minutes++;
                this.seconde = 0;

            if (this.minutes === 60 ){
                this.hours ++;
                this.minutes= 0;
            }
           else{
               this.seconde++;
           }
            }
            }
    
    
    
    
    addSeconds(secondes){
    //si en argument il a "40" ajouter 40 secondes
    //quand on dépasse 60 secondes on met a zero puis rajoute le reste a la minutes suivante.
    
    this.seconde+=secondes;
      /*      while(secondes <=60){
           if (this.seconde === 60) {
                this.minutes++;
                this.seconde = 0;

            if (this.minutes === 60 ){
                this.hours ++;
                this.minutes= 0;
            }
         
            }
            }*/
         
      if (secondes > 60){
           this.minutes =(secondes/60);
           this.seconde =(secondes/60);
           
       
             
           if (secondes > 3600 ){
            this.hours = (secondes /60)/60;
            this.minutes = (this.hours/ 60);
            this.seconde = (this.minutes/60);
                
       
    }
    }
    }
    }      
    
    
  
    /*this.seconds += seconds;
        let extraMinutes = Math.floor(this.seconds / 60);
        this.seconds = this.seconds % 60;
        this.minutes += extraMinutes;
        let extraHours = Math.floor(this.minutes / 60);
        this.minutes = this.minutes % 60;
        this.hours += extraHours;
*/

let time = new Time();
  
    
    time.setTime(0, 0, 10);
    time.addSeconds(3590); 
    console.log(time);
    time.setTime(11, 27 , 10);
    time.addSecond();
    console.log(time);
    time.setTime(12, 0, 0);
    time.addSecond();
    console.log(time);
    
  