
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact_style.css">
</head>

<body>
    <article class="wrapper">
   
    <div class="outer_box">
        <div id="contact_form" class="inner_box">

            <form action="cntc.php " method="post">

                <h2>Get in Touch</h2>

                <br>
                <input type="text" placeholder="Name" class="inp" required name="name">
                <input type="email" name="email_id" id="" placeholder="Email" class="inp" required><br>
                <input type="number" name="phone_no" id="" placeholder="Phone Number" class="inp" required>
                <select name="services" id="services" class="inp" required>
                    <option value="wedding">Services You Want</option>
                    <option value="wedding">Wedding</option>
                    <option value="ceremonies">Ceremonies</option>
                    <option value="birthday">Birthday Parties</option>
                    <option value="concerts">Concerts</option>
                    <option value="pre-wedding">Pre-Wedding</option>
                    <option value="naming-ceremonies">Naming Ceremonies</option>
                    <option value="bridal-shower">Bridal Shower</option>
                </select>
                <br>
                <hr>
                <center>
                    <input type="submit" value="Submit" id="sub-btn">
                </center>
            </form>
        </div>
        <div id="details" class="inner_box">
            <p style="color: white; font-size: 2rem;">Contact Us</p>
            <div class="add">Address: Lorem ipsum dolor sit amet</div>
            <div class="add">Phone: 1232321323
            </div>
            <div class="add">email:abc@gmail.com</div>
            <div class="add">website: abc.com</div>        
        </div>
    </div>
    
        
      </article>
</body>
</html>