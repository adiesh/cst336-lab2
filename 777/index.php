<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        <?php
        include 'inc/functions.php';
        ?>
       
        <!-- 2.1  Let’s start by displaying one of the symbols in the index.php file.
        Open the index.php file and within the <body> tags, type the corresponding HTML tag to display the cherries symbol. 
        Save and run the file. You should see the cherries image -->
        
        <!-- <img src="img/cherry.png" alt="cherry" title="cherry" width="70"/> -->
        
        
        <!-- The “alt” attribute of the <img> tag is used for accessibility purposes. 
        Screen readers will read out loud the content of this attribute. 
        The “title” attribute specifies extra information about an element and it’s displayed as a tooltip when hovering over the element. -->
        
        <!-- 2.2. Replace the <img> tag that you added in the previous step with the following code. 
        Save and run the file. 
        You’ll notice that every time you refresh the page, it will display a random symbol. -->
        
        
        <!-- // php starts with these tags
        
        /*
        // 2.2
        $randomValue = rand(0,2); // variables start with '$' 
        if ($randomValue == 0) { 
            echo '<img src="img/seven.png" alt="seven" title="seven" width="70"/>';
        } else if ($randomValue == 1) {
            echo '<img src="img/cherry.png" alt="cherry" title="cherry" width="70"/>';
        } else {
            echo '<img src="img/lemon.png" alt="lemon" title="lemon" width="70"/>';
        }
        */
        
        /* 2.3 Abstract the display of the symbol by creating a "displaySymbol() function that receives a random value as a parameter, and then call the function three times. 
        Replace the code you added in the previous step with the following code. Observe that the block of conditions that we added in the previous step, is now included within the "displaySymbol()" function.
        Save and run the file. You should be able to see three random symbols every time you refresh the page now! 
        
         // 2.3
        $randomValue1 = rand(0,2); 
        displaySymbol($randomValue1);
        $randomValue2 = rand(0,2); 
        displaySymbol($randomValue2);
        $randomValue3 = rand(0,2);
        displaySymbol($randomValue3);
        
        function displaySymbol($randomValue) {
            if ($randomValue == 0) { 
                echo '<img src="img/seven.png" alt="seven" title="seven" width="70"/>';
            } else if ($randomValue == 1) {
                echo '<img src="img/cherry.png" alt="cherry" title="cherry" width="70"/>';
            } else {
                echo '<img src="img/lemon.png" alt="lemon" title="lemon" width="70"/>';
            }
        }
        
        */
        
        /* 2.4. Use a for loop to reduce the number of lines needed to call the displaySymbol() function.
        Replace the first six lines of code from the previous step with the code below. 
        Pay attention to the syntax! Save and run the file. 
        You should be able to still see three random symbols every time you refresh the page.
        
        

        for ($i=1;$i<4;$i++) {
            ${"randomValue". $i} = rand(0,2);
            displaySymbol(${"randomValue". $i} );
        }
        
        function displaySymbol($randomValue) {
            if ($randomValue == 0) { 
                echo '<img src="img/seven.png" alt="seven" title="seven" width="70"/>';
            } else if ($randomValue == 1) {
                echo '<img src="img/cherry.png" alt="cherry" title="cherry" width="70"/>';
            } else {
                echo '<img src="img/lemon.png" alt="lemon" title="lemon" width="70"/>';
            }
        }
        */
        /*
        
        Notes:  
        The “for loop” in PHP is very similar to other programming languages, however the “i” must be preceded with a dollar sign given that it’s a variable.
        In PHP, the dot operator (.) is used to concatenate strings and variable values. Other programming languages use the plus sign (+) to concatenate strings.
        The ${} syntax in the first line of the for loop above, allows for the creation of a variable with a computed name. 
        So, in the first iteration of the for loop above, we’ll be creating a variable called “randomValue1”, in the second iteration, a new variable called “randomValue2” will be created, and so on.
        */
        
        
        /*2.5 Using a “switch()” statement in the displaySymbol() function. Currently, our displaySymbol() function uses a nested if-else conditional statement. Let’s replace the if-else block with a switch() statement to increase readability. 
        Comment out the if-else block using  /*  and  */
        /*
        And then add the switch statement. 
        Don’t forget to add the “break;” line after each case Save and run the program. 
        Everything should be working as before and you should be able to see three random symbols.
        
        
        for ($i=1;$i<4;$i++) {
            ${"randomValue". $i} = rand(0,2);
            displaySymbol(${"randomValue". $i} );
        }
        
        function displaySymbol($randomValue) {
            switch ($randomValue) {
                case 0: echo '<img src="img/seven.png" alt="seven" title="seven" width="70"/>';
                break;
                case 1: echo '<img src="img/cherry.png" alt="cherry" title="cherry" width="70"/>';
                break;
                case 2: echo '<img src="img/lemon.png" alt="lemon" title="lemon" width="70"/>';
                break;
            }
        }
        */
        
        /*
        
        
        2.6. Using a variable to display the corresponding symbol.
       Replace the code within the switch() statement with the code below. 
       Observe that we are using a variable called $symbol to store the file name of the symbol to be displayed, based on the random value. 
       After closing the switch() statement, we are using the variable to display the symbol and the value for the “alt” and the “title” attributes. 
       Save and run the file.
       
       */
       
       /*
        for ($i=1;$i<4;$i++) {
            ${"randomValue". $i} = rand(0,2);
            displaySymbol(${"randomValue". $i} );
        }
        
        function displaySymbol($randomValue) {
            switch ($randomValue) {
               case 0: $symbol = "seven";
               break;
               case 1: $symbol = "cherry";
               break;
               case 2: $symbol = "lemon";
               break;
             
            }
            echo "<img src='img/$symbol.png' alt='$symbol' title='$symbol' width='70'/>";
        }
        
        */
        
        /* 2.7 Capitalizing the value of the “title” attribute.
        Hopefully you were able to realize that the difference between the code in step 2.5 and step 2.6 is that the value of the tooltip is capitalized in the former but not in the latter.  
        We’ll use a PHP String function to capitalize the tooltip.
        Replace the last line of code in step 2.6 with the line below. 
        Save and run the program. 
        Hover  over one of the symbols and wait for a few seconds for the tooltip to appear.
        Confirm that the tooltip value is capitalized now.
        
        
        for ($i=1;$i<4;$i++) {
            ${"randomValue". $i} = rand(0,2);
            displaySymbol(${"randomValue". $i} );
        }
        
        function displaySymbol($randomValue) {
            switch ($randomValue) {
               case 0: $symbol = "seven";
               break;
               case 1: $symbol = "cherry";
               break;
               case 2: $symbol = "lemon";
               break;
             
            }
            echo "<img src='img/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "'width='70'/>";
        }
        
        */
        // The ucfirst()  PHP String function uppercases the first letter of a string.

        /*
        
        3.1. Creating the displayPoints() function.
        Type the code below (it includes the line numbers just as a reference)
        
    
        
        for ($i=1;$i<4;$i++) {
            ${"randomValue". $i} = rand(0,2);
            displaySymbol(${"randomValue". $i} );
        }
        
        function displaySymbol($randomValue) {
            switch ($randomValue) {
               case 0: $symbol = "seven";
               break;
               case 1: $symbol = "cherry";
               break;
               case 2: $symbol = "lemon";
               break;
             
            }
            echo "<img src='img/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "'width='70'/>";
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
        
        */
        
        /*
        
        3.2 Call the displayPoints() function. 
        Add the displayPoints() function call right after the for loop that display the three symbols. 
        Be sure to pass the corresponding arguments.
        Save and run the program. 
        You should be able to see a message based on the three random symbols.
        
        */
        
        -->
    
        
        <?php
        
       
         
         // 4.4 Create a new function for the remaining code in the index.php file. 
         // Surround the PHP code that you still have within the <body> tags with a new function called “play()” and move it to the “functions.php” file. 
         // It doesn’t matter where you paste it, provided that it’s  not within another function.
        
        // 5.4 Given that the symbols are displayed from within a for loop and using the “displaySymbol()” function, let’s pass as an argument the value of “$i”, which will be 1, 2, and 3. This value will be the suffix of the id: “reel1”, “reel2”, and “reel3”. 

         
        function play() {
            for ($i=1; $i<4; $i++){
                 ${"randomValue". $i } = rand(0,2);
                 displaySymbol(${"randomValue" . $i}, $i );
                 
             }
             displayPoints($randomValue1, $randomValue2, $randomValue3);
         }

        
        /*
         
        for ($i=1;$i<4;$i++) {
            ${"randomValue". $i} = rand(0,2);
            displaySymbol(${"randomValue". $i} );
        }
        displayPoints($randomValue1, $randomValue2, $randomValue3);
        
        function displaySymbol($randomValue) {
            switch ($randomValue) {
               case 0: $symbol = "seven";
               break;
               case 1: $symbol = "cherry";
               break;
               case 2: $symbol = "lemon";
               break;
             
            }
            echo "<img src='img/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "'width='70'/>";
        }
        
        
        function displayPoints($randomValue1, $randomValue2, $randomValue3) {
            echo "<div id='output'>";
            if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
                switch ($randomValue1) {
                    case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!</h1>";
                        break;
                    case 1: $totalPoints = 750;
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
        
       */
        
        ?>
        
    
        
        
        

        
        
        
    </body>
</html>