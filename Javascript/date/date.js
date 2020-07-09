const aujourdhui= new Date();
console.log(aujourdhui);
const day =aujourdhui.getDay();
const mois = aujourdhui.getMonth();
const jour = aujourdhui.getDate();
const weekdays = ['dimanche','lundi','mardi','mercredi','jeudi','vendredi','samedi'];
const months = ['janvier','fevrier','mars','avril','mai','juin','juillet','août'
,'septembre','octobre','novembre','decembre'];
const years = aujourdhui.getFullYear();
console.log (months [mois] , weekdays [day] ,years , jour);
document.write(months [mois] , weekdays [day] ,years , jour);