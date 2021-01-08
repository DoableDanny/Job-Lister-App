<?php include 'inc/header.php'; ?>

<div class="m-3">
  <h2 class="page-header">Create Job Listing</h2>
  <form action="create.php" method="POST">
    <div class="form-group">
      <label>Company</label>
      <input type="text" class="form-control" name="company" required>
    </div>
    <div class="form-group">
      <label>Category</label>
      <select class="form-control" name="category_id">
        <option value="0">Choose Category</option>
        <?php foreach($categories as $category) : ?>
        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label>Job Title</label>
      <input type="text" class="form-control" name="job_title" required>
    </div>
    <div class="form-group">
      <label>Description</label>
      <input type="text-area" class="form-control" name="description" required>
    </div>
    <div class="form-group">
      <label>Location</label>
      <input type="text" class="form-control" name="location" required>
    </div>
    <div class="form-group">
      <label>Salary</label>
      <input type="text" class="form-control" name="salary" required>
    </div>
    <div class="form-group">
      <label>Contact User</label>
      <input type="text" class="form-control" name="contact_user" required>
    </div>
    <div class="form-group">
      <label>Contact Email</label>
      <input type="email" class="form-control" name="contact_email" required>
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
  </form>
</div>

<?php include "inc/footer.php" ?>