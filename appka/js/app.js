// Get references to the elements
let forget_btn = document.querySelector(".forget_btn");
let eye_btn = document.querySelector(".eye_btn");
let password_input = document.querySelector("#input_password");

// Event listener for showing/hiding password
eye_btn.addEventListener("click", function () {
    if (password_input.type === "password") {
        password_input.type = "text"; // Show password
        eye_btn.classList.replace("fa-eye","fa-eye-slash"); // Change icon
    } else {
        password_input.type = "password"; // Hide password
        eye_btn.classList.replace("fa-eye-slash","fa-eye"); // Change icon
    }
});

// Event listener for forget password button
forget_btn.addEventListener("click", function () {
    // Your logic for handling forget password goes here
    alert("Forget Password button clicked!");
});

// Event listener for password input
password_input.addEventListener("input", function () {
    if (password_input.value.length > 0) {
        forget_btn.classList.add("hidden"); // Hide forget password button if password input is not empty
        eye_btn.classList.add("show"); // Show eye button
        password_input.classList.add("width"); // Adjust width if needed
    } else {
        forget_btn.classList.remove("hidden"); // Show forget password button if password input is empty
        eye_btn.classList.remove("show"); // Hide eye button
    }
});
