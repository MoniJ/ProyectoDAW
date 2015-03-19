<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php
    function createDatabaseConnection($servername, $username, $password, $dbname){
        // Create connection
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $connection;
    }
    
    function closeDatabaseConnection($connection){
        mysqli_close($connection);
    }

    function showDatabaseElement($connection, $sql){
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<li id=\"". $row["id"]."a\" draggable=\"true\" ondragstart=\"drag(event)\">" . $row["name"]. "</li>";
            }
        } else {
            echo "0 results";
        }
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food";
    $connection = createDatabaseConnection($servername, $username, $password, $dbname);
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic - Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script>
            $(function() {
                $( "#tabs" ).tabs();
            });
        </script>
        <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }
            id=0;
            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                var itm = document.getElementById(data);
                var cln = itm.cloneNode(true);
                var elem = document.createElement("img");
                elem.setAttribute("src", "http://static.tumblr.com/84d2f4dd4634b16ccac1e14e11f72fae/rv80fwi/Dain748yi/tumblr_static_9fg10i6brsw0w40wskk0skg8w.png");
                elem.setAttribute("id", "deleteElement");
                elem.setAttribute("onclick", "deleteElement("+id+")");
                cln.id=id;
                id++;
                cln.draggable=false;
                cln.ondragstart="";
                cln.appendChild(elem);
                document.getElementById("foodSelections").appendChild(cln);
            }
            
            function deleteElement(id){
                return (elem=document.getElementById(id)).parentNode.removeChild(elem);
            }
            function displayList(){
                var list = document.getElementById("foodSelections");
                var size = list.length;
                var response = "";
                var i = 0;
                while((list.getElementsByTagName("LI")[i]))
                {
                    var element = list.getElementsByTagName("LI")[i].innerText;
                    response+=(element+"<br>");
                    i++;
                }
                document.getElementById("Results").innerHTML=response;
            }
        </script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Transit</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="generic.php">Comida</a></li>
						<li><a href="elements.html">IMC</a></li>
						<li><a href="#" class="button special">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Calcula cuentas calorías ingeriste hoy</h2>
					</header>
                        <div class="table-wrapper">
                            <table class="alt">
                                <thead>
                                    <tr>
                                        <th>¿Qué comiste hoy?</th>
                                        <th>Comida</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div id=myDiv ondrop="drop(event)" ondragover="allowDrop(event)">
                                            <ul id="foodSelections"></ul>
                                            </div></td>
                                        <td>
                                        <div id="tabs">
                                          <ul>
                                            <li><a href="#tabs-1">Frutas</a></li>
                                            <li><a href="#tabs-2">Vegetales</a></li>
                                            <li><a href="#tabs-3">Proteínas</a></li>
                                          </ul>
                                          <div id="tabs-1">
                                            <ul id="foodOptions">
                                                <?php $sql = "SELECT id, name FROM food WHERE type=1";
                                                  showDatabaseElement($connection, $sql);?>
                                            </ul>
                                          </div>
                                          <div id="tabs-2">
                                            <ul id="foodOptions">
                                                <?php $sql = "SELECT id, name FROM food WHERE type=2";
                                                  showDatabaseElement($connection, $sql);?>
                                            </ul>
                                          </div>
                                          <div id="tabs-3">
                                            <ul id="foodOptions">
                                                <?php $sql = "SELECT id, name FROM food WHERE type=3";
                                                  showDatabaseElement($connection, $sql);?>
                                            </ul>
                                          </div>
                                        </div>                                
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <a class="button" onclick="displayList()">Calcula calorias</a>
                    <p id=Results></p>
                </div>
			</section>

		<!-- Footer -->
	</body>
</html>
