<h1>Register</h1>
  <?php $form = app\core\form\Form::begin('',"post") ?>
  <?php echo $form->field($model, 'name') ?>
  <?php echo $form->field($model, 'email') ?>
  <?php echo $form->field($model, 'password')->passwordField() ?>
  <?php echo $form->field($model, 'passwordconfirmation')->passwordField() ?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php app\core\form\Form::end() ?>
<!-- 
<form action="" method="post"> 
  <div class="form-group">
    <label>Name</label>
    <input type="name" name="name" class="form-control<?php #echo $model->hasError('name') ? ' is-invalid' : '' ?>">
    <div class="invalid-feedback">
      <?php #echo $model->getFirstError('name') ?>
    </div>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="passwordconfirmation" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->