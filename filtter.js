let body = document.body;
let sideBar = document.querySelector(".side-bar");
let profile = document.querySelector("#profile"); // Assuming #profile is the ID of the profile element
let search = document.querySelector("#search"); // Assuming #search is the ID of the search element

document.querySelector("#fill").onclick = () => {
  sideBar.classList.toggle("active");
  body.classList.toggle("active");
};

document.querySelector("#close-btn").onclick = () => {
  sideBar.classList.remove("active");
  body.classList.remove("active");
};
