<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiting Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
        <div class="column" style="background-color:#aaa;">
            <input type="file" id="photo" />
            <button onclick="uploadImage()">Upload Image</button>
            <form method="post" action="card.php" enctype="">
                <div class="col-sm-4">
                    <!-- <label for="formFileLg" class="form-label">Upload Profile Image</label> -->
                    <!-- <input type="file" class="form-control" name="image" id="upload"> -->
                </div>
                <div class="col-sm-4">
                    <label for="inputtext" class="form-lable">Name</label>
                    <input type="text" class="form-control" id="inputtext" name="name" placeholder="Enter Your Name">
                </div>
                <div class="col-sm-4">
                    <label for="inputemail" class="form-lable">Email Address</label>
                    <input type="email" class="form-control" id="inputtext" name="email"
                        placeholder="Enter Your Email Address">
                </div>
                <div class="col-sm-4">
                    <label for="inputtext" class="form-lable">Mobile Number</label>
                    <input type="text" class="form-control" id="inputtext" name="number"
                        placeholder="Enter Your Mobile Number">
                </div>
                <div class="col-sm-4">
                    <label for="inputtext" class="form-lable">Address</label>
                    <input type="text" class="form-control" id="inputtext" name="address">
                </div>
                <div class="col-sm-4">
                    <label for="inputtext" class="form-lable">Facebook</label>
                    <input type="text" class="form-control" id="inputtext" name="facebook">
                </div>
                <div class="col-sm-4">
                    <label for="inputtext" class="form-lable">Instagram</label>
                    <input type="text" class="form-control" id="inputtext" name="instagram">
                </div>
                <div class="col-sm-4">
                    <label for="inputtext" class="form-lable">Git</label>
                    <input type="text" class="form-control" id="inputtext" name="git">
                </div>
                <div class="col-sm-4">
                    <label for="inputtext" class="form-lable">linkedin</label>
                    <input type="text" class="form-control" id="inputtext" name="linkedin">
                </div>
                <div class="col-sm-4">
                    <input type="submit" value="Submit" id="button">
                </div>
            </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

</body>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

<script>
var firebaseConfig = {
    apiKey: "AIzaSyDit9m9QkW7OGCjBb4WnKEOzyrwvRDFylw",
    authDomain: "gamweb-640af.firebaseapp.com",
    projectId: "gamweb-640af",
    storageBucket: "gamweb-640af.appspot.com",
    messagingSenderId: "364385896794",
    appId: "1:364385896794:web:a759260c6d523b6c108b63"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
console.log(firebase);

function uploadImage() {
    const ref = firebase.storage().ref();
    const file = document.querySelector("#photo").files[0];
    const name = +new Date() + "-" + file.name;
    const metadata = {
        contentType: file.type
    };
    const task = ref.child(name).put(file, metadata);
    task
        .then(snapshot => snapshot.ref.getDownloadURL())
        .then(url => {
            console.log(url);
            document.querySelector("#image").src = url;
        })
        .catch(console.error);
}

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const snap = document.getElementById("snap");
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
    audio: false,
    video: {
        width: 400,
        height: 400
    }
};

// Access webcam
async function init() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
    } catch (e) {
        errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
    }
}

// Success
function handleSuccess(stream) {
    window.stream = stream;
    video.srcObject = stream;
}

// Load init
init();

// Draw image
var context = canvas.getContext('2d');
snap.addEventListener("click", function() {
    context.drawImage(video, 0, 0, 640, 480);
    var image = new Image();
    image.id = "pic";
    image.src = canvas.toDataURL();
    console.log(image.src)
    var button = document.createElement('button')
    button.textContent = 'Upload Image'
    document.body.appendChild(button)

    button.onclick = function() {
        const ref = firebase.storage().ref();
        ref.child(new Date() + '-' + 'base64').putString(image.src, 'data_url').then(function(snapshot) {
            console.log('Uploaded a data_url string!');
            alert("Image Uploaded")
        });
    }
});
</script>

</html>