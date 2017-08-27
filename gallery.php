  <!DOCTYPE html>
  <html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    	<style>
    		.ct
    		{
    		    width:auto;
    		    height:300px;
    		    margin:10px;
    		}
    		.timepass
    		{
    		    display: flex;
                justify-content: center;
                flex-wrap: wrap;
    		}
    
    	</style>
    
    </head>
    <body>
    	<!--NAVBAR-->
    	<div class="navbar-fixed">
    		<nav class="blue">
    			<div class="navbar-wrapper">
    			     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    				<a href="#" class="brand-logo" style="margin-left: 16px">My Personal Cloud</a>
    				<ul id="nav-mobile" class="right hide-on-med-and-down">
    					<li><a href="index.html">Upload</a></li>
    					<li><a href="gallery.php">Gallery</a></li>
    				</ul>
    				<ul class="side-nav" id="mobile-demo">
    				    <li><a href="index.html">Upload</a></li>
    				    <li><a href="gallery.php">Gallery</a></li>
    				</ul>
    			</div>
    		</nav>
    	</div>
        <div class="timepass">
        <?php
        $dir = "./files/";
        
        // Open a directory, and read its contents
        if (is_dir($dir))
        {
          if ($dh = opendir($dir))
          {
            while (($file = readdir($dh)) !== false)
            {
                $filepart = pathinfo($file);
                $ext = $filepart['extension'];
                if($filepart['extension']=="png" || $ext == "jpg" )
                {
                    echo "<img class=\"ct\" src=\"/files/".$file."\">";
                }
                else if($ext =="pdf" || $ext == "doc" || $ext=="txt")
                {      
//                      echo "<iframe class=\"ct\" src=\"/files/".$file."\" width=\"100%\" style=\"height:100%\"></iframe>";
                      echo 
                      "<a href=\"/files/".$file. "\" download >
                      <iframe class=\"ct\" src=\"/files/".$file."\" width=\"100%\" style=\"height:100%\"></iframe>
                      </a>";

                 }
            }
                closedir($dh);
          }
        }
        ?>    	
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>