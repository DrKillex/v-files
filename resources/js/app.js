import './bootstrap';
import '~resources/scss/app.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// gestione immagini build
import.meta.glob([
    '../img/**'
])

const imageInputContainer = document.querySelector('#image-input-container');
const imageInput = document.querySelector('#thumb');
const setThumbInput = document.getElementById('set_thumb');
imageInput.addEventListener('change', showPreview);

setThumbInput.addEventListener('change', function () {
    if (setThumbInput.checked) {
        imageInputContainer.classList.remove('d-none');
        imageInputContainer.classList.add('d-block');
    } else {
        imageInputContainer.classList.remove('d-block');
        imageInputContainer.classList.add('d-none');
    }
})

function showPreview(event) {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-image-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}


const imageInputContainer2 = document.querySelector('#image2-input-container');
const imageInput2 = document.querySelector('#image');
const setThumbInput2 = document.getElementById('set_image');
imageInput2.addEventListener('change', showPreview2);

setThumbInput2.addEventListener('change', function () {
    if (setThumbInput2.checked) {
        imageInputContainer2.classList.remove('d-none');
        imageInputContainer2.classList.add('d-block');
    } else {
        imageInputContainer2.classList.remove('d-block');
        imageInputContainer2.classList.add('d-none');
    }
})

function showPreview2(event) {
    if (event.target.files.length > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-image2-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}
