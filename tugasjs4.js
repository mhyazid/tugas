let frm = document.getElementById('input');
let jabatan = ["Manager", "Asisten Manager", "Staff"];
let pilihJabatan = `<option value=""> Pilih Jabatan</option>`;
for (let p in jabatan){
    pilihJabatan += `<option value="${jabatan[p]}">${jabatan[p]}</option>`;
}

let statusMenikah = ["Menikah","Belum Menikah"];
let pilihStatus = `<option value=""> Pilih Status</option>`;
for(let p in statusMenikah){
    pilihStatus += `<option value="${statusMenikah[p]}">${statusMenikah[p]}</option>`;
}


frm.jabatan.innerHTML = pilihJabatan;
frm.statusMenikah.innerHTML = pilihStatus

function cetak(){
    let nama = frm.namapegawai.value;
    let jabatan = frm.jabatan.value;
    let status = frm.statusMenikah.value;


    var gajipokok=0;
    if(jabatan == "Manager"){
        gajipokok = 15000000;
    }else if(jabatan == "Asisten Manager"){
        gajipokok = 10000000;
    }else if (jabatan == "Staff"){
        gajipokok = 50000000;
    }
    
    var tpokok = 0.15 * gajipokok;
    var bpjs = 0.1 * gajipokok;
    var tkeluarga = (status == "Menikah")? 0.2 * gajipokok:0;
    var gajitotal = gajipokok + tpokok + bpjs + tkeluarga
    let gajiTotalFormatted = gajitotal.toLocaleString('id-ID');

    
    //let tablehasil = `<center><table border="1"><thead><tr><th>Nama Pegawai</th><th>Jabatan</th><th>Status</th></tr></thead><tbody><tr><td>${nama}</td><td>${jabatan}</td><td>${status}</td></tr></tbody><tfoot><tr><td>Gaji Total</td><td></td><td>Rp ${gajitotal}</td></tr></tfoot></table></center>`
    let tablehasil = `<center><table border="1" style="text-align: center;"><thead><tr><th>No</th><th>Nama Pegawai</th><th>Jabatan</th><th>Status</th></tr></thead><tbody><tr><td>1</td><td>${nama}</td><td>${jabatan}</td><td>${status}</td></tr></tbody><tfoot><tr><td colspan="3">Gaji Total</td><td colspan="3">Rp ${gajiTotalFormatted}</td></tr></tfoot></table></center>`;



    Swal.fire({
        width:500,
        title: '<strong>Detail Gaji</strong>',
        icon: 'info',
        html: tablehasil
    })
    //let hasil = document.getElementById('hasil')
    //hasil.innerHTML = tablehasil
}

