<?php include 'inc/header.php';?>
  <h2 class="page-header">Create Job Listing</h2>
  <div>
    <?php foreach ($errorMsg as $error): ?>
      <p class="alert alert-danger"><?php echo $error; ?></p>
    <?php endforeach;?>
  </div>
  <form method="post" action="create.php">
    <div class="form-group">
      <label for="company">Company</label>
      <input type="text" class="form-control" name="company" id="company" value="<?php echo isset($_POST['company']) ? $_POST['company'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="category">Catagory</label>
      <select class="form-control" name="category" id="category">
        <option value="0">Choose Category</option>
        <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category->id; ?>" <?php echo (isset($_POST['category'])&&($_POST['category'] == $category->id))  ? "selected" : ""; ?>>
          <?php echo $category->name; ?>
          </option>
        <?php endforeach;?>
      </select>
    </div>
    <div class="form-group">
      <label for="job_title">Job Title</label>
      <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo isset($_POST['job_title']) ? $_POST['job_title'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description" value="<?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?>"></textarea>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" name="location" id="location" value="<?php echo isset($_POST['location']) ? $_POST['location'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="salary">Salary</label>
      <input type="text" class="form-control" name="salary" id="salary" value="<?php echo isset($_POST['salary']) ? $_POST['salary'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="contact_user">Contact User</label>
      <input type="text" class="form-control" name="contact_user" id="contact_user" value="<?php echo isset($_POST['contact_user']) ? $_POST['contact_user'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="contact_email">Contact Email</label>
      <input type="text" class="form-control" name="contact_email" id="contact_email" value="<?php echo isset($_POST['contact_email']) ? $_POST['contact_email'] : ''; ?>">
    </div>
    <input type="submit" class="btn btn-success" value="Submit" name="submit">
  </form>
<?php include 'inc/footer.php';?>