// sendToDiscord.js

function sendService() {
    console.log("sendService function called"); 
    const url = "https://discord.com/api/webhooks/1191487837762244769/UL86mPrPlcclgJh2dN4GSqqLjl1dx0iRLWhblFDrerS34Tv91o2fMiQyooT-Ku-h6IXo";

    // Get values from the input fields
    var name = document.querySelector(".clientName").value;
    var serviceDes = document.querySelector(".serviceDescription").value;

    // Create the message content
    var contents = `Name: ${name}\nService Description: ${serviceDes}`;

    const request = new XMLHttpRequest();
    request.open("POST", url);
    
    // Set the content type header
    request.setRequestHeader('Content-type', 'application/json');

    const params = {
        content: contents
    };

    request.send(JSON.stringify(params));
    alert("Service request sent!"); 
}


// sendToDiscord.js

function contact() {
    
    const url = "https://discord.com/api/webhooks/1191494882091597895/JwelljVlo4BgmJD489o6Ko0Mj2y8mig3IhX_duLRDXtTTbZmIeZrcS9gZ5ods-Yon27p";


    // Get values from the input fields
    var name = document.getElementById("email").value;
    var service = document.getElementById("textarea").value;

    // Create the message content
    var contents = `Name: ${name}\nService Description: ${service}`;

    const request = new XMLHttpRequest();
    request.open("POST", url);
    
    // Set the content type header
    request.setRequestHeader('Content-type', 'application/json');

    const params = {
        content: contents
    };

    request.send(JSON.stringify(params));
    alert("contact reached!"); 
}
