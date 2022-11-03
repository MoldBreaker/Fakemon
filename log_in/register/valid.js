function check() {

    let name = document.getElementById('name').value;

    if(name.length === 0){
        document.getElementById('error').innerHTML = 'You must have name';
        return false;
    }else {
        let regex_name = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
        if(regex_name.test(name) == false){
            document.getElementById('error').innerHTML = 'Invalid Name';
            return false;
        } else{
            document.getElementById('error').innerHTML = '';
        }
    }

    let email = document.getElementById('email').value;

    if(email.length === 0){
        document.getElementById('error').innerHTML = 'You must enter email';
        return false;
    } else {
        let regex_email = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if(regex_email.test(email) == false){
            document.getElementById('error').innerHTML = 'Invalid Email';
            return false;
        } else{
            document.getElementById('error').innerHTML = '';
        }
    }

    let password = document.getElementById('password').value;

    if(password.length === 0){
        document.getElementById('error').innerHTML = 'You must enter your password';
        return false;
    }
}