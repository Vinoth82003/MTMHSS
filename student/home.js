console.log(`"--home js logged--"`);

const sidemenu = document.querySelector(".sidemenu");

const sidemenuContainer = document.querySelector(".sidemenuContainer");

const check = document.createElement("input");
check.type = "checkbox";

sidemenu.addEventListener("click", function () {
  if (check.checked === true) {
    check.checked = false;
    sidemenuContainer.style.left = "-250px";
  } else {
    check.checked = true;
    sidemenuContainer.style.left = "0px";
  }
});

const mark = document.querySelectorAll(".submark");

mark.forEach((e) => {
  var mk = e.innerHTML;

  if (mk >= 91 && mk <= 100) {
    e.nextElementSibling.innerHTML = "A1";
  } else if (mk >= 81 && mk <= 90) {
    e.nextElementSibling.innerHTML = "A2";
  } else if (mk >= 71 && mk <= 80) {
    e.nextElementSibling.innerHTML = "B1";
  } else if (mk >= 61 && mk <= 70) {
    e.nextElementSibling.innerHTML = "B2";
  } else if (mk >= 51 && mk <= 60) {
    e.nextElementSibling.innerHTML = "C1";
  } else if (mk >= 41 && mk <= 50) {
    e.nextElementSibling.innerHTML = "C2";
  } else if (mk >= 35 && mk <= 40) {
    e.nextElementSibling.innerHTML = "D";
  } else {
    e.nextElementSibling.innerHTML = "Fail";
  }
});

const sideMenuList = document.querySelectorAll(".sideMenuList");
console.log(sideMenuList);
sideMenuList.forEach((el) => {
  el.addEventListener("click", function () {
    sideMenuList.forEach((list) => {
      list.classList.remove("active");
    });
    el.classList.add("active");
  });
});

const profDet = document.querySelector(".profDet");
const profList = document.querySelector(".profList");
const closeProf = document.querySelector(".closeProf");

profList.addEventListener("click", function () {
  profDet.style.top = "0%";
});

closeProf.addEventListener("click", function () {
  profDet.style.top = "-100%";
});
