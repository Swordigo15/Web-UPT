// import './bootstrap';

// alert
// alert("Hello World");

// prompt
// var nama = prompt('Masukkan Nama : ');

// confirm
// var tes = confirm("Anda yakin?")

var x = 10;
console.log(x);
// alert(tes ? "Yes" : "No");

var nama;
var ulang = true;
while(ulang){
    nama = prompt("Masukkan Nama : ");
    console.log('Nama anda adalah ' + nama);

    ulang = confirm("Ulang lagi?")
}

var angka = parseInt(prompt('Masukkan Angka'));

switch(angka){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        console.log(jumlahVolumeKubus(angka, 5));
        break;
    case 6:
        console.log(jumlah(1,2,3,4,5,6));
    default:
        break;
}

function jumlahVolumeKubus(a, b){
    return (a * a * a) + (b * b * b);
}

//VLA
function jumlah(){
    var hasil = 0;
    for(var i=0; i<arguments.length; i++) hasil += arguments[i];

    return hasil;
}

//! array
var arr1 = [1, 3, 5];

arr1[3] = 6     //add
arr1.pop();     //delete belakang
arr1.push(7);   //add belakang
arr1.unshift(-1)//add depan
arr1.shift();   //delete depan
//arr1 = 1, 3, 5, 7

//! splice(indexAwal, jmlhYgDihapus, elemenBaru1, elemenBaru2, ...);
arr1.splice(2, 0, 11, 12, 13);
//arr1 = 1, 3, 11, 12, 13, 5, 7
arr1.splice(2, 2, 22, 23);
//arr1 = 1, 3, 22, 23, 13, 5, 7

//! slice(awal, akhir);
var arr2 = arr1.slice(2,5);
//arr2 = 22, 23, 13

//! join
console.log(arr1.join(' - '));
console.log(arr2.join(' : '));

//! forEach
var cetak = function(e) { console.log(e) }

// arr1.forEach(function(e){ console.log(e) });
arr1.forEach(cetak);

var arrName = ['Annys', 'Faza', 'Nasser', 'Addin'];
arrName.forEach(function(e , i){
    //e = elemen
    //i = index array
    console.log("No. " + i + " adalah " + e);
});

//! map
var mapAngka = arr1.map(function(e){ return e*2; });

console.log(mapAngka.join(' - '));

//! sort
console.log(arr1.join(' - '));
arr1.sort();
console.log(arr1.join(' - '));
arr1.sort(function(a,b){ return a-b; });
console.log(arr1.join(' - '));

//! filter
//arr1 = 1, 3, 22, 23, 13, 5, 7
var arrFilter = arr1.filter(function(x){
    return x > 5;
})

//! find
var arrFind = arr1.find(function(x){
    return x > 5;
})

console.log(arrFilter.join(', '));
console.log(arrFind);

//! Object
////! Object Literal
//a
var mhs = {
    nama   : 'Muhammad Annys',
    umur   : 18,
    ip     : [3.75, 3.9, 4],
    alamat : {
        jalan    : "Jalan Nusa Indah",
        kota     : "Kota Surakarta",
        provinsi : "Jawa Tengah"
    }
};
console.log(mhs.nama);
console.log(mhs.umur);
console.log(mhs.ip);
console.log(mhs.ip[2]);
console.log(mhs.alamat["provinsi"]);

//b
let mahasiswa = {
    nama   : 'Annys',
    energi : 10,
    makan  : function(jmlh){
        this.energi += jmlh;
        console.log('Halo ' + this.nama + ', Makan '  + jmlh + ' kali');
    }
}

////! Function Declaration
const methodMhs = {
    makan  : function(jmlh){
        this.energi += jmlh;
        console.log('Halo ' + this.nama + ', makan '  + jmlh + ' kali');
    },

    main  : function(jam){
        this.energi -= jam;
        console.log(this.nama + ' main '  + jam + ' jam');
    },

    tidur : function(jam){
        this.energi += jam * 2;
        console.log(this.nama + ' tidur '  + jam + ' jam');
    }
}

function CreateMhs(nama, umur, ip){
    var newMhs = {};
    newMhs.nama   = nama;
    newMhs.umur   = umur;
    newMhs.ip     = ip;
    newMhs.makan  = methodMhs.makan;
    newMhs.main   = methodMhs.main;
    newMhs.tidur  = methodMhs.tidur;
    return newMhs;
}

var mhs3 = CreateMhs('Faza', 19, [3.6, 3.8, 3.9]);

////! Contructor
function Mahasiswa(nama, umur, ip){
    this.nama = nama;
    this.umur = umur;
    this.ip = ip;
}

var mhs4 = new Mahasiswa('Nasser', 20, [2, 3, 4]);

////! Object.create
const methodMhs2 = {
    makan  : function(jmlh){
        this.energi += jmlh;
        console.log('Halo ' + this.nama + ', makan '  + jmlh + ' kali');
    },

    main  : function(jam){
        this.energi -= jam;
        console.log(this.nama + ' main '  + jam + ' jam');
    },

    tidur : function(jam){
        this.energi += jam * 2;
        console.log(this.nama + ' tidur '  + jam + ' jam');
    }
}

function CreateMhs2(nama, umur, ip){
    var newMhs = Object.create(methodMhs2);
    newMhs.nama   = nama;
    newMhs.umur   = umur;
    newMhs.ip     = ip;
    return newMhs;
}
////////////////////////////////////////////////////////////////////////////////////////////