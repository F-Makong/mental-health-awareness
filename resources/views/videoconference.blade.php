<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Conference</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Video Conference for People with Disabilities</h1>
    <p>Join live discussions or watch informative videos on healthcare and advocacy.</p>
  </header>

  <main>
    <section class="video-section">
      <h2>Watch Video</h2>
      <video controls width="600">
        <source src="sample-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </section>

    <section class="live-conference">
      <h2>Join Live Conference</h2>
      <button id="join-conference-btn">Join Live Conference</button>
      <p id="conference-status"></p>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Empowerment for All. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
