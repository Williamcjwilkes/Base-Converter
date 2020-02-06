<?php
require 'validate.php';
?>
<div class="col-sm-7 m-3 p-3 converter">
    <h2>Convert here </h2>
    <form name="converter" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="form-group">
      <label for="number">Enter a number</label>
      <input type="text" class="form-control-lg" name= 'number' id="number" placeholder="Enter a number">
      <span class="error"><?php echo $numberERR ?><span>
    </div>
    <div class="form-group">
      <label for="curBase">what is your current base?</label>
      <select class="form-control-lg" id="curBase" name="curBase">
        <option value = 'default'>Please select option</option>
        <option value = "2">2</option>
        <option value = "8">8</option>
        <option value = "10">10</option>
        <option value = "16">16</option>
        <option value = "32">32</option>
      </select>
      <span class="error"> <?php echo $curERR ?><span>
      </div>
      <div class="form-group">
        <label for="conBase">base you want to go to? </label>
        <select class="form-control-lg" id="conBase" name="conBase" placeholder="Please select option">
        <option value = 'default'>Please select option</option>
        <option value = "2">2</option>
        <option value = "8">8</option>
        <option value = "10">10</option>
        <option value = "16">16</option>
        <option value = "32">32</option>
      </select>
      <span class="error"> <?php echo $conERR ?><span>
      </div>
      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Convert! </button>
    </div>
  </form>
</div>
<div class="row">
    <div class= "col-sm-7 m-3 p-3 converter">
    <table class="table table-responsive-smtable-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Number</th>
      <th scope="col">Current Base</th>
      <th scope="col">Converted Base</th>
      <th scope="col">Answer</th>
    </tr>
    <tr>
    <th scope="col h2">1</th>
      <th scope="col h2"><?php echo $number?></th>
      <th scope="col"><?php echo $curBase?></th>
      <th scope="col"><?php echo $conBase?></th>
      <th scope="col">  <?php baseconverter($number, $curBase, $conBase)?></th>
    </tr>
  </thead>
  <tbody>
  </tbody>
    </table>
        </div>
          <div class="col-sm-4 m-3 p-3 converter">
            <h2> how to convert manually </h2>
          </div>
        </div>
    </div>
</div>