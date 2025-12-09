function limitDigits(input, max) {
    if (input.value.length > max) {
        input.value = input.value.slice(0, max);
    }
}

document.getElementById("togglePassword").onclick = function () {
    const pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
    this.classList.toggle("bi-eye");
    this.classList.toggle("bi-eye-slash");
};

document.getElementById("togglePassword2").onclick = function () {
    const pass = document.getElementById("password2");
    pass.type = pass.type === "password" ? "text" : "password";
    this.classList.toggle("bi-eye");
    this.classList.toggle("bi-eye-slash");
};

document.getElementById("password").addEventListener("input", function () {
    const strengthText = document.getElementById("strength");
    const value = this.value;

    let strong = /^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

    if (strong.test(value)) {
        strengthText.textContent = "Contraseña fuerte ✔️";
        strengthText.style.color = "#2BD106";
    } else {
        strengthText.textContent = "La contraseña debe tener 8 caracteres, mayúsculas, número y símbolo.";
        strengthText.style.color = "#D9D91E";
    }
});