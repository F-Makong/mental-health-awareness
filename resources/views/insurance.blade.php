<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insurance Subscription</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Disability Insurance</h1>
    <p>Subscribe to our insurance program and receive medical support with your insurance card.</p>
  </header>

  <main>
    <section class="insurance-section">
      <h2>Start Your Insurance Journey</h2>
      <form id="insurance-form">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required placeholder="Enter your full name">

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email">

        <label for="plan">Select Insurance Plan</label>
        <select id="plan" name="plan" required>
          <option value="basic">Basic Plan</option>
          <option value="premium">Premium Plan</option>
        </select>

        <button type="submit">Subscribe</button>
      </form>

      <div id="insurance-message"></div>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Empowerment for All. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
