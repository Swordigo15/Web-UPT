//! Prototype
function mhs(nama, energi){
    this.nama = nama;
    this.energi = energi;

    return this;
}

mhs.prototype.makan = function(porsi){
    this.energi += porsi;
    return this.nama + ' makan nasi ' + porsi + ' porsi.';
}

mhs.prototype.main = function(jam){
    this.energi -= jam;
    return this.nama + ' main ' + jam + ' jam.';
}

mhs.prototype.tidur = function(jam){
    this.energi += jam * 2;
    return this.nama + ' tidur ' + jam + ' jam.';
}

let annys = new mhs('Annys', 10);

//! Class
class Mahasiswa{
    constructor(nama, energi){
        this.nama = nama;
        this.energi = energi;
    }

    makan(porsi){
        this.energi += porsi;
        return this.nama + ' makan nasi ' + porsi + ' porsi.';
    }

    main(jam){
        this.energi -= jam;
        return this.nama + ' main ' + jam + ' jam.';
    }

    tidur(jam){
        this.energi += jam * 2;
        return this.nama + ' tidur ' + jam + ' jam.';
    }
}

let faza = new Mahasiswa('faza', 12);