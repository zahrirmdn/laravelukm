/*
 * Catatan:
 * Gunakan fungsi goToHome() untuk menampilkan halaman home
 * Gunakan fungsi goToLogin() untuk menampilkan halaman login
 * Gunakan fungsi showPopUp() untuk menampilkan pop up error
 */

const loginFormElement = document.querySelector('#loginForm');
const inputEmailElement = document.querySelector('#inputEmail');
const inputPasswordElement = document.querySelector('#inputPassword');

// email untuk mahasiswa
const expectedEmail = 'hamid@vokasi.ac.id';
const expectedPassword = 'hahaha';

// email untuk admin
const email = 'admn@unair.ac.id';
const pass = 'admin';

loginFormElement.addEventListener('submit', function(event) {
    event.preventDefault();
    // TODO 1 : Mendapatkan input email dan password pengguna dari form.
    const inputEmail = inputEmailElement.value;
    const inputPassword = inputPasswordElement.value;
  
    /* TODO 2 : Buat Logika perbandingan dengan kondisi:
       Jika variabel email identik dengan expectedEmail dan password identik dengan expectedPassword, panggil fungsi goToHome().
       Jika tidak, maka panggil fungsi showPopUp().
     */
       if (inputEmail == expectedEmail && inputPassword == expectedPassword) {
        goToHome();
    } else if(inputEmail === email && inputPassword === pass){
        goToOfice();
    }else{
        showPopUp();
    }
});
