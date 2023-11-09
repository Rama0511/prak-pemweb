/*
Nama  : Idza Ramaulkim
NIM   : 121140152
Kelas : RB 
*/
const nilai = prompt("Masukan Nilai:");
let ganjil = 0
let genap = 0

console.log("User input: " + nilai);

for(let a=1; a<=nilai; a++){
    if(a % 2 === 0){
        genap = genap + 1
    }
    else{
        ganjil = ganjil + 1
    }
}

console.log(`Nilai Genap: ${genap}  Nilai Ganjil: ${ganjil}`);
