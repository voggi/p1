<?php

require('random-quote.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Project 1</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <img src="/images/me.jpg" alt="Photo of Nicolas Vogelpoth" class="img-fluid rounded">
                </div>

                <div class="col-8">
                    <h3>Nicolas Vogelpoth</h3>

                    <p>The first time I encountered software engineering was at a university course about Java. I instantly liked it. Programming became a part of my academic and professional career - sometimes more, sometimes less. I like the way people share knowledge around the globe. I like the speed at which the technology changes. And I am amazed by the creativity that unfolds.</p>

                    <p>I started my career in an American investment bank in London. In 2016 I moved back to Germany, which is where I grew up. I now work for an energy company and I manage their financial portfolio. Financial Technology (FinTech) is a buzzword that I encounter a lot. I hold a Diploma in financial and insurance mathematics and a PhD in mathematics.</p>
            
                    <br>

                    <blockquote class="blockquote">
                        <p><?php echo getRandomQuote(); ?></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </body>
</html>
