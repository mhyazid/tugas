function dataInput() {
    let forms = document.getElementById('form');
    let nama = forms.nama.value;
    let pekerjaan = forms.pekerjaan.value;
    let hobby = forms.hobby.value;

    //console.log(nama,pekerjaan,hobby)
    let list = document.createElement('ol')

    let namaHasil = document.createElement('li');
    namaHasil.textContent=nama;
    list.appendChild(namaHasil);

    let pekerjaanHasil = document.createElement('li');
    pekerjaanHasil.textContent=pekerjaan;
    list.appendChild(pekerjaanHasil);

    let hobbyHasil = document.createElement('li');
    hobbyHasil.textContent=hobby;
    list.appendChild(hobbyHasil);

    let output = document.getElementById('hasil');
    if(nama && pekerjaan && hobby !="")output.appendChild(list);
    else{output.innerHTML="<h2>Masukkan nama, pekerjaan, dan hobby dengan benar</h2>"}

    

}

function clearHasil(){
    //console.log("test")
    let output = document.getElementById('hasil');
    output.innerHTML=""
}