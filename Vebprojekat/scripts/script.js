document.addEventListener("DOMContentLoaded", function () {
    const loginBtn = document.querySelector(".login-btn");
    const signupBtn = document.querySelector(".signup-btn");
    const loginDialog = document.querySelector(".login-dialog");
    const signupDialog = document.querySelector(".signup-dialog");
    const overlay = document.querySelector(".overlay");
    const closeBtns = document.querySelectorAll(".close-btn");

    function showDialog(dialog) {
        dialog.style.display = "block";
        overlay.style.display = "block";
    }

    function hideDialog() {
        loginDialog.style.display = "none";
        signupDialog.style.display = "none";
        overlay.style.display = "none";
    }

    loginBtn.addEventListener("click", function (e) {
        e.preventDefault();
        showDialog(loginDialog);
    });

    signupBtn.addEventListener("click", function (e) {
        e.preventDefault();
        showDialog(signupDialog);
    });

    closeBtns.forEach(function (btn) {
        btn.addEventListener("click", hideDialog);
    });

    overlay.addEventListener("click", hideDialog);
});
