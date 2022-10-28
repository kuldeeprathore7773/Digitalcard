<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiting Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    

/* card  */
.row>* {
  flex-shrink: 0;
  width: 50%;
  height: 600px;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * .5);
  padding-left: calc(var(--bs-gutter-x) * .5);
  margin-top: var(--bs-gutter-y);
}

#bg2{
  background-image: url(https://coolbackgrounds.io/images/backgrounds/index/disco-dba865f1.png);
}

.user-image{
  display: flex;
  justify-content: center;
  }

.content{
  color: #565656;
  padding: 2.2em;
  justify-content: space-evenly;
}
.name:hover{
  color: aquamarine;
}
.email:hover{
  color: aquamarine;
}
.phone:hover{
  color: aquamarine;
}
.address:hover{
  color: aquamarine;
}

.name{
  font-size: 1.5em;
  text-transform: uppercase;
}

.username{
  font-size: 1em;
  color: #9e9e9e;
}

.links{
  display: flex;
  justify-content: center;
  margin: 1.5em 0;
}

a{
  text-decoration: none;
  color: #565656;
  transition: all 0.3s;
  font-size: 2em;
  margin-right: 1.2em;
}

.insta:hover{
  color:rgb(255, 70, 101);
  transform: scale(2,2);
}

.git:hover{
  color:rgb(0, 0, 0);
  transform: scale(2,2);
}

.linkedin:hover{
  color:rgba(4, 0, 253, 0.842);
  transform: scale(2,2);
}

.facebook:hover{
  color:rgb(4, 0, 255);
  transform: scale(2,2);
}



</style>

<body>
    <?php
                  
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $number=$_POST['number'];
                    $address=$_POST['address'];
                    $facebook=$_POST['facebook'];
                    $instagram=$_POST['instagram'];
                    $git=$_POST['git'];
                    $linkedin=$_POST['linkedin'];
                ?>

    </div>
    <div class="column" id="bg2">
        <div class="profile">
            <div class="user-image">
                <!-- <img src="data:image/jpeg;base64,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"
                       class="img-thumbnail" alt="this image contains user-image"> -->
            </div>
            <div class="content">
                <h3 class="name"><i class="fa fa-user"></i> <?php echo $name;?></h3>
                <h3 class="email"><i class="fa fa-envelope"></i> <?php echo $email;?></h3>
                <h3 class="phone"><i class="fa fa-mobile"></i> <?php echo $number;?></h3>
                <h3 class="address"><i class="fa fa-map"></i> <?php echo $address;?></h3>


                <div class="links">
                    <a class="facebook" href="<?php echo $facebook; ?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a class="git" href="<?php echo $git; ?>" target="_blank">
                        <i class="fa fa-github"></i>
                    </a>

                    <a class="linkedin" href="<?php echo $linkedin; ?>" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>

                    <a class="insta" href="<?php echo $instagram; ?>" target="_blank" title="GFG_instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>