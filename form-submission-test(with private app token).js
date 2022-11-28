var data = JSON.stringify({ "fields": [
    { 
        "name": "email", 
        "value": "thelmaakosa107@gmail.com" 
    }, 
    { 
        "name": "firstname", 
        "value": "First" 
    }, 
    { 
        "name": "lastname", 
        "value": "Last" 
    }, 
    { 
        "name": "zip_code", 
        "value": "95126" 
    }, 
    { 
        "name": "how_did_you_hear_about_us_", 
        "value": "Internet Search" 
    }, 
    { 
        "name": "are_you_a_real_estate_agent_final_", 
        "value": "Yes" 
    }, 
    { 
        "name": "which_neighborhood_are_you_interested_in_", 
        "value": "Oak Tree Terrace, Los Gatos" 
    }, 
    { 
        "name": "mobilephone", 
        "value": "123456789" 
    }] 
});

const private_app_token = YOUR_APP_TOKEN

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
    if (this.readyState === 4) {
        console.log(this.responseText);
    }
});

xhr.open("POST", "https://api.hsforms.com/submissions/v3/integration/submit/4377059/29eb05cb-106e-4d3f-a3d9-f0fd6462b1fb");
xhr.setRequestHeader("Authorization", "Bearer " + private_app_token);
xhr.setRequestHeader("Content-Type", "application/json");

xhr.send(data);