
// Entrees
let note,moyenne,admis;
let somme = 0;
let nbr = parseInt(prompt('donner le nombre de notes à saisir'))

for(let i =0; i<nbr; i++)
{

    note = parseInt(prompt('saisir la note '+(i+1)));
    somme += note;
}
moyenne = somme/nbr;

if(moyenne>=10) admis=true;
else admis=false;


if(admis == true) alert("admis")
else alert("ajourné")


/*

let note1 = prompt('saisir la note 1'); // saisie par l'utilisateur
let note2 = prompt('saisir la note 2');// saisie par l'utilisateur

note1 = parseInt(note1);
note2 = parseInt(note2);

let somme,moyenne,admis;
let message = 'la moyenne est : ';

// Traitements
somme = note1 + note2;
moyenne = somme/2;

if(moyenne>=10) {
    admis=true;
}
else {
    admis=false;
}

console.log('admis',admis)
// sortie
console.log('la moyenne : ',moyenne)
console.log('la moyenne : '+moyenne)

//console.log(typeof(moyenne)); // number
//console.log(typeof(message)) // string


// alert(message+moyenne+'/20')

//alert('la moyenne est : '+(moyenne+1)+'/20')

if(admis==true){
    alert('vous etes admis')
}
else {
    alert('vous etes ajourné')
}
*/


/*let cpt = 12;
console.log("boucle 1")
while(cpt<10){
    cpt++;
    console.log("tour numero : ",cpt)
}

console.log("boucle 2   ")
cpt = 12;
do{
    cpt++;
    console.log("tour numero : ",cpt)
}while(cpt<10)

let message = '';
while(message != 'fin'){
    message = prompt('saisir le msg')
    if(message != 'fin') {
        alert('le mot est erroné')
    }
}*/

/*for(let cpt=0;cpt<10;cpt++){
    console.log("tour numero : ",cpt)
}*/
