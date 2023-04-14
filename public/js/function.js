// declaration de la fonction
/*
const checkAdmis = function (nbr){
    let note,moyenne,admis;
    let somme = 0;

    for(let i =0; i<nbr; i++)
    {
        note = parseInt(prompt('saisir la note '+(i+1)));
        somme += note;
    }

    moyenne = calaculMoy(somme,nbr)

    if(moyenne>=10) admis=true;
    else admis=false;

    return admis;
}

const calaculMoy = function (somme,nbr){
    moyenne = somme / nbr;
    return moyenne;
}


//appel et execution de la fonction
let nbr = parseInt(prompt('donner le nombre de notes à saisir'))
let result1 = checkAdmis(nbr)
console.log(result1)

/!*let tab1 = [];
console.log(tab1)
tab1.push(2);
tab1.push(12);
tab1.push(5);
tab1.push(10);
tab1.push(5);
console.log(tab1)
tab1[1] = 'new 12';
console.log(tab1)

for(let i=0; i < tab1.length; i++){
    console.log('la colone ',i, 'contient : ',tab1[i])
    if(tab1[i] == 5) tab1[i] = 0;
}
console.log(tab1)*!/



let eutudiant1 = ['addresse','warass','zinneddine',20];


// console.log('votre nom :',eutudiant1[0])
// console.log('votre prenom :',eutudiant1[1])

let etudiant1Obj = {
    tel : "055586765",
    adresse : 'addresse',
    nom : 'warass',
    prenom : 'zinneddine',
    age : 20,
    showName : function (){
        alert('bienvenu '+this.nom)
    }
}
console.log(etudiant1Obj)
etudiant1Obj.nom = 'new nom';
etudiant1Obj.showName()


*/

/*

let element1 = document.querySelector('#testdiv1');

setTimeout(function ()
{
    element1.style.background = 'red'
},3000)

*/

// Programme de calcule de la somme


// declaration de la fonction de calcule de la somme
const somme = function (a,b){
    let s;
    s= a+b;
    return s;
}

// execution de la fonction de calcule de la somme
let s1 = somme(6,8)
console.log(s1);





const tableInsert = function (tabLength,valUp,valInit){
    let tab1 = [];
    let valAug = valInit;

    for(let i = 0; i<tabLength; i++){
        tab1.push(valAug)
        valAug+=valUp;
    }

    return tab1;
}

let result1 = tableInsert(2,3,0);
console.log(result1)
console.log(tableInsert(5,4,100))























