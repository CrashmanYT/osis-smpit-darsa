let title = document.getElementById("title_field");
let description = document.getElementById("description_field");
let image = document.getElementById("image_chooser");
let auth = document.getElementById("auth_field");

// get card element
let card_img = document.getElementsByClassName("card-img-top")[0];
let card_title = document.getElementsByClassName("card-title")[0];
let card_desc = document.getElementsByClassName("card-text")[0];

title.oninput = function() {
    card_title.innerHTML = title.value;
};
description.oninput = function() {
    card_desc.innerHTML = description.value
};

image.oninput = function() {
    console.log(image.files[0])
    let file = image.files[0];
    let reader = new FileReader();
    reader.onload = function(e) {
        card_img.src = this.result;
    }
    reader.readAsDataURL(file);

}

function uploadImage() {
    
}