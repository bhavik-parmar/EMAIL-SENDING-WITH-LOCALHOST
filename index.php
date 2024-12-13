<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailBox</title>
    <style>
        
       
        .container {
            padding: 50px;
            width: 45%;
            
            
            border-radius: 10px;
            margin: 0 auto;
            
        }

        .container form {
            background-color: #fff;
            padding: 50px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container form label {
            display: block;
            margin-bottom: 10px;
            color:#333;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
        }

        .container form input[type="email"], .container form input[type="text"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container form textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container form input[type="submit"] {
            width: 80px;
            height: 40px;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }

        .container form input[type="submit"]:hover {
            background-color: #3e8e41;
            
        }
        h1{
            text-align: center;
            color:#4CAF50;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SEND MAIL</h1>
        <form action="email.php" method="post">
            <label>To :</label>
            <input type="email" name="receiver" class="inputfiels" required>
            <label>From :</label>
            <input type="email" name="sender" class="inputfiels" required>
            <label>Subject :</label>
            <input type="text" name="txtsub" class="inputfiels" required>
            <label>Message :</label>
            <textarea name="txtmsg"></textarea>
            <input type="submit" name="subbtn" value="SEND">
        </form>
    </div>
</body>
</html>