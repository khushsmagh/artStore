<?php 
$pageTitle = 'Search';
include('includes/header.inc.php'); 
?>
        <h2>Search</h2>
    <div class="well">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Filter by Title:
            </label>
            <input type="text" class="form-control" >
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Filter by Description:
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                No Filter (show all art works):
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Filter</button>
    </div>

<?php include('includes/footer.inc.php');  ?>