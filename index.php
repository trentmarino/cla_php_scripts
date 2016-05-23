<html>
<head>
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid.css.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/vendor/jquery.ui.widget.js"></script>
    <script src="js/jquery.iframe-transport.js"></script>
    <script src="js/jquery.fileupload.js"></script>

</head>
<body>
<?php
include 'db_connect.php';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="row">
    <div class="col content" id="preview-screen">
        <div id="page">
           
        </div>

    </div>
    <div id="container">
        <div class="starter-template">
            <h1>Room information</h1>
            <form class="formDropdowns" id="update" action="#" method="post" enctype="multipart/form-data">
                <label>
                    Property:
                </label>
                <select class="property">

                </select>
                <br>
                <label id="roomLabel">
                    Room:
                </label>
                <select class="room">
                </select>
                <br>
                <button id="editval" type="button" class="btn btn-default btn-sm">
                    Edit
                    <span class="glyphicon glyphicon-cog"></span>
                </button>
            </form>
            <form action="update_room_info.php" method="post">
                <ul id="form">
                    <li><label>
                            Room name:
                        </label>
                        <input class="cmsTextFields" id="roomName" name="roomName" type="text">
                    </li>
                    <li><label>
                            product ID:
                        </label>
                        <input class="cmsTextFields" id="productid" name="productid" type="text">
                    </li>


                    <li><label>
                            Location name:
                        </label>
                        <input class="cmsTextFields" id="location" id="name" type="text">
                    </li>

                    <li><label>
                            min-rate:
                        </label>
                        <input class="cmsTextFields" id="min-rate" name="min-rate" type="text">
                    </li>

                    <li><label>
                            max-rate:
                        </label>
                        <input class="cmsTextFields" id="max-rate" name="max-rate" type="text">
                    </li>

                    <li><label>
                            number of people:
                        </label>
                        <input class="cmsTextFields" id="noGuests" name="noGuests" type="text">
                    </li>
                </ul>
                <div id="updateButton">
                    <button type="submit" class="btn btn-default btn-sm">
                        Update
                    </button>
                    <button id="loadPage" type="button" class="btn btn-default btn-sm">
                        Load Page
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="status-Block">
    <span id="status">Test</span>
</div>
<div id="description">
    <form method="post" id="roomPage">
        <div id="sideBar">
            <button id="addBlock" type="button" class="btn btn-default btn-sm">
                Add Block
                <span class="glyphicon glyphicon-plus"></span>
            </button>
            <button id="removeBlock" type="button" class="btn btn-default btn-sm">
                Remove Block
                <span class="glyphicon glyphicon-minus"></span>
            </button>
            <button id="preview" type="button" class="btn btn-default btn-sm">
                Preview page
                <span class="glyphicon glyphicon-ok-circle"></span>
            </button>
            <button type="button" id="commit" class="btn btn-default btn-sm">
                Commit Changes
                <span class="glyphicon glyphicon-ok"></span>
            </button>
        </div>
        <div id="blocks">
        </div>
        <input id="result" name="result" type="text" style="visibility: hidden">
    </form>
    <!--    <span id="result"></span>-->

</div>
<script src="pull_room_information.js"></script>
<script src="blockGenerator.js"></script>
<script src="android_preview.js"></script>

</body>
</html>


