import './bootstrap';

// === TAMBAHKAN KODE INI DARI SINI ===
document.addEventListener("DOMContentLoaded", function() {
    // Cek apakah elemen dengan id 'cycling-text' ada di halaman
    if (document.getElementById('cycling-text')) {
        new Typed('#cycling-text', {
            strings: ['website yang kreatif.', 'backend yang kuat.', 'pengalaman digital.'],
            typeSpeed: 50,  // Kecepatan mengetik
            backSpeed: 30,   // Kecepatan menghapus
            loop: true,      // Mengulang terus menerus
            backDelay: 2000  // Jeda sebelum mulai menghapus
        });
    }
});
// === SAMPAI SINI ===