function displayBox() {
    var feedbackBox = document.getElementById("feedbackBoxContent");
    feedbackBox.style.display = "block";
}

function sendData() {
    var formData = new FormData(document.getElementById("feedback"));

    fetch('model.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error(error);
    });
}
