<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Support Our Mission</h1>
    <p>Empower people with disabilities by making a donation today!</p>
  </header>

  <main>
    <section class="donation-section">
      <h2>Donate to a Cause</h2>
      <p>Your contribution helps provide essential resources to those in need.</p>

      <form id="donation-form">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter your name">

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email">

        <label for="amount">Donation Amount</label>
        <input type="number" id="amount" name="amount" min="1" required placeholder="Amount in $">

        <label for="cause">Select Cause</label>
        <select id="cause" name="cause" required>
          <option value="healthcare">Healthcare Support</option>
          <option value="education">Education for All</option>
          <option value="advocacy">Advocacy and Awareness</option>
        </select>

        <button type="submit">Donate Now</button>
      </form>

      <div id="message"></div>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Empowerment for All. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
