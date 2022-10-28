<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    *{
    margin: 0px;
    padding: 0px;
}

#section-1{
    background-color: rgb(183, 215, 243);
    padding: 10px;
}
#section-2{
    background-color: rgb(183, 215, 243);
    padding: 10px;
}
#section-3{
    background-color: rgb(183, 215, 243);
    padding: 10px;
}
#section-4{
    background-color: rgb(183, 215, 243);
    padding: 10px;
}
#section-5{
    background-color: rgb(183, 215, 243);
    padding: 10px;
}

</style>

<body>
    <form method="post" action="newcard.php" class="form-container">
        <!-- ---------- -->
        <div class="col-sm-6 mb-3 mx-auto" id="section-1">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Business</label>
                <input type="text" name="companyname" class="form-control" id="formGroupExampleInput" placeholder="Company Name" required>
            </div>
        </div>

        <!-- ---------- -->
        <div class="col-sm-6 mb-3 mx-auto" id="section-2">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Logo / Profile Pic</label>
                <div class="mb-3">
                    <input type="file" id="photo" />
                    <button onclick="uploadImage()">Upload Image</button>
                </div>
            </div>

        </div>
        <!-- ---------- -->

        <div class="col-sm-6 mb-3 mx-auto" id="section-3">
            <div class="mb-3">
                <div class="col-sm-6">
                    <label for="formGroupExampleInput" class="form-label">Theme & Template</label>
                </div>
                <button type="button" class="btn btn-dark">Change Theme</button>
            </div>
        </div>

        <!-- ---------- -->

        <div class="col-sm-6 mb-3 mx-auto" id="section-4">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Prefix</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mr.</a></li>
                    <li><a class="dropdown-item" href="#">Ms.</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    <!-- <li><a class="dropdown-item" href="#">Separated link</a></li> -->
                </ul>
                <input type="text" name="name" class="form-control" aria-label="Text input with dropdown button"
                    placeholder="Enter Name" required>
            </div>

            <div class="mb-3 mx-auto">
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="Enter Designation (Optional)">
            </div>

            <div class="input-group mb-3 mx-auto">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">91+</button>
                
                <input type="text" name="phonenumber" class="form-control" aria-label="Text input with dropdown button"
                    placeholder="Enter Phone Number" required>
            </div>

            <div class="input-group mb-3 mx-auto">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">91+</button>
            
                <input type="text" name="whatappnumber" class="form-control" aria-label="Text input with dropdown button"
                    placeholder="Enter Whatsapp Number" required>
            </div>

            <div class="mb-3 mx-auto">
                <textarea name="address" id="" cols="30" rows="2" placeholder="Enter Address" class="form-control"
                    required></textarea>
            </div>

            <div class="mb-3 mx-auto">
                <input type="text" name="location" class="form-control" id="formGroupExampleInput"
                    placeholder="Enter Map Location Link">
            </div>

            <div class="mb-3 mx-auto">
                <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Email (optional)">
            </div>

            <div class="input-group mb-3 mx-auto">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">http</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">http</a></li>
                    <li><a class="dropdown-item" href="#">https</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    <!-- <li><a class="dropdown-item" href="#">Separated link</a></li> -->
                </ul>
                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                    placeholder="Enter Website Link">
            </div>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>