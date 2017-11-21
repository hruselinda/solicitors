<?php include('header.php'); ?>
<!-- the carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">   
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="carousel_background" style="background-image:url(img/03.jpg)"></div>
        </div>
        <div class="item">
            <div class="carousel_background" style="background-image:url(img/02.jpg)"></div>
        </div>
        <div class="item">
            <div class="carousel_background" style="background-image:url(img/01.jpg)"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- infotext: about and who we are-->  
<div class="container info_text">
    <div class="row">
        <div class="col-md-4">
            <h2>About</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, 
                making it over 2000 years old. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                Going through the cites of the word in classical literature, discovered the undoubtable source.</p>
       </div>
        <div class="col-md-4">
            <h2>Who we are</h2>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de 
                Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 
                translation by H. Rackham.(The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
        </div>
        <div class="col-md-4" id="news">
            <h2>Latest news</h2>
            <ul>
                <li>
                    <article>
                        <a href="news.php">
                            <div class="overflow_p">Richard McClintock looked up one of the more obscure Latin words</div>
                            <p class="italic_p">June 23, 2016</p>
                        </a>
                    </article>
                </li>
                <li>
                    <article>
                        <a href="news.php">
                            <div class="overflow_p">Since the 1500s is reproduced below for those interested</div>
                            <p class="italic_p">June 12, 2016</p>
                        </a>
                    </article>
                </li>
                <li>
                    <article>
                        <a href="contacts_.html">
                            <div class="overflow_p">Testimonials are reproduced  by the author of</div>
                            <p class="italic_p">June 3, 2016</p>
                        </a>
                    </article>
                </li>
            </ul>
        </div>
    </div>
</div>      

<?php include('footer.php'); ?>
