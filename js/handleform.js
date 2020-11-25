function hideTextArea(param) {
    switch (param) {
        case 'docker':
            $('.summer-dock').attr('class', 'summer-dock d-none justify-content-center mt-2');
            document.getElementById("statedock").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'kubernetes':
            $('.summer-kub').attr('class', 'summer-kub d-none justify-content-center mt-2');
            document.getElementById("statekub").className = "d-flex justify-content-center mt-10 text-success";
            break;
        default: break;
    }
}
function showTextArea(param) {
    switch (param) {
        case 'docker':
            $('.summer-dock').attr('class', 'summer-dock d-block justify-content-center mt-2');
            $('#descriptiondock').summernote();
            document.getElementById("statedock").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'kubernetes':
            $('.summer-kub').attr('class', 'summer-kub d-block justify-content-center mt-2');
            $('#descriptionkub').summernote();
            document.getElementById("statekub").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        default: break;
    }
}

function summernote() {
    $('.description').summernote();
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