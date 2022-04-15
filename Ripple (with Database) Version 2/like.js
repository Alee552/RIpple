function imagefun() {
    var Image_Id = document.getElementById('loveimage');
    if (Image_Id.src.match("images/love.png")) {
        Image_Id.src = "images/lovered.png";
    }
    else {
        Image_Id.src = "images/love.png";
    }
}  

function imagefun2() {
    var Image_Id = document.getElementById('loveimage2');
    if (Image_Id.src.match("images/love.png")) {
        Image_Id.src = "images/lovered.png";
    }
    else {
        Image_Id.src = "images/love.png";
    }
}  

function imagefun3() {
    var Image_Id = document.getElementById('loveimage3');
    if (Image_Id.src.match("../images/love.png")) {
        Image_Id.src = "../images/lovered.png";
    }
    else {
        Image_Id.src = "../images/love.png";
    }
}  

function imagefun4() {
    var Image_Id = document.getElementById('loveimage4');
    if (Image_Id.src.match("../images/love.png")) {
        Image_Id.src = "../images/lovered.png";
    }
    else {
        Image_Id.src = "../images/love.png";
    }
}  

