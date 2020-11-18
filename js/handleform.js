function hideTextArea(param) {
    switch (param) {
        case 'docker':
            document.getElementById("descriptiondock").className = "d-none";
            document.getElementById("statedock").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'kubernetes':
            document.getElementById("descriptionkub").className = "d-none";
            document.getElementById("statekub").className = "d-flex justify-content-center mt-10 text-success";
            break;
        default: break;
    }
}
function showTextArea(param) {
    switch (param) {
        case 'docker':
            document.getElementById("descriptiondock").className = "d-block";
            document.getElementById("statedock").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'kubernetes':
            document.getElementById("descriptionkub").className = "d-block";
            document.getElementById("statekub").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        default: break;
    }
}
function send(title) {
    //here you can make a post query to your php side, and the php will send the email
    console.log('docker description: ', document.getElementById("descriptiondock").value);
    console.log('kubernetes description: ', document.getElementById("descriptionkub").value);

    var data = {
        "type": title,
        "dockerDescription": document.getElementById("descriptiondock").value,
        "kubernetesDescription": document.getElementById("descriptionkub").value
    };

    console.log('data: ', data);

    /***
     * in post function you will send data to index.php then you'll add condition ex: isset($_POST['title'])
     * then you'll add php code to send email to your static emails
     */
    /*
    $.post("/", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
      });
    */
}