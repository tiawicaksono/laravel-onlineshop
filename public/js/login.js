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

// $(function () {});
// function clickButtonSignup() {
//     var txtPassword = document.getElementById("txtPassword");
//     // console.log(txtPassword);
//     var txtConfirmPassword = document.getElementById("txtConfirmPassword");
//     // console.log(txtConfirmPassword);
//     // txtPassword.onchange = ConfirmPassword;
//     // txtConfirmPassword.onkeyup = ConfirmPassword;
//     // function ConfirmPassword() {
//     txtConfirmPassword.setCustomValidity("");
//     if (txtPassword.value != txtConfirmPassword.value) {
//         txtConfirmPassword.setCustomValidity("Passwords do not match.");
//         console.log("Passwords do not match.");
//     } else {

//     }
//     // }
// }
$("#btnSignup").on("click", function (e) {
    e.preventDefault();
    var form = $("#submit_form");
    var form_post = form.serialize();
    var form_reset = form[0].reset();
    $.ajax({
        type: "POST",
        url: "/prosesregister",
        data: form_post,
        // cache: false,
        // contentType: false,
        // processData: false,
        beforeSend: function () {
            // showlargeloader();
        },
        success: function (data) {
            alert(data.success);
            form_reset;
        },
        error: function () {
            console.log("error");
            // hidelargeloader();
            return false;
        },
    });
});

$("#btnSignin").on("click", function (e) {
    e.preventDefault();
    var form = $("#signin-form");
    var form_post = form.serialize();
    var form_reset = form[0].reset();
    $.ajax({
        type: "POST",
        url: "/prosessignin",
        data: form_post,
        // cache: false,
        // contentType: false,
        // processData: false,
        beforeSend: function () {
            // showlargeloader();
        },
        success: function (response) {
            if (response.success) {
                window.location.href = "/";
            } else {
                alert(response.message);
            }
        },
        error: function () {
            console.log("error");
            // hidelargeloader();
            return false;
        },
    });
});
