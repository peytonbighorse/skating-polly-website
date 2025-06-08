function openRegistrationModal() {
  document.getElementById("registration-modal").style.display = "block";
}
function closeRegistrationModal() {
  document.getElementById("registration-modal").style.display = "none";
}
let registrationButton = document.querySelector(".register-button");

registrationButton.addEventListener("click", openRegistrationModal);
let closeRegistrationButton = document.querySelector(".close-registration");

closeRegistrationButton.addEventListener("click", closeRegistrationModal);

//login
function openLoginModal() {
  document.getElementById("login-modal").style.display = "block";
}
function closeLoginModal() {
  document.getElementById("login-modal").style.display = "none";
}
let loginButton = document.querySelector(".login-button");

loginButton.addEventListener("click", openLoginModal);
let closeLoginButton = document.querySelector(".close-login");

closeLoginButton.addEventListener("click", closeLoginModal);
