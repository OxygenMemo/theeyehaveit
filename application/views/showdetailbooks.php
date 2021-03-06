<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
           hr{
               border: 1px black solid;
           }
   div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
    hr{
        border: 1px solid black;
    }
    
        </style>
    </head>
    <body>
    <div class="container-fluid">
    
       <div class="col-sm-12">
            <div class="col-sm-9">
                <H1>TheEyeHaveIt</H1>
            </div>
            <div class="col-sm-3">
                <input type="button" value="Profile">
                <button>ShopingChech</button> 
            </div>
       </div>
       <hr >
       <div class="col-sm-12">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <?php echo form_open('Controller_Catalog/search'); ?>
                    <input type="text" name="searchname">
                    <select name="searchoption">
                        <option value="all">all</option>
                    </select>
                    <input type="submit" value="search">
                </form>

            </div>
        </div>
        <hr>

        <!-- inner show books !-->
        <div class="col-sm-12">
           
            <?php foreach($result as $row){ ?>
            <div class="col-sm-3">
                    <div class="gallery">
                            <a target="_blank" href="<?php echo $row->Book_img; ?>">
                              <img src="<?php echo $row->Book_img; ?>" alt="Fjords" width="300" height="200">
                            </a>
                            <div class="desc"></div>
                    </div>
            </div>
            <div class="col-sm-9">
                <h1><?php echo $row->Book_name; ?></h1>
                <p>Author : <?php echo $row->Book_author ?></p>
                <p>Publicher : <?php echo $row->Book_publicher ?></p>
                <p>Detail : <?php echo $row->Book_detail ?></p>
                <p>Catagor : <?php echo $row->Book_catagory ?></p>
                <p>Price :<?php echo $row->Book_price ?></p>
            </div>
            <?php } ?>
        </div>

        
    </div>

    </body>
</html>