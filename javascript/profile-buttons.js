let favoritesButton = document.querySelector(".favorites-button");
let collectionsButton = document.querySelector(".collections-button");
let quizzesButton = document.querySelector(".quizzes-button");

let favoritesContainer = document.querySelector(".favorites-container");
let collectionsContainer = document.querySelector(".collections-container");
let quizzesContainer = document.querySelector(".quizzes-container");

function showFavorites() {
  if (favoritesContainer.classList.contains("hidden"))
    favoritesContainer.classList.remove("hidden");
  if (!collectionsContainer.classList.contains("hidden"))
    collectionsContainer.classList.add("hidden");
  if (!quizzesContainer.classList.contains("hidden"))
    quizzesContainer.classList.add("hidden");
}
function showCollections() {
  if (collectionsContainer.classList.contains("hidden"))
    collectionsContainer.classList.remove("hidden");
  if (!favoritesContainer.classList.contains("hidden"))
    favoritesContainer.classList.add("hidden");
  if (!quizzesContainer.classList.contains("hidden"))
    quizzesContainer.classList.add("hidden");
}

function showQuizzes() {
  if (quizzesContainer.classList.contains("hidden"))
    quizzesContainer.classList.remove("hidden");
  if (!collectionsContainer.classList.contains("hidden"))
    collectionsContainer.classList.add("hidden");
  if (!favoritesContainer.classList.contains("hidden"))
    favoritesContainer.classList.add("hidden");
}

favoritesButton.addEventListener("click", showFavorites);
collectionsButton.addEventListener("click", showCollections);
quizzesButton.addEventListener("click", showQuizzes);
