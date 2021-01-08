<?php include 'inc/header.php'; ?>

<div class="m-3">
  <h2 class="page-header">Edit Job Listing</h2>
  <form action="edit.php?id=<?php echo $job->id; ?>" method="POST">
    <div class="form-group">
      <label>Company</label>
      <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>" required>
    </div>
    <div class="form-group">
      <label>Category</label>
      <select class="form-control" name="category_id">
        <option value="0">Choose Category</option>
        <?php foreach($categories as $category) : ?>
        <?php if($category->id === $job->category_id) : ?>
        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
        <?php else : ?>
        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endif; ?>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label>Job Title</label>
      <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>" required>
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea type="text-area" class="form-control" name="description"
        required><?php echo $job->description; ?></textarea>
    </div>
    <div class="form-group">
      <label>Location</label>
      <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>" required>
    </div>
    <div class="form-group">
      <label>Salary</label>
      <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>" required>
    </div>
    <div class="form-group">
      <label>Contact User</label>
      <input type="email" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>" required>
    </div>
    <div class="form-group">
      <label>Contact Email</label>
      <input type="email" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>" required>
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
  </form>
</div>

<?php include "inc/footer.php" ?>