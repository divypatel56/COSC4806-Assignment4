<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12"> 
        <h1>Reminders</h1>
        <p><a href="/reminders/create">Create a new Reminder</a></p>
      </div>
    </div>
  </div>

  <?php foreach ($data['reminders'] as $reminder): ?>
    <p>
      <?php echo htmlspecialchars($reminder['subject']); ?> 
      <a href="/reminders/update/<?php echo $reminder['id']; ?>">Update</a> 
      <a href="/reminders/delete/<?php echo $reminder['id']; ?>">Delete</a>
    </p>
  <?php endforeach; ?>

</div>

<?php require_once 'app/views/templates/footer.php' ?>
