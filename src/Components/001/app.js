// console.log(`Hello`);


function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);   // susirandam random funkcija google
}

// Math.floor(Math.random() * 11 + 1);

const arr = []; // <--------------------------------

for (let i = 0; i < 10; i++) {                          //kadangi reikia skaiciu tarp/iki naudojam for cikla, pries tai susikuriam
    arr.push(getRandomIntInclusive(1,11));              // tuscia masyva kad turetume kur tuos skaicius det

}   // arr.push(getRandomIntInclusive() i savo sukurta masyva supushinsim gauta rezultata

// console.log(arr);      < 10 random skaiciu nuo 1-11 atsakymas>

                                // _ reiskia tuscia funkcija be argumentu ( kintamasis kurio nereikia bet reikalauja sintakse)

const arr2 = [...Array(10)].map(_ => Math.floor(Math.random() * 11 + 1));

        // array padaro 10 ilgio array. ir toliau funkcija pakeicia tuscia 10 ilgio array i random generated skaicius
        
console.log(arr2);
/*
number
string
boolean
object
*/
let a = 1; // numberis
// let a = '1';  // stringas
// a++; // jeigu prie stringo padesim a++ bus automatinis konvertavimas atgal i numberi
// a--;

a= +a;

console.log(a + 1);

// console.log(arr2);

// console.log(typeof arr2);

// undefined, null, NaN, 0, '' (empty string), and false - padaro False reiksme

if ('') {
    console.log('Yes');
} else {
    console.log('No');
}