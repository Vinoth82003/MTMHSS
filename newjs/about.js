console.log(`"--aboutjs logged--"`);

const rulesHeadLi = document.querySelectorAll(".rulesHeadLi");

rulesHeadLi.forEach((li) => {
  li.addEventListener("click", function () {
    rulesHeadLi.forEach((cls) => {
      cls.parentElement.style.height = "50px";
    });
    li.parentElement.style.height = "280px";
  });
});

const closeBox = document.querySelectorAll(".closeBox");
console.log(closeBox);

closeBox.forEach((cls) => {
  cls.addEventListener("click", function () {
    cls.parentElement.parentElement.style.height = "50px";
  });
});
