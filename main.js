const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

// Get the current page URL
const currentURL = window.location.pathname;

// Loop through each link in the navbar
const links = document.querySelectorAll("#navbar a");
for (const link of links) {
  // Check if the link's href matches the current page URL
  if (link.href === currentURL) {
    // Add the active class to the link
    link.classList.add("active");
    break;
  }
}

//select image in sproduct

var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");

smallimg[0].onclick = function () {
  MainImg.src = smallimg[0].src;
};

smallimg[1].onclick = function () {
  MainImg.src = smallimg[1].src;
};
smallimg[2].onclick = function () {
  MainImg.src = smallimg[2].src;
};
smallimg[3].onclick = function () {
  MainImg.src = smallimg[3].src;
};
