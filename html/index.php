<!DOCTYPE html>
    <head>
            <title>
            jovi url shortner
            </title>

            <link rel="stylesheet" href="../css/bootstrap.min.css">

            <script type="javascript" src="../js/bootstrap.min.js"></script>
            <script type="javascript" src="../js/jquery-3.4.0.min.js"></script>
            <script type="text/javascript">  
                function go(url) {
                        alert(url);
                }
            </script>
    </head>
<body>
<br><br><br><br>
    <div class="container">
    
        <div class="jumbotron" style="background-color:skyblue; color:white;">
            <div class="row">
                <div class="col-sm-6">
                    <h1> Simple Url Shortner</h1>
                                <form action=" " class="form-horizontal" method="post"> 
                                <p><input type="text" id="url" class="form-control" style="width:70%" name="url" size="60" onkeydown="if (event.keyCode == 13 || event.which == 13){ go{'enter pressed'}; }" /><br>  <input type="submit" class="btn btn-success" value="submit" onclick=" go{'button clicked'};"/> </p>
                                </form> 
                </div>
                <div class="col-sm-">
                    
                             
                            <div id="message"><div class="well" style="color:white;font-family:cursive;"><p><?php include('url.php')?></p></div></div>
                       
                </div>
                <div class="col-sm-3"></div>
            <div>
         </div>
    </div>
</body>

<html>