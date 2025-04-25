// edit error messege
const flashMessege = document.querySelectorAll(".flashMessege");

function deleteEditFlashMessege() {
    flashMessege.forEach((element) => {
        element.classList.add("d-none");
    });
}
