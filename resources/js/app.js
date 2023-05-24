import './bootstrap';
import '~resources/scss/app.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// gestione immagini build
import.meta.glob([
    '../img/**'
])

const imageInputContainer = document.querySelector('#image-input-container');
const imageInput = document.querySelector('#image');
const setImageInput = document.getElementById('set_image');
imageInput.addEventListener('change', showPreview);

setImageInput.addEventListener('change', function () {
    if (setImageInput.checked) {
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