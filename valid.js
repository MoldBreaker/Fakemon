function check(){
    let check = false;

    //name
    let name = document.getElementById('name').value;
    if(name.length === 0){
        document.getElementById('name_error').innerHTML = 'Fakemon must have name';
        check = true;
    } else {
        //regex name
        let regex_name = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
        if(regex_name.test(name) == false){
            document.getElementById('name_error').innerHTML = 'Invalid name. Try it again!!';
            check = true;
        } else {
            document.getElementById('name_error').innerHTML = '';
        }
    } 

    

    //type1
    let type1 = document.getElementById('type1').value;

    if(type1 === 'none'){
        document.getElementById('type1_error').innerHTML = 'Fakemon must have main type';
        check = true;
    }
    
    let type2 = document.getElementById('type2').value;
    if(type1.localeCompare(type2) == 0){
        document.getElementById('type2_error').innerHTML = 'two type cannot be the same';
        check = true;
    } else{
        document.getElementById('type2_error').innerHTML = '';
    }

    //stat

    let hp = document.getElementById('hp').value; 
    let atk = document.getElementById('atk').value; 
    let def = document.getElementById('def').value; 
    let spatk = document.getElementById('spatk').value; 
    let spdef = document.getElementById('spdef').value; 
    let speed = document.getElementById('speed').value; 

    let regex_stat = /^[-0-9]/;
    if(regex_stat.test(hp) == false){
        document.getElementById('hp_error').innerHTML = 'Invalid HP ';
        check = true;
    } else{
        if(hp <= 0){
            document.getElementById('hp_error').innerHTML = 'HP cant less than or equal to 0';
            check = true;
        } else{
            document.getElementById('hp_error').innerHTML = '';
        }
    }

    if(regex_stat.test(atk) == false){
        document.getElementById('atk_error').innerHTML = 'Invalid Atk ';
        check = true;
    } else{
        if(atk <= 0){
            document.getElementById('atk_error').innerHTML = 'Atk cant less than or equal to 0';
            check = true;
        } else {
            document.getElementById('atk_error').innerHTML = '';
        }
    }

    if(regex_stat.test(def) == false){
        document.getElementById('def_error').innerHTML = 'Invalid Def ';
        check = true;
    } else{
        if(def <= 0){
            document.getElementById('def_error').innerHTML = 'Def cant less than or equal to 0';
            check = true;
        } else{
            document.getElementById('def_error').innerHTML = '';
        }
    }

    if(regex_stat.test(spatk) == false){
        document.getElementById('spatk_error').innerHTML = 'Invalid Sp.Atk ';
        check = true;
    }else{
        if(spatk <= 0){
            document.getElementById('spatk_error').innerHTML = 'Sp.Atk cant less than or equal to 0';
            check = true;
        } else {
            document.getElementById('spatk_error').innerHTML = '';  
        }
    }

    if(regex_stat.test(spdef) == false){
        document.getElementById('spdef_error').innerHTML = 'Invalid Sp.Def ';
        check = true;
    }else{
        if(spdef <= 0){
            document.getElementById('spdef_error').innerHTML = 'Sp.Def cant less than or equal to 0';
            check = true;
        } else{
            document.getElementById('spdef_error').innerHTML = '';
        }
    }

    if(regex_stat.test(speed) == false){
        document.getElementById('speed_error').innerHTML = 'Invalid speed ';
        check = true;
    } else{
        if(speed <= 0){
            document.getElementById('speed_error').innerHTML = 'Speed cant less than or equal to 0';
            check = true;
        } else{
            document.getElementById('speed_error').innerHTML = '';
        }
    }

    //info
    let info = document.getElementById('info').value;
    if(info.length === 0){
        document.getElementById('info_error').innerHTML = 'Fakemon must have info';
        check = true;
    } else{
        document.getElementById('info_error').innerHTML = '';
    }

    //image
    let image = document.getElementById('image').value;
    if(image.length === 0){
        document.getElementById('image_error').innerHTML = 'Fakemon must have image';
        check = true;
    } else{
        document.getElementById('image_error').innerHTML = '';
    }

    if(check == true){
        return false;
    }
}