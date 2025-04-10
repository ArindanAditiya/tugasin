// get Element__
const inputMulai = document.getElementById("inputMulai");
const inputSelesai = document.getElementById("inputSelesai");
const indicator = document.getElementById("indicator");

inputMulai.addEventListener("input", () => {
    inputMulai.value = validateTimeFormat(inputMulai.value);
});
inputSelesai.addEventListener("input", () => {
    inputSelesai.value = validateTimeFormat(inputSelesai.value);
});
setInterval(() => {
    timeGap(inputMulai.value, inputSelesai.value);
}, 1000);

// FUNCTIONS______
function timeGap(start, end) {
    // replace : char
    start = start.replace(/:/g, "");
    end = end.replace(/:/g, "");

    // convert to number
    start = Number(start);
    end = Number(end);

    if (end < start) {
        indicator.classList.remove("d-none");
    } else {
        indicator.classList.add("d-none");
    }
}

function validateTimeFormat(value) {
    // Hapus semua spasi
    value = value.replace(/\s+/g, "");

    // Hapus semua karakter selain angka dan ":"
    value = value.replace(/[^0-9:]/g, "");

    // Jika panjang lebih dari 5 karakter, potong ke 5
    if (value.length > 5) {
        value = value.slice(0, 5);
    }

    // Hapus ":" jika ada lebih dari satu
    let colonCount = (value.match(/:/g) || []).length;
    if (colonCount > 1) {
        value = value.replace(/:/g, "");
    }

    // Jika panjangnya 2 dan belum ada ":" tambahkan ":"
    if (value.length === 2 && !value.includes(":")) {
        value = value + ":";
    }

    return value;
}
