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
      hideScrollElement(el);
    }
  });
};

window.onscroll = function () {
  handleScrollAnimation();
  chat_box.classList.remove("slick-amim");
};

// whatapp chat function
const w_chat_btn = document.querySelector(".live-chat-whatapp");
const chat_box = document.querySelector(".chat-box");

// telegrame chat function
const t_chat_btn = document.querySelector(".live-chat-whatapp");
const t_chat_box = document.querySelector(".t-chat-box");

w_chat_btn.onclick = () => {
  chat_box.classList.toggle("slick-amim");
};

// dark and light mode
let body = document.body;
let modeBtn = document.querySelectorAll(".mode-btns");
let navbar = document.querySelector(".navbar");
let headerLogo = document.querySelector(".header-logo");
let footerLogo = document.querySelector(".footer-logo");
let sun = `<i class="fa-regular fa-sun fs-2 text-light"></i>`;
let moon = `<i class="fa-regular fa-moon fs-2 text-color"></i>`;

let mode;

//header logo
let lightMode_src = headerLogo.getAttribute("data-lightImg");
let darkMode_src = headerLogo.getAttribute("src");
//footer logo
let f_lightMode_src = footerLogo.getAttribute("data-lightImg");
let f_darkMode_src = footerLogo.getAttribute("src");

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
      footerLogo.src = f_lightMode_src;
    } else {
      // mode icon changing
      modeBtn[i].innerHTML = sun;

      //mode changing
      body.setAttribute("class", "dark-mode");
      localStorage.setItem("mode", "dark-mode");
      navbar.classList.add("navbar-dark");

      // mode accroding logo change
      headerLogo.src = darkMode_src;
      footerLogo.src = f_darkMode_src;
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
    footerLogo.src = f_lightMode_src;
  }
}

// counter

$(".counter").each(function () {
  $(this)
    .prop("Counter", 0)
    .animate(
      {
        Counter: $(this).text(),
      },
      {
        duration: 4000,
        easing: "swing",
        step: function (now) {
          $(this).text(Math.ceil(now));
        },
      }
    );
});
