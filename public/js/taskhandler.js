// insert task handler__________________________________
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

// edit task handler__________________________________
let taskEditLeble = document.querySelectorAll(".taskEditLeble");
let taskEditLebleCount = document.querySelectorAll(".taskEditLebleCount");
let taskEditInput = document.querySelectorAll(".taskEditInput");

taskEditInput.forEach((element, index) => {
    element.addEventListener("input", () => {
        const countElement = taskEditLebleCount[index];
        const labelElement = taskEditLeble[index];

        countElement.innerHTML = element.value.length;

        if (element.value.length >= 20) {
            element.value = element.value.slice(0, 20);
            countElement.innerHTML = 20;
            labelElement.style.color = "red";
            labelElement.classList.remove("goyang");
            void labelElement.offsetWidth;
            labelElement.classList.add("goyang");
        } else {
            labelElement.classList.remove("goyang");
            labelElement.style.color = "black";
        }
    });
});
