var p = prompt("Batu/Kertas/Gunting");

var comp = Math.random();
console.log(comp);

if(comp < 0.34)         comp = "Batu";
else if(comp < 0.67)    comp = "Kertas";
else                    comp = "Gunting";

console.log(comp);

var hasil = "";
if(p == comp){
    hasil = "SERI";
} else if(p == "Batu"){
    hasil = comp == "Gunting" ? "MENANG" : "KALAH";
} else if(p == "Kertas"){
    hasil = comp == "Batu" ? "MENANG" : "KALAH";
}else if(p == "Gunting"){
    hasil = comp == "Kertas" ? "MENANG" : "KALAH";
}else{
    hasil = "Pilihan anda salah";
}
alert(hasil);