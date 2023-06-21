console.log(`"--NavBarJs connected--"`);

const navList = document.querySelectorAll(".li .a");
// navList[2].click();
// console.log(navList[2]);

navList.forEach((link) => {
  link.addEventListener("click", function (event) {
    navList.forEach((link) => {
      link.classList.remove("active");
    });
    link.classList.add("active");
  });
});

window.onscroll = function () {
  toggleNavbar();
};

function toggleNavbar() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    // console.log(document.documentElement.scrollTop);
    const nav = document.querySelector(".nav");
    nav.classList.add("active");
  } else {
    const nav = document.querySelector(".nav");
    nav.classList.remove("active");
  }
}

const openMenu = document.querySelector(".menu_bar");
const closeMenu = document.querySelector(".close");
const menu = document.querySelector(".menu");

function visible() {
  const a = document.querySelectorAll(".a");
  a.forEach((e) => {
    e.style.visibility = "visible";
  });
}

function hidden() {
  const a = document.querySelectorAll(".a");
  a.forEach((e) => {
    e.style.transition = ".2s";
    e.style.visibility = "hidden";
  });
}

openMenu.addEventListener("click", function () {
  menu.style.height = "250px";
  visible();
  closeMenu.style.transition = ".6s";
  closeMenu.style.visibility = "visible";
});

closeMenu.addEventListener("click", function () {
  menu.style.height = "50px";
  hidden();
  closeMenu.style.transition = "0s";
  closeMenu.style.visibility = "hidden";
});
