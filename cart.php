<!DOCTYPE html>
<html>
    <head>
        <title>TUNDA|Uganda's leading online store</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body> 
       <div class="container"  > 
       <?php include('includes/menu.php') ?>
       <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1 class="text-center">Wlecome to Tunda</h1>
            <p class="text-center"><kbd>Uganda's leading online store</kbd></p>
       </div>                

       <br /> <br /> <br /> <br />
        <div class="row" id="margintop">
            <div class="col-md-12">
                <table  class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>Item</th>
                            <th>Quatity</th>
                            <th>Price</th>
                            <th>Total</th>     
                        </tr>
                        <tr> 
                            <td><input type="textarea" class="inputs" name="input_1"required></td>
                            <td>
                                <select name="drp_1">
                                <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                                <option>7</option> <option>8</option> <option>9</options> <option>10</option>
                                </select>
                            </td>
                            <td name="total_1">Shs 20,000</td>
                            <td><input type="textarea" class="inputs" name=""></td>
                        </tr>
                    <tr>
                        <td><input type="textarea" class="inputs" name="input_2" ></td>
                        <td> <select name="drp_2">
                                <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                                <option>7</option> <option>8</option> <option>9</option> <option>10</option>
                        </select>
                        </td>
                        <td>Shs 1200 </td>
                        <td><input type="textarea" class="inputs" name="total_2"></td>
                    </tr>
                    <tr>
                        <td><input type="textarea" class="inputs" name="input_3" ></td>
                        <td><select name="drp_3">
                                <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                                <optionn>7</option> <option>8</option> <option>9</option> <option>10</option>
                        </select>
                        </td>
                        <td>Shs 500</td>
                        <td><input type="textarea" class="inputs" name="total_3"></td>
                    </tr>
                    <tr >
                        <td><input type="textarea" class="inputs" name="input_4" ></td>
                        <td> <select name="drp_4">
                                <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                                <option>7</option> <option>8</option> <option>9</option> <option>10</option>
                        </select>
                        </td>
                        <td>Shs 5000</td>
                        <td><input type="textarea" class="inputs" name="total_4"></td>
                        </td>
                    </tr>
                </table>
                <table class="table text-center2">
                    <tr>
                    <td><input type="button" class="button" value="Total" name="plus"></td>
                    
                    
                    <td> <label class="total_label">Total</label><input type="textarea" class="total"> </td>
                    </tr>
                    <tr><td><td><input type="submit" class="button" value="Check out"></td> </td></tr>
                </table>
                <?php 
                    if(isset($_POST['plus'])){
                        $x=$_POST['drp_1'];
                        $y=$_POST['total_1'];
                        $anser=$x*$y;
                        echo "<label> Anser </label>
                        <input type='text' value='.$anser'  class='text3' >  ";
                    }
                ?>


            </div>
        </div>
     </div>    

    </body>
</html>
