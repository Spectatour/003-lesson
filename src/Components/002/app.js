console.log("Hello 002");


const hello = function(param, a){               // deklaracija nevykdoma kol neiskviesta
    // console.log('hello Fun');
    return param + ' *** ' + a;
}

console.log('code');

                                // funkcija gali buti iskviesta daug kartu
                            // funkcijos iskvietimas/vykdymas
const hello2 = hello('racoon');
// hello();
// hello();
console.log(hello2);


console.log(hello('beaver', 'fox'));
// hello2();

console.clear();

function fancy0() {
    return 'Fancy0';
}

const fancy = function(){               
    return 'Fancy';
}

const fancy1 =() => {
    return 'Fancy1';
}

const fancy2 = () => 'Fancy2';

const fancy3 = a => 'Fancy' + a;

console.log(fancy0());
console.log(fancy());
console.log(fancy1());
console.log(fancy2());
console.log(fancy3(3));

console.clear();


const fun = (fn) => {
    const result = fn();
    return result;
}


const miau = () => {
    return 'Miau miau';
}

const colors = [
    'pink',
    'crimson',
    'skyblue',
    'coral',
]

const animals = [
    'racoon',
    'foxes',
    'beaver',
    'wolf',
];

const print = what => {
    console.log('*** ' + what + ' ***');
}


// for (let i = 0; i < colors.length; i++) {
//     print(colors[i]);
// }

// for (let i = 0; i < animals.length; i++) {
//     print(animals[i]);
// }

// const myForeach = (arr,fn) => {
//     for (let i = 0; i < arr.length; i++) {
//         fn(arr[i]);
//     }
// };

// myForeach(colors, print);
// myForeach(animals, print);

Array.prototype.myForEach = function(fn){
    for (let i = 0; i < this.length; i++) {
        fn(this[i]);
    }
};

// colors.myForEach(print);

// colors.forEach(what => console.log('*** ' + what + ' ***'));

const animals2 = [
    {id: 5, title: 'racoon'},
    {id: 7, title: 'foxes'},
    {id: 102, title: 'wolf'},
    {id: 88, title: 'beaver'},
    {id: 20, title: 'wolf'},
    {id: 77, title: 'wolf'},
];


console.clear();


const WAT1 = animals.forEach(v => console.log(v));
const WAT2 = animals.map((v, i) => v + '---' + i);
const WAT3 = animals.filter(v => v != 'foxes'); // jeigu != ismetam is masyvo
const WAT4 = animals.find(v => v == 'racoon');

const WAT02 = animals2.map((v, i) => v.title + '---' + i);      // MAP/FILTER/FIND originalui nedaro nieko, padaro kopija
const WAT03 = animals2.filter(v => v.title != 'foxes');
const WAT04 = animals2.find(v => v.id == 88);

//SORT pakeicia originala

// animals2.sort((a, b) => a.id - b.id);                        jeigu skaiciuot i kita puse, sukeist vietom.
// animals2.sort((a, b) => b.title.localeCompare(a.title));

// animals2.sort((a, b) => {
//     if(a.id < b.id) return -1;                   skaiciavimas su skaitmenimis
//     if(a.id > b.id) return 1;
//     return 0;
// })

animals2.sort((a,b) => {
    if (a.title < b.title) return -1;
    if (a.title > b.title) return 1;
    return a.id - b.id;
});

console.log(animals2);


// console.log(WAT1);
// console.log(WAT2);
// console.log(WAT3);
// console.log(WAT4);

// console.log(WAT02);
// console.log(WAT03);
// console.log(WAT04);



// console.log(fun(miau));

console.clear();

let A = 5;
let B = A;                  // pagal reiksme
A++;
console.log(A,B);

const C = [5, 7];
const D = [...C];    // D = [...C] taip butu padaroma kopija (spreadas)        
// C.push(6);                  // objektai priskiriami pagal referenca arba nuoroda 
// D.push(8);

const V = {id: 77, title: 'wolf', show:false};

const V2 = {...V, show:true};

console.log(V2);
// console.log([...C], {...C });

console.clear();

const sum= (a, b) => {
    console.log(a + b);
};
sum(...C);

console.clear();

const obj = {animalId: 77, Title: 'wolf', Show:false};

const {Title} = obj;
const animalID = obj.animalId;

console.log(Title,animalID);

const obj1 = {Title,animalID};

console.log(obj1);

const arr45 = [45, 25, 444, 888];

const [F,Y, L] = arr45;

console.log(F, Y, L);