<!-- patterns/example.php -->
<?php
// Example pattern to display a project card
function render_project_card($title, $description, $image_url) {
  ?>
  <div class="project-card">
    <img src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>">
    <h3><?php echo $title; ?></h3>
    <p><?php echo $description; ?></p>
    <a href="#" class="btn">View Project</a>
  </div>
  <?php
}
?>