<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="bootstrap-3.2.0-dist/css/Common.css" type="text/css" rel="stylesheet">
    <title>WIP - Assignment 1</title>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin" rel="stylesheet">
    <link href="iwppa1.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <form>
        <fieldset>
            <legend>Advanced Art Work Search</legend>
            <div class="advancedBorder">
                <div class="form-check form-check-inline">
                    <input class = "absearchbar" type="text" class="form-control" placeholder="Search titles">
                    <label class="form-check-label" for="inlineRadio1">Subject:</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">History</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Person</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Landscape</label>
                    <select class="absearchselect" id="inlineFormCustomSelect">
                        <option selected>Select Genre</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <button class="absearchbutton" type="submit" name="Filter" value="Filter">Filter</button>
                </div>
            </div>
            <div class="advancedBorder">
                <div class="form-check form-check-inline">
                    <select class="absearchselect2" id="inlineFormCustomSelect">
                        <option selected>Select Genre</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <button class="absearchbutton" type="submit" name="Apply To All" value="Apply To All">Apply To All</button>
                </div>
            </div>
            <div class="advancedBorder2">
                <div class="adtabletitle">
                    <label class="adtabletitlep">Paintings</label>
                </div>
                <table class="table">
                    <thead>
                    <tr style="background-color: lightgray">
                        <th class="adtableth" scope="col">Title</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <img class="adtableimg" src="images/tiny/13030.jpg">
                            <em>Bla bla bla</em>
                        </td>
                        <td class="adtabletd">MarkBla bla</td>
                        <td>555</td>
                        <td>dsvsd</td>
                        <td>
                            <button type="button"><span class="glyphicon glyphicon-download-alt"></span></button>
                            <button type="button"><span class="glyphicon glyphicon-pencil"></span></button>
                            <button type="button"><span class="glyphicon glyphicon-trash"></span></button>
                            <button type="button"><span class="glyphicon glyphicon-picture"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="adtabletd">

                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <img class="adtableimg" src="images/tiny/13030.jpg">
                            <em>Bla bla bla</em>

                        </td>
                        <td class="adtabletd">MarkBla bla</td>
                        <td>555</td>
                        <td>dsvsd</td>
                        <td>
                            <button type="button"><span class="glyphicon glyphicon-download-alt"></span></button>
                            <button type="button"><span class="glyphicon glyphicon-pencil"></span></button>
                            <button type="button"><span class="glyphicon glyphicon-trash"></span></button>
                            <button type="button"><span class="glyphicon glyphicon-picture"></span></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </form>
</div>



<script src="bootstrap-3.2.0-dist/js/jQuery.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>