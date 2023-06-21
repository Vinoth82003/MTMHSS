console.log(`"--loginjs connected--"`);

const login_logo = document.querySelectorAll(".login_logo");
console.log(login_logo);

const login_menu = document.querySelector(".login_menu");
const login_close = document.querySelector(".login_close");

login_menu.addEventListener("click", function () {
  document.querySelector(".login_container").style.transition = '.5s';
  document.querySelector(".login_container").style.left = '0px';
});

login_close.addEventListener('click',function(){
  document.querySelector(".login_container").style.transition = '.5s';
  document.querySelector(".login_container").style.left = '101vw';
});

let a = [];

function loginPage(a) {
  console.log("func inside");
  console.log(a);
  var lname = "";
  for (let i = 0; i < 7; i++) {
    lname = lname + a[i];
  }
  for (let i = 0; i < 7; i++) {
    a.pop(i);
  }
  let link = document.createElement("a");
  link.href = `/mtmhss/php/${lname}.php`;
  link.click();
}

login_logo.forEach((e) => {
  e.addEventListener("click", function () {
    console.log(e.className);
    for (let i = 0; i < 7; i++) {
      a.push(e.className[i]);
    }
    loginPage(a);
  });
});