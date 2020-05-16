import { loginAdmin, uploadAdminAvatar, submitCreateAdmin } from "./api/admins.js";

(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

router('/', () => {
    loginAdmin();
})

router('/dashboard', () => {
    // alert("Page dashboard")
})

router('/medias', () => {
    alert("Les médias !!!!!")
})

router('/admins/create', () => {
    uploadAdminAvatar();
    submitCreateAdmin();
})