console.log(`"--contact js logged--"`);

const labels = document.querySelectorAll("label");

labels.forEach(label => {
    label.addEventListener('input',function(){
        labels.forEach(lb =>{
            lb.classList.remove('active');
        });
        label.classList.add('active');
    });
});