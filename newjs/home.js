console.log(`'-nav js logged -'`);



window.onresize = function (){
  bodyCheck();
}

const body = document.querySelector('body');
function bodyCheck(){

  console.log(body.clientWidth);
}
bodyCheck();

document.addEventListener('DOMContentLoaded', function() {
// if (body.clientWidth > 426) {
  var childNodes = document.querySelectorAll('.hostel_imgs');
  var currentIndex = 0;

  // Function to activate a child node
  function activateChild(index) {
    // Remove 'active' class from all child nodes
    childNodes.forEach(function(child) {
      child.classList.remove('active');
    });

    // Add 'active' class to the child node at the specified index
    childNodes[index].classList.add('active');
  }

  // Function to update the active child node
  function updateActiveChild() {
    activateChild(currentIndex);

    currentIndex = (currentIndex + 1) % childNodes.length; // Increment the index and wrap around

    setTimeout(updateActiveChild, 2500); // Repeat every 2.5 seconds
  }

  // Start the auto-update process
  updateActiveChild();
// }
});

document.addEventListener('DOMContentLoaded', function() {

  // if (body.clientWidth > 426){
  var childNodes = document.querySelectorAll('.staff_imgs');
  var currentIndex = 0;

  // Function to activate a child node
  function activateChild(index) {
    // Remove 'active' class from all child nodes
    childNodes.forEach(function(child) {
      child.classList.remove('active');
    });

    // Add 'active' class to the child node at the specified index
    childNodes[index].classList.add('active');
  }

  // Function to update the active child node
  function updateActiveChild() {
    activateChild(currentIndex);

    currentIndex = (currentIndex + 1) % childNodes.length; // Increment the index and wrap around

    setTimeout(updateActiveChild, 2500); // Repeat every 2.5 seconds
  }

  // Start the auto-update process
  updateActiveChild();
// }
});

document.addEventListener('DOMContentLoaded', function() {
  
  // if (body.clientWidth > 426){
    var childNodes = document.querySelectorAll('.lab_imgs');
    var currentIndex = 0;
  
    // Function to activate a child node
    function activateChild(index) {
      // Remove 'active' class from all child nodes
      childNodes.forEach(function(child) {
        child.classList.remove('active');
      });
  
      // Add 'active' class to the child node at the specified index
      childNodes[index].classList.add('active');
    }
  
    // Function to update the active child node
    function updateActiveChild() {
      activateChild(currentIndex);
  
      currentIndex = (currentIndex + 1) % childNodes.length; // Increment the index and wrap around
  
      setTimeout(updateActiveChild, 2500); // Repeat every 2.5 seconds
    }
  
    // Start the auto-update process
    updateActiveChild();
  // }
  
});

// document.addEventListener('DOMContentLoaded', function() {
  
//   if (body.clientWidth < 426){
//     var childNodes = document.querySelectorAll('.inner_column');
//     var currentIndex = 0;
  
//     // Function to activate a child node
//     function activateChild(index) {
//       // Remove 'active' class from all child nodes
//       childNodes.forEach(function(child) {
//         child.classList.remove('active');
//       });
  
//       // Add 'active' class to the child node at the specified index
//       childNodes[index].classList.add('active');
//     }
  
//     // Function to update the active child node
//     function updateActiveChild() {
//       activateChild(currentIndex);
  
//       currentIndex = (currentIndex + 1) % childNodes.length; // Increment the index and wrap around
  
//       setTimeout(updateActiveChild, 2500); // Repeat every 2.5 seconds
//     }
  
//     // Start the auto-update process
//     updateActiveChild();
//   }
  
// });

