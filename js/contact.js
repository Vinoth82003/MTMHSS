console.log(`"--message.js connected--"`);

const label = document.querySelectorAll("label");

label.forEach((label) => {
  const child = label.childNodes;
  child.forEach((child) => {
    child.parentElement.classList.remove("active");
    child.addEventListener("input", function () {
      if (child.value.length > 0) {
        child.parentElement.classList.add("active");
      } else {
        child.parentElement.classList.remove("active");
      }
    });
  });
});

const message = document.querySelector('#message');
const maxLength = 500;
message.addEventListener('input',function(){
var newLength = message.value.length;
   document.querySelector('#count').innerHTML =`${newLength}/500` ;
   document.querySelector('#remain').innerHTML = `Remaining ${ maxLength - newLength}`;
});

const close_btn = document.querySelector('.close_btn');

close_btn.addEventListener('click',function(){
  console.log('clicked');
  close_btn.parentElement.remove();
  var a = document.createElement('a');
  a.href = '../';
  setTimeout(() => {
    a.click();
  }, 1000);
})