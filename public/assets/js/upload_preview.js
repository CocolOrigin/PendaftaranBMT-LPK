// (function () {
document.addEventListener("DOMContentLoaded", function () {
  // Ambil elemen input file dan img untuk preview KTP
  const inputKTP = document.getElementById('ktp');
  const previewKTP = document.getElementById('previewKTP');

  // Tambahkan event listener ketika user memilih file KTP
  inputKTP.addEventListener('change', function () {
    // Pastikan ada file yang dipilih
    if (inputKTP.files && inputKTP.files[0]) {
      const reader = new FileReader();

      // Setelah file selesai dibaca, tampilkan preview gambar KTP
      reader.onload = function (e) {
        previewKTP.src = e.target.result;
        previewKTP.style.display = 'block'; // Tampilkan gambar KTP
      };

      // Baca file gambar sebagai URL data
      reader.readAsDataURL(inputKTP.files[0]);
    }
  });

  // Ambil elemen input file dan img untuk preview KK
  const inputKK = document.getElementById('kk');
  const previewKK = document.getElementById('previewKK');

  // Tambahkan event listener ketika user memilih file KK
  inputKK.addEventListener('change', function () {
    // Pastikan ada file yang dipilih
    if (inputKK.files && inputKK.files[0]) {
      const reader = new FileReader();

      // Setelah file selesai dibaca, tampilkan preview gambar KK
      reader.onload = function (e) {
        previewKK.src = e.target.result;
        previewKK.style.display = 'block'; // Tampilkan gambar KK
      };

      // Baca file gambar sebagai URL data
      reader.readAsDataURL(inputKK.files[0]);
    }
  });

    // Ambil elemen input file dan img untuk preview KTP
    const inputIjazah = document.getElementById('ktp');
    const previewIjazah = document.getElementById('previewIjazah');
  
    // Tambahkan event listener ketika user memilih file KTP
    inputIjazah.addEventListener('change', function () {
      // Pastikan ada file yang dipilih
      if (inputIjazah.files && inputIjazah.files[0]) {
        const reader = new FileReader();
  
        // Setelah file selesai dibaca, tampilkan preview gambar KTP
        reader.onload = function (e) {
          previewIjazah.src = e.target.result;
          previewIjazah.style.display = 'block'; // Tampilkan gambar KTP
        };
  
        // Baca file gambar sebagai URL data
        reader.readAsDataURL(inputIjazah.files[0]);
      }
    });
      // Ambil elemen input file dan img untuk preview KTP
  const inputFoto = document.getElementById('foto');
  const previewFoto = document.getElementById('previewFoto');

  // Tambahkan event listener ketika user memilih file KTP
  inputKTP.addEventListener('change', function () {
    // Pastikan ada file yang dipilih
    if (inputFoto.files && inputFoto.files[0]) {
      const reader = new FileReader();

      // Setelah file selesai dibaca, tampilkan preview gambar KTP
      reader.onload = function (e) {
        previewFoto.src = e.target.result;
        previewFoto.style.display = 'block'; // Tampilkan gambar KTP
      };

      // Baca file gambar sebagai URL data
      reader.readAsDataURL(inputIjazah.files[0]);
    }
  });

    // Ambil elemen input file dan img untuk preview KTP
    const inputGambar = document.getElementById('gambar');
    const previewGambar = document.getElementById('previewGambar');
  
    // Tambahkan event listener ketika user memilih file KTP
    inputGambar.addEventListener('change', function () {
      // Pastikan ada file yang dipilih
      if (inputGambar.files && inputGambar.files[0]) {
        const reader = new FileReader();
  
        // Setelah file selesai dibaca, tampilkan preview gambar KTP
        reader.onload = function (e) {
          previewGambar.src = e.target.result;
          previewGambar.style.display = 'block'; // Tampilkan gambar KTP
        };
  
        // Baca file gambar sebagai URL data
        reader.readAsDataURL(inputGambar.files[0]);
      }
    });
});
// })();

