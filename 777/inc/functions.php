
<!-- 4.1 Creating a “functions.php” external file. 
Your folder structure should already have a folder called “inc”.  
Within the “inc” folder, create a new empty file and call it “functions.php”. 
Open the functions.php file and add an opening and closing PHP tag:

-->

<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
            /*
            
            5.3 Embed the corresponding CSS file. 
            Your folder structure should already have a “css” folder and a “styles.css” file. 
            Let’s embed it. 
            Within the <head> section, add the following lines to embed the external CSS file.
            Save and run the file. 
            You should see now a couple of background images.
            Open the CSS file to check the different rules included. 
            */

            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "main">
            <?php
                play();
            ?>
        
            <!-- 5.2 Add the “main” <div> container.
            In order to give the right style to the different elements in the webpage, we need to surround the elements within <div> containers and give them an id (or a class).  
            Surround the content in the <body> tag with the <div id=”main”> container shown below)
            -->

            <form>
                <input type="submit" value="Spin!"/>
            </form>
    
        </div>
        
        <?php
        /*
        for ($i=1;$i<4;$i++) {
             ${"randomValue". $i} = rand(0,2);
             displaySymbol(${"randomValue". $i} );
             
        }
        displayPoints($randomValue1, $randomValue2, $randomValue3);
        */
        
        // 5.4 Next, we need to modify the “displaySyimbol()” function to take one more parameter. Let’s call it “$pos”, which stands for “position” 

        function displaySymbol($randomValue, $pos) {
            switch ($randomValue) {
                case 0: $symbol = "seven";
                   break;
                case 1: $symbol = "cherry";
                    break;
                case 2: $symbol = "lemon";
                    break;
                     
                }
                // Finally, we need to add the id within the <img /> tag, using the value of the parameter $pos:

                echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "'width='70'/>";
        }
                
                
        function displayPoints($randomValue1, $randomValue2, $randomValue3) {
            echo "<div id='output'>";
            if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
                switch ($randomValue1) {
                    case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
                    case 1: $totalPoints = 500;
                    break;
                    case 2: $totalPoints = 250;
                    break;
                }
                echo "<h2>You won $totalPoints points! </h2>";
                
            } else {
                echo "<h3> Try again! </h3>";
            }
            echo "</div>";
        }
               
        
        
        ?>
        
        <!--
        5.1 Adding a “spin” button. 
        Instead of having users to reload the window to play again, it would be more user-friendly having a button that they could click on.
        Add the HTML form right  below the PHP tags, within the <body> tags. 
        Save and run the program. 
        You should be able to see a “Spin!” button and when you click on it, it should reload the same page, showing a new set of random symbols.
        -->
      
    </body>
</html>