
var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

const private_app_token = YOUR_APP_TOKEN

xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://api.hubapi.com/crm/v3/objects/contacts?limit=10&archived=false");
xhr.setRequestHeader("Authorization", "Bearer " + private_app_token);

xhr.send();