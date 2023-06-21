console.log(`"--navjs connected--"`);


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


const menu_open = document.querySelector(".menuOpen");
const menu_close = document.querySelector(".menuClose");
const menu = document.querySelector(".menu");
const menuList = document.querySelectorAll(".menuList");

menu_open.addEventListener("click", function () {
  menu.style.height = "270px";
  menuList.forEach((e) => {
    e.style.visibility = "visible";
  });
  menu_close.style.visibility = "visible";
});

menu_close.addEventListener("click", function () {
  menu.style.height = "60px";
  menuList.forEach((e) => {
    e.style.visibility = "hidden";
  });
  menu_close.style.visibility = "hidden";
});

// document.getElementById("year").innerHTML = new Date().getFullYear();