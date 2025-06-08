let spButton = document.querySelector(".skating-polly-profile-button");
let kelliButton = document.querySelector(".kelli-profile-button");
let peytonButton = document.querySelector(".peyton-profile-button");
let kurtisButton = document.querySelector(".kurtis-profile-button");

let spProfile = document.querySelector(".sp.profile-container");
let kelliProfile = document.querySelector(".kelli.profile-container");
let peytonProfile = document.querySelector(".peyton.profile-container");
let kurtisProfile = document.querySelector(".kurtis.profile-container");

function showSkatingPollyProfile() {
  if (spProfile.classList.contains("hidden"))
    spProfile.classList.remove("hidden");
  if (!kelliProfile.classList.contains("hidden"))
    kelliProfile.classList.add("hidden");
  if (!peytonProfile.classList.contains("hidden"))
    peytonProfile.classList.add("hidden");
  if (!kurtisProfile.classList.contains("hidden"))
    kurtisProfile.classList.add("hidden");
}
function showKelliProfile() {
  if (kelliProfile.classList.contains("hidden"))
    kelliProfile.classList.remove("hidden");
  if (!spProfile.classList.contains("hidden"))
    spProfile.classList.add("hidden");
  if (!peytonProfile.classList.contains("hidden"))
    peytonProfile.classList.add("hidden");
  if (!kurtisProfile.classList.contains("hidden"))
    kurtisProfile.classList.add("hidden");
}

function showPeytonProfile() {
  if (peytonProfile.classList.contains("hidden"))
    peytonProfile.classList.remove("hidden");
  if (!spProfile.classList.contains("hidden"))
    spProfile.classList.add("hidden");
  if (!kelliProfile.classList.contains("hidden"))
    kelliProfile.classList.add("hidden");
  if (!kurtisProfile.classList.contains("hidden"))
    kurtisProfile.classList.add("hidden");
}

function showKurtisProfile() {
  if (kurtisProfile.classList.contains("hidden"))
    kurtisProfile.classList.remove("hidden");
  if (!spProfile.classList.contains("hidden"))
    spProfile.classList.add("hidden");
  if (!peytonProfile.classList.contains("hidden"))
    peytonProfile.classList.add("hidden");
  if (!kelliProfile.classList.contains("hidden"))
    kelliProfile.classList.add("hidden");
}
spButton.addEventListener("click", showSkatingPollyProfile);
kelliButton.addEventListener("click", showKelliProfile);
peytonButton.addEventListener("click", showPeytonProfile);
kurtisButton.addEventListener("click", showKurtisProfile);
