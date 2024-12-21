// JavaScript to handle button click
const button = document.getElementById("showImageButton");
const image = document.getElementById("displayImage");

button.addEventListener("click", () => {
  // Toggle the visibility of the image
  if (image.style.display === "none") {
    image.style.display = "block"
    button.textContent = "awww the goat boi";
  } else {
    image.style.display = "none";
    button.textContent = "something";
  }
});

