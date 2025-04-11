// taskvalidate.js
const taskInput = document.getElementById("inputAmount");
const countAndEnd = document.getElementById("countAndEnd");
const count = document.getElementById("count");

taskInput.addEventListener("input", () => {
    count.innerHTML = taskInput.value.length;
    if (count.innerHTML == "21") {
        count.innerHTML--;
    }

    if (taskInput.value.length > 20) {
        taskInput.value = taskInput.value.slice(0, 20);
        countAndEnd.style.color = "red";
        countAndEnd.classList.remove("goyang");
        void countAndEnd.offsetWidth;
        countAndEnd.classList.add("goyang");
    } else {
        countAndEnd.classList.remove("goyang");
        countAndEnd.style.color = "black";
    }
});
