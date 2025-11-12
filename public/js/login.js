document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.querySelector(".toggle-password");
  const input = document.getElementById("password");

  toggle.addEventListener("click", () => {
    const icon = toggle.querySelector("i");
    if (input.type === "password") {
      input.type = "text";
      icon.classList.replace("bi-eye", "bi-eye-slash");
    } else {
      input.type = "password";
      icon.classList.replace("bi-eye-slash", "bi-eye");
    }
  });
});