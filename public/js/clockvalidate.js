

// ALGORITMA(target 3 hari) = 
      // 1. pastikan input hanya menerima inputan number dan char titik dua ":" (realtime)
      // 2. max element input hanya menerima 5 chars
      // 3. buat logic perandingan waktu mulaidan selesai dengan membuang char titik dua ":"
      // 4. mainkan dom 
      // 5. poles dom dan lainlain 

      // get Element__
      const inputMulai = document.getElementById("inputMulai");
      const inputSelesai = document.getElementById("inputSelesai");

      // eventListener
      inputMulai.addEventListener("input", () => {
        // cekMulaiKeSelesai(vainputMulai.value, inputSelesai.value);
        inputMulai.value = validateTimeFormat(inputMulai.value);
      });
      inputSelesai.addEventListener("input", () => {
        // cekSelesaiKeMulai(inputSelesai.value, inputMulai.value);
        inputSelesai.value = validateTimeFormat(inputSelesai.value);
      });

      // FUNCTION 
      function cekMulaiKeSelesai(mulai, selesai) {
        //  console.log("mulai : " + mulai + " - " + selesai);
      }
      function cekSelesaiKeMulai(selesai, mulai) {
        //  console.log("selesai : " + selesai + " - " + mulai);
      }

    //   function validateTimeFormat(value) {
    //     // Hapus semua spasi
    //     value = value.replace(/\s+/g, "");

    //     // Hapus semua karakter selain angka dan ":"
    //     value = value.replace(/[^0-9:]/g, "");

    //     // Jika panjang lebih dari 5 karakter, potong ke 5
    //     if (value.length > 5) {
    //         value = value.slice(0, 5);
    //     }
      
    //     // Hapus ":" jika ada lebih dari satu
    //     let colonCount = (value.match(/:/g) || []).length;
    //     if (colonCount > 1) {
    //         value = value.replace(/:/g, "");
    //     }
      
    //     // Jika panjangnya 2 dan belum ada ":" tambahkan ":"
    //     if (value.length === 2 && !value.includes(":")) {
    //         value = value + ":";
    //     }
      
    //     return value;
    //   }
