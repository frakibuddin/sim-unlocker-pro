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
  removeChatboxAmin();
};

// whatapp chat function
const chat_btn = document.querySelectorAll(".live-chat");
const chat_box = document.querySelectorAll(".chat-box");

for (let i = 0; i < chat_btn.length; i++) {
  chat_btn[i].onclick = () => {
    chat_box[i].classList.toggle("slick-amim");
  };
}

function removeChatboxAmin() {
  for (let i = 0; i < chat_box.length; i++) {
    chat_box[i].classList.remove("slick-amim");
  }
}

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

try {
  // captcha
  // Selecting necessary DOM elements
  const captchaTextBox = document.querySelector(".captch_box");
  const refreshButton = document.querySelector(".refresh_button");
  const captchaInputBox = document.querySelector(".captch_input");
  const message = document.querySelector(".message");
  const submitButton = document.querySelector(".login-btn");

  // Variable to store generated captcha
  let captchaText = null;

  // Function to generate captcha
  const generateCaptcha = () => {
    const randomString = Math.random().toString(36).substring(2, 7);
    const randomStringArray = randomString.split("");
    const changeString = randomStringArray.map((char) =>
      Math.random() > 0.5 ? char.toUpperCase() : char
    );
    captchaText = changeString.join("   ");
    captchaTextBox.value = captchaText;
  };

  const refreshBtnClick = () => {
    generateCaptcha();
    captchaInputBox.value = "";
    captchaKeyUpValidate();
  };

  const captchaKeyUpValidate = () => {
    //Toggle submit button disable class based on captcha input field.
    submitButton.classList.toggle("disabled", !captchaInputBox.value);

    //if (!captchaInputBox.value) message.classList.remove("active");
  };

  // Function to validate the entered captcha
  const submitBtnClick = (e) => {
    e.preventDefault();
    captchaText = captchaText
      .split("")
      .filter((char) => char !== " ")
      .join("");
    message.classList.add("show");
    // Check if the entered captcha text is correct or not
    if (captchaInputBox.value !== "") {
      if (captchaInputBox.value === captchaText) {
        message.innerText = "Entered captcha  correct";
        //document.querySelector("#login-form").submit();
      } else {
        message.innerText = "Entered captcha is not correct";
      }
    } else {
      message.innerText = "Please fill the captcha";
    }
  };

  // Add event listeners for the refresh button, captchaInputBox, submit button
  refreshButton.addEventListener("click", refreshBtnClick);
  captchaInputBox.addEventListener("keyup", captchaKeyUpValidate);
  submitButton.addEventListener("click", submitBtnClick);

  // Generate a captcha when the page loads
  generateCaptcha();
} catch (error) {
  console.log(error);
  console.warn("error in captcha");
}
