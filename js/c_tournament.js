// Preview of the image to upload
const inpFile = document.getElementById("inpFile");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

inpFile.addEventListener("change", showImg);

function showImg(){
    const file = this.files[0];
    console.log(file);

    if (file){
        const reader = new FileReader();

        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";

        reader.addEventListener("load",function(){
        previewImage.setAttribute("src",this.result);
        });

        reader.readAsDataURL(file);
    }
    else{
        previewDefaultText.style.display = null;
        previewImage.style.display = null;
        previewImage.setAttribute("src","");
    }
}

//add Participant field
const select_no_parti = document.getElementById("partcipants");
const part4 = document.getElementById("part_4");
const part8 = document.getElementById("part_8");
part4.style.display = "none";
part8.style.display = "none";

select_no_parti.addEventListener("change", show_parti);

function show_parti(){
  if (select_no_parti.value == 4) {
    if (part4.style.display === "none") {
      part4.style.display = "block";
    }
    if (part8.style.display === "block") {
      part8.style.display = "none";
    }
  }
  else if (select_no_parti.value == 8) {
    part4.style.display = "block";
    part8.style.display = "block";
  }
  else if (select_no_parti.value == 0) {
    part4.style.display = "none";
    part8.style.display = "none";
  }
}
