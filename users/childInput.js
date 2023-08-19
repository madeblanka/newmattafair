const childInput = document.getElementById("child");
const babySelect = document.getElementById("inputContainer");

childInput.addEventListener("input", function () {
    if (parseInt(childInput.value) === 0 || childInput.value == ' ') {
        babySelect.classList.add("hidden");
    } else {
        babySelect.classList.remove("hidden"); // Show the select element
    }
});