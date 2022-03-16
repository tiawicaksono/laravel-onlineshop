let container = document.getElementById("container");
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
toggle = () => {
    container.classList.toggle("sign-in");
    container.classList.toggle("sign-up");
};

setTimeout(() => {
    container.classList.add("sign-in");
}, 200);

$(function () {});
function clickButtonSignup() {
    var txtPassword = document.getElementById("txtPassword");
    // console.log(txtPassword);
    var txtConfirmPassword = document.getElementById("txtConfirmPassword");
    // console.log(txtConfirmPassword);
    // txtPassword.onchange = ConfirmPassword;
    // txtConfirmPassword.onkeyup = ConfirmPassword;
    // function ConfirmPassword() {
    txtConfirmPassword.setCustomValidity("");
    if (txtPassword.value != txtConfirmPassword.value) {
        txtConfirmPassword.setCustomValidity("Passwords do not match.");
        console.log("Passwords do not match.");
    } else {
        saveForm();
    }
    // }
}

function saveForm() {
    var form_data = new FormData(document.getElementById("SubmitForm"));
    $.ajax({
        type: "POST",
        url: "/prosesregister",
        data: form_data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {
            // showlargeloader();
        },
        success: function (data) {
            // hidelargeloader();
            return false;
        },
        error: function () {
            // hidelargeloader();
            return false;
        },
    });
}
