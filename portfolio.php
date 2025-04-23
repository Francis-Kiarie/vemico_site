<?php
$page = 'portfolio';
$pageTitle = 'Portfolio - Vemico Tech';
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="bg-light text-center py-5 mb-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Our Portfolio</h1>
    <p class="lead">Discover our latest projects spanning web, software, design, and more.</p>
  </div>
</section>

<!-- Portfolio Grid -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php
      $conn = new mysqli('localhost', 'root', '', 'your_db');
      $result = $conn->query("SELECT * FROM portfolio_projects ORDER BY created_at DESC");

      while ($row = $result->fetch_assoc()) {
      ?>
        <div class="col">
          <div class="card h-100 shadow-sm border-0">
            <img src="<?= $row['image_path']; ?>" class="card-img-top" alt="<?= htmlspecialchars($row['title']); ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?= htmlspecialchars($row['title']); ?></h5>
              <p class="card-text"><?= htmlspecialchars($row['description']); ?></p>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $row['id']; ?>">
                View Details
              </button>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal<?= $row['id']; ?>" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><?= htmlspecialchars($row['title']); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p><?= nl2br(htmlspecialchars($row['details'])); ?></p>
              </div>
              <div class="modal-footer">
                <?php if (!empty($row['link'])): ?>
                  <a href="<?= htmlspecialchars($row['link']); ?>" target="_blank" class="btn btn-outline-primary">
                    Visit Project
                  </a>
                <?php endif; ?>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>
