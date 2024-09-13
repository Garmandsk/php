let keyword = document.getElementById("keyword");
let tombolCari = document.getElementById("tombol-cari");
let container = document.getElementById("container");

keyword.addEventListener("keyup", function(){

    console.log(keyword.value);
    
    /* Buat Objek ajax */
    var xhr = new XMLHttpRequest();
    
    /* Cek Kesiapan ajax dengan file yang dituju */
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            console.log(xhr.responseText);
        }else{
            console.log(`Error: ${xhr.status}`);
        }
    }
    
    /* KESALAHAN MULAI MUNCUL SAAT MENGIRIM APA YANG ADA DI FILE YANG DITUJU */
    xhr.open("GET", "a/halo.txt", true);
    xhr.send();
});

