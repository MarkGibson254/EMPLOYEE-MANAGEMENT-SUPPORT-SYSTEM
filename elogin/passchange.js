function checkPassword(form) {
    oldpass = form.oldpass.value;
    confirmpass = form.confirmpass.value;
    if (oldpass == "") {
        alert("Old password is required");
        form.oldpass.focus();
        return false;
    }
    if (newpass == "") {
        alert("New password is required");
        form.confirmpass.focus();
        return false;
    }
    if (confirmpass == "") {
        alert("Confirm password is required");
        form.confirmpass.focus();
        return false;
    }
    if (oldpass != confirmpass) {
        alert("Passwords do not match");
        form.confirmpass.focus();
        return false;
    }
    else {
        alert("Password matches and changed successfully");
        return true;
    }
}

