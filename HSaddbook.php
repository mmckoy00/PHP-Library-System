<?php
session_start();
?> 
<!-- <!doctype html>
<html>
  <head><title>OHHS Library - Add book</title>
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');
        
        :root{
            --color-white: #fff;
            --color-black: #000;
            --color-blue: #1a73e8;            
            --shadow-normal: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
                0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.4),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --max-width: 758px;
            --min-height: 420px;
        }
        
        body{
            background-color:#b9e3f3;
            color:var(--color-black);

        }

        .mycontainer{
            width: 100%;
            height: 100%;
            display:grid;
            place-items:center;
        }

        .form-container{
                margin-top:4rem;
                height: 100%;
                text-align:center;
                width: 30%;
                border:0.5rem;
                box-shadow:var(--shadow-large);
                display:grid;
                place-items:center;
                border-radius: 9px;
                background-color:var(--color-white);
                position:relative;
            }
            form{
                margin-top:0rem;
                display:flex;
                flex-direction:column;
                align-items:start;
                width:80%;
            }

            input[type=number], input[type=text], input[type=file] {
                margin:4px;
                font-size:1rem;
                padding: 0.4em;
                padding:0.5rem;
            }
            
            input[type=number], input[type=text]{
                width: 90%;
                border-radius: 5px;
                border:1px solid grey;
            }
            input[type=submit]{
                background-color:var(--color-blue);
                color:var(--color-white);
                border:none;
                border-radius: 50%;
                cursor:pointer;
                padding: 1em;
                width:100px;
                height:100px;
                font-size:1rem;
                font-weight:600;
                text-align:center;
                position:absolute;
                box-shadow:var(--shadow-large);
                top: 10px;
                right:-20px;
            }

            h2{
                color:var(--color-blue);
                text-align:center;
               font-weight:600;
               font-size:1.8rem;
            }
            .check-box{width: 100%;}
            .error {color: #FF0000;}


    </style>
  </head>
  <body> -->

<!--   

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <h2 class="navbar-brand"><?php echo "Welcome ".$_SESSION['username']; ?></h2>
        </div>  
    </nav> 

      <div class="mycontainer">


    <div class="form-container">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
                    <h2 class="form-title">Enter Data</h2>
                    <span class = "error"><?php echo $titleErr;?></span>
                    <input type="text" name="title" placeholder="Title">
                     <span class = "error"><?php echo $authorErr;?></span> 
                    <input type="text" name="author" placeholder="Author">
                    <span class = "error"><?php echo $pubErr;?></span>
                    <input type="number" min=1900 max=2021 name="publication" placeholder="Year of Publication" >
                    <input  type="file" name="file">
                    <input type="submit" value="upload" name="submit">
                    <input type="submit" name ="next" value="NEXT"> 
                    
                </form>
    </div>
</div>

  </body>
</html> -->