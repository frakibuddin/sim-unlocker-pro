// onscroll animation
const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};

const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1)) {
      displayScrollElement(el);
    } else if (elementOutofView(el)) {
      // hideScrollElement(el);
    }
  });
};

window.onscroll = function () {
  handleScrollAnimation();
};

// dark and light mode
let body = document.body;
let modeBtn = document.querySelectorAll(".mode-btns");
let navbar = document.querySelector(".navbar");
let sun = `<i class="fa-regular fa-sun fs-2 text-light"></i>`;
let moon = `<i class="fa-regular fa-moon fs-2 text-color"></i>`;

let mode;

for (let i = 0; i < modeBtn.length; i++) {
  modeBtn[i].onclick = () => {
    if (body.classList.contains("dark-mode")) {
      navbar.classList.remove("navbar-dark");

      body.setAttribute("class", "light-mode");
      localStorage.setItem("mode", "light-mode");

      modeBtn[i].innerHTML = moon;
    } else {
      body.setAttribute("class", "dark-mode");
      localStorage.setItem("mode", "dark-mode");
      modeBtn[i].innerHTML = sun;

      navbar.classList.add("navbar-dark");
    }
  };
}
mode = localStorage.getItem("mode");
if (mode == null) {
  mode = "dark-mode";
}
body.setAttribute("class", mode);

for (let i = 0; i < modeBtn.length; i++) {
  if (body.classList.contains("dark-mode")) {
    modeBtn[i].innerHTML = sun;
    navbar.classList.add("navbar-dark");
  } else {
    modeBtn[i].innerHTML = moon;
  }
}
