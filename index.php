<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/index.css">
    <script src="https://kit.fontawesome.com/8b6dba93f9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#fetchActorsButton').click(function(event) {
            event.preventDefault();

            var birthdate = $('[name="birthdate"]').val();

            $.ajax({
                type: 'POST',
                url: 'API_Ops.php',
                data: {birthdate: birthdate},
                success: function(response) {
                    $('.actor-items').html(response);
                    $('.actor-items').css('display', 'flex');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $('.actor-items').html('<p>Error occurred. Please try again later.</p>');
                }
            });
        });

        
        var box = document.getElementById('response_container');
        var button = document.getElementById('fetchActorsButton');
        function displayContainer() {
            box.classList.toggle('show');
        }
        button.addEventListener('click', displayContainer);
    });
</script>
</head>
<body>

<?php include 'header.php'; ?>
<div class="main">
    <form  id="myForm">
        <div class="form_container">
            <section class="half_form">
                <span>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name"><br>
                </span>
                <span>
                    <label for="birthdate">Birthdate</label>
                    <input type="date" id="birthdate" name="birthdate">
                    <div class="hover-container"><button type="button" id="fetchActorsButton"><i class="fa-solid fa-circle-user"></i></button>
                        <div class="tip-box">Discover shared celebrity birthdays!</div>
                    </div><br>
                </span>
                <span>
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone"><br>
                </span>
                <span>
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address"><br>
                </span>
            </section>
            <section class="half_form">
                <span>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username"><br>
                </span>
                <span>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email"><br>
                </span>
                <span>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"><br>
                </span>
                <span>
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password"><br>
                </span>
            </section>
        </div>

        <div> 
            <button type="submit" class="button">Submit</button>
        </div>
    </form>
    <div class="actor-list" id="response_container">
        
    
        <ul class="actor-items">
           <li><div class="loadingio-spinner-spinner-2by998twmg8"><div class="ldio-yzaezf3dcmj">
<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
</div></div></li>
        </ul>
    </div>
</div>

</body>
</html>