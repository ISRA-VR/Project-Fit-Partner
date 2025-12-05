document.getElementById("togglePassword").addEventListener("click", function () {
    const pass = document.getElementById("password");

    if (pass.type === "password") {
        pass.type = "text";
        this.classList.replace("bi-eye-slash", "bi-eye");
    } else {
        pass.type = "password";
        this.classList.replace("bi-eye", "bi-eye-slash");
    }
});