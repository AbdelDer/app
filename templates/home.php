<?php include 'inc/header.php'; ?>
<div class="row" style="margin: 10%;">
  <div class="col-6">
    <div class="card" style="width: 18rem; margin-left: 30%;">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">XMS</h5>
        <div class="form-group">
          <form class="form-inline" method="post" action="/app/">
            <input type="text" name="xms" value="matin" hidden>
            <button class="card-link btn btn-light" type="submit" style="width: 100%">Matin</button>
          </form>
        </div>
        <div class="form-group">
          <form class="form-inline" method="post" action="/app/">
            <input type="text" name="xms" value="soir" hidden>
            <button class="card-link btn btn-light" type="submit" style="width: 100%">Soir</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card" style="width: 18rem; margin-left: 30%;">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">MV</h5>
        <div class="form-group">
          <form class="form-inline" method="post" action="/app/">
            <input type="text" name="mv" value="matin" hidden>
            <button class="card-link btn btn-light" type="submit" style="width: 100%">Matin</button>
          </form>
        </div>
        <div class="form-group">
          <form class="form-inline" method="post" action="/app/">
            <input type="text" name="mv" value="soir" hidden>
            <button class="card-link btn btn-light" type="submit" style="width: 100%">Soir</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php include 'inc/footer.php'; ?>