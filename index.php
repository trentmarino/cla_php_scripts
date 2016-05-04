<html>
<head>
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>
<?php
include 'db_connect.php';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
<!--<aside id="displayImage">-->
<!--    <section id="imageHolder">-->
<!--        <img id="randomImg" src="A301_M_Bed_View.JPG" width="450" height="400">-->
<!--    </section>-->
<!--</aside>-->
<div class="container">
    <div class="starter-template">
        <h1>Room information</h1>
        <form id="update" action="#" method="post" enctype="multipart/form-data">
            <label>
                Property:
            </label>
            <select class="property">

            </select>
            <label>
                Room:
            </label>
            <select class="room">
            </select>
            <button type="button" class="btn btn-default btn-sm">
                Add New Room
                <span class="glyphicon glyphicon-plus"></span>
            </button>
            <button id="editval" type="button" class="btn btn-default btn-sm" >
                Edit
                <span class="glyphicon glyphicon-cog"></span>
            </button>
        </form>
        <form action="insert_room_info.php" method="post">
            <ul id="form">
            <li><label>
                Room name:
            </label>
            <input id="roomName" id="name" type="text">
          </li>
                <li><label>
                        product ID:
                    </label>
                    <input id="productid" id="name" type="text">
                </li>


                <li><label>
                    Location name:
                </label>
                <input id="location" id="name" type="text">
              </li>

            <li><label>
                    min-rate:
                </label>
                <input id="min-rate" id="name" type="text">
              </li>

            <li><label>
                    max-rate:
                </label>
                <input id="max-rate" id="name" type="text">
              </li>

                <li><label>
                        number of people:
                    </label>
                    <input id="noGuests" id="name" type="text">
                   </li>
            </ul>
            <div id="updateButton">
            <button type="button" class="btn btn-default btn-sm">
                Update
            </button>
                <button id="loadPage" type="button" class="btn btn-default btn-sm">
                    Load Page
                </button>
            </div>
        </form>
    </div>
</div>
<div id="description">
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
        <button id="commit" type="button" class="btn btn-default btn-sm">
        Commit Changes
        <span class="glyphicon glyphicon-ok"></span>
    </button>
    </div>
    <form>
    <div id="blocks">
    </div>
    </form>
</div>
<script src="pull_room_information.js"></script>
<script src="blockGenerator.js"></script>

</body>
</html>


