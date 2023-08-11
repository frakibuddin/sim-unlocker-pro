// dark and light mode
let body = document.body;
let modeBtn = document.querySelectorAll(".mode-btns");
let navbar = document.querySelector(".navbar");
let headerLogo = document.querySelector(".header-logo");

let sun = `<i class="fa-regular fa-sun fs-2 text-light"></i>`;
let moon = `<i class="fa-regular fa-moon fs-2 text-color"></i>`;

let mode;

//header logo
let lightMode_src = headerLogo.getAttribute("data-lightImg");
let darkMode_src = headerLogo.getAttribute("src");

for (let i = 0; i < modeBtn.length; i++) {
  modeBtn[i].onclick = () => {
    if (body.classList.contains("dark-mode")) {
      // mode icon changing
      modeBtn[i].innerHTML = moon;

      //mode changing
      navbar.classList.remove("navbar-dark");
      body.setAttribute("class", "light-mode");
      localStorage.setItem("mode", "light-mode");

      // mode accroding logo change
      headerLogo.src = lightMode_src;
    } else {
      // mode icon changing
      modeBtn[i].innerHTML = sun;

      //mode changing
      body.setAttribute("class", "dark-mode");
      localStorage.setItem("mode", "dark-mode");
      navbar.classList.add("navbar-dark");

      // mode accroding logo change
      headerLogo.src = darkMode_src;
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
    //set logo
    headerLogo.src = lightMode_src;
  }
}

// autometic remove alert message
window.setTimeout(function () {
  $(".alert")
    .slideUp(500, 0)
    .slideUp(500, function () {
      $(this).slideUp();
    });
}, 4000);
