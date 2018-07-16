<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Backend side of blog</h1>

        <p style="color: #28a4c9">Hi, my dear admin! To begin work with data press the button below</p>

        <form action="/site/logout" method="post"><input type="hidden" name="_csrf-backend" >
            <button type="submit" class = "btn btn-lg btn-success">
                <img src="http://cascadedirect.org/wp-content/uploads/2016/02/Male-icon.png" width="30" height="30">
                Get superpower
            </button>
        </form>

<!--            <p><a class="btn btn-lg btn-success" href="/site/logout" methods="POST">Get superpower</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h2>Work with tables</h2>

                <p>Get ready to get data from tables below</p>

                <p><a class="btn btn-default" href = "post">Posts</a></p>
                <p><a class="btn btn-default" href = "comment">Comments</a></p>
                <p><a class="btn btn-default" href = "category">Category</a></p>

            </div>
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
<!--            </div>-->

        </div>

    </div>
</div>
