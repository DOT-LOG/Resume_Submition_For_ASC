document.addEventListener("DOMContentLoaded", function () {
    const resumeForm = document.getElementById("resumeForm");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const resumeInput = document.getElementById("resume");

    resumeForm.addEventListener("submit", function (event) {
        if (nameInput.value.trim() === "" || emailInput.value.trim() === "" || !resumeInput.files.length) {
            event.preventDefault();
            alert("Please fill out all fields and upload a resume.");
        }
    });
});
