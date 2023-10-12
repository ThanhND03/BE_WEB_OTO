const upload = document.querySelector(".upload");
const fileName = document.querySelector(".file-name");
const cancelBtn = document.querySelector("#cancel-btn");
const defaultBtn = document.querySelector("#default-btn");
const customBtn  = document.querySelector("#custom-btn");
const img = document.querySelector("#img_1");
const img_2 = document.querySelector("#img_2");
const img_3 = document.querySelector("#img_3");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_]+$/;


function defaultBtnActive(){
    defaultBtn.click();
}
defaultBtn.addEventListener("change", function(){
    const file = this.files[0];
    if(file) {
        const reader = new FileReader();
        reader.onload = function(){
        const result = reader.result;
        img.src = result;
        upload.classList.add('active');

        cancelBtn.addEventListener("click", function(){
            img.src = "";
            upload.classList.remove('active');
        });
    }
    reader.readAsDataURL(file);
    }
    if(this.value){
        let valueStore = this.value.match(regExp);
        fileName.textContent = valueStore;
    }


});

// img_2

function defaultBtnActive(){
    defaultBtn.click();
}
defaultBtn.addEventListener("change", function(){
    const file = this.files[1];
    if(file) {
        const reader = new FileReader();
        reader.onload = function(){
        const result = reader.result;
        img_2.src = result;
        upload.classList.add('active');

        cancelBtn.addEventListener("click", function(){
            img_2.src = "";
            upload.classList.remove('active');
        });
    }
    reader.readAsDataURL(file);
    }
    if(this.value){
        let valueStore = this.value.match(regExp);
        fileName.textContent = valueStore;
    }


});

//img-3 

function defaultBtnActive(){
    defaultBtn.click();
}
defaultBtn.addEventListener("change", function(){
    const file = this.files[2];
    if(file) {
        const reader = new FileReader();
        reader.onload = function(){
        const result = reader.result;
        img_3.src = result;
        upload.classList.add('active');

        cancelBtn.addEventListener("click", function(){
            img_3.src = "";
            upload.classList.remove('active');
        });
    }
    reader.readAsDataURL(file);
    }
    if(this.value){
        let valueStore = this.value.match(regExp);
        fileName.textContent = valueStore;
    }


});