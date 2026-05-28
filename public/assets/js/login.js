const form = document.querySelector("form");
const username = document.querySelector("#userInput");
const passwd = document.querySelector("#passwdInput");
const passwdVerify = document.querySelector("#passwdVerifyInput");
const email = document.querySelector("#emailInput")
const submitBtn = document.querySelector("#submitBtn");
const aBtn = document.querySelector("#sign-in-btn");
let registerMode = false;

const timeGap = (ms) => new Promise(resolve => setTimeout(resolve, ms));

aBtn.addEventListener('click', async () => {
    registerMode = !registerMode;
    submitBtn.classList.add("invisible-text");
    await timeGap(400);
    if (registerMode){
        submitBtn.textContent = "Register";
        aBtn.textContent = "Already have an account?";
        email.classList.remove("hidden");
        passwdVerify.classList.remove("hidden");
    } else {
        submitBtn.textContent = "Login";
        aBtn.textContent = "Create account";
        email.classList.add("hidden");
        passwdVerify.classList.add("hidden");
    }
    submitBtn.classList.remove("invisible-text");
    submitBtn.classList.add("highlight-border");
    await timeGap(500);
    submitBtn.classList.remove("highlight-border");
});

form.addEventListener("submit", (e) => {
    e.preventDefault();
});