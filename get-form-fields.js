
var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

const private_app_token = YOUR_APP_TOKEN

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://api.hubapi.com/forms/v2/fields/29eb05cb-106e-4d3f-a3d9-f0fd6462b1fb");
xhr.setRequestHeader("Authorization", "Bearer " + private_app_token);

xhr.send();