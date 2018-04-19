<?php
$pageTitle = 'Search';
include('includes/header.inc.php'); 

if(isset($_GET["search"])){
    $simpleSearch = $_GET["search"];
}else{
    $simpleSearch = "";
}

?>
        <h2>Search Results</h2>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="well">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radioTitle" value="title" checked>
            <label class="form-check-label">
                Filter by Title:
            </label>
            <input type="text" name="user-input" class="form-control" value="<?php echo $simpleSearch ?>">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radioTitle" value="description">
            <label class="form-check-label">
                Filter by Description:
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radioTitle" value="noFilter">
            <label class="form-check-label">
                No Filter (show all art works):
            </label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Filter</button>
    </div>
    </form>

    <div class="description">
        <?php

        if(isset($_POST['submit'])){

            $userInput = $_POST['user-input'];
            $radio = $_POST['radioTitle'];


            if($radio == "title"){

                $sql = "SELECT ImageFileName, Title, Description 
                FROM paintings WHERE Title LIKE '%$userInput%' 
                ORDER BY Title";

                $query  = new Query($sql);
                $set    = $query->resultSet();
                $count  = $query->resultCount();

                if($count < 1){
                    echo '<h2> "No results found" </h2>';
                }
                else{

                    echo "<h4>There are " .  $count . " results</h4>";

                    foreach($set as $row){
                    
                        echo '<table class="table table-bordered table-striped table-hover">       
                                <tr>';
                        echo  '<th><a href="includes/view-single-subject.php"><img src="images/works/square-medium/'.$row['ImageFileName']. '.jpg' .'"></a> ' . ' ' . '</th>';   
                        echo '<th><h4><a href="includes/view-single-subject.php">' . ' ' . $row['Title']. '</a>' .  '</h4>';
                        echo '<p>'.$row['Description'].'<br>'. '</p>';
                        echo ' 
                            <button class="btn btn-warning"><span class="glyphicon glyphicon-star"></span> Add to favorites</button>
                            <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button></th>';
                        echo ' 
                             </tr>
                            </table>';  
                    }
                }

            }

            if($radio == "description"){

            $sql = "SELECT ImageFileName, Description, Title 
            FROM paintings WHERE Description LIKE '%$userInput%'";

            $query  = new Query($sql);
            $set    = $query->resultSet();
            $count  = $query->resultCount();

            if($count < 1){
                echo '<h2> "No results found" </h2>';
            }
            else{

                echo "<h4>There are " .  $count . " results</h4>";

                foreach($set as $row){
                    
                    echo '<table class="table table-bordered table-striped table-hover">       
                                <tr>';
                    echo  '<th><a href="includes/view-single-subject.php"><img src="images/works/square-medium/'.$row['ImageFileName']. '.jpg' .'"></a> ' . ' ' . '</th>';   
                    echo '<th><h4><a href="includes/view-single-subject.php">' . ' ' . $row['Title']. '</a>' .  '</h4>';
                    echo '<p>'.$row['Description'].'<br>'. '</p>';
                    echo ' 
                        <button class="btn btn-warning"><span class="glyphicon glyphicon-star"></span> Add to favorites</button>
                        <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button></th>';
                    echo ' 
                         </tr>
                        </table>';   
                }
            }

            }

            if($radio == "noFilter"){

            $sql = "SELECT ImageFileName, Title, Description 
            FROM paintings
            WHERE Title LIKE '%$userInput%' OR Description LIKE '%$userInput%'
            ORDER BY Title";

            $query  = new Query($sql);
            $set    = $query->resultSet();
            $count  = $query->resultCount();

            if($count < 1){
                echo '<h2> "No results found" </h2>';
            }
            else{

                echo "<h4>There are " .  $count . " results</h4>";

                foreach($set as $row){

                    echo '<table class="table table-bordered table-striped table-hover">       
                                <tr>';
                    echo  '<th><a href="includes/view-single-subject.php"><img src="images/works/square-medium/'.$row['ImageFileName']. '.jpg' .'"></a> ' . ' ' . '</th>';   
                    echo '<th><h4><a href="includes/view-single-subject.php">' . ' ' . $row['Title']. '</a>' .  '</h4>';
                    echo '<p>'.$row['Description'].'<br>'. '</p>';
                    echo ' 
                        <button class="btn btn-warning"><span class="glyphicon glyphicon-star"></span> Add to favorites</button>
                        <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button></th>';
                    echo ' 
                         </tr>
                        </table>';      
                    }
                }
            }
        }
        ?>
	</div>
<?php include("includes/footer.inc.php"); ?>
