const account_div = document.getElementById("account");
const login_form = document.getElementById("login-form");
const register_span = document.getElementById("register-span");
const register_form = document.getElementById("register-form");

account_div.addEventListener("click", () => {
    login_form.classList.toggle("active");
});

register_span.addEventListener("click", () => {
    register_form.classList.toggle("active");
});
