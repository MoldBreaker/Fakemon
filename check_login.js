function check_login(log) {
    if(log == false){
        window.location.replace("log_in/sign_in.php?error=You haven\'t log in now");
        return false;
    }
}