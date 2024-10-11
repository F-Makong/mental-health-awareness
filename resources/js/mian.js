document.getElementById('search-button').addEventListener('click', function() {
    const query = document.getElementById('search-input').value;
    alert(`Searching for: ${query}`);
    // Perform search action or navigate to results page.
  });

  
  // Handle Insurance Subscription Form
document.getElementById("insurance-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const name = document.getElementById("fullname").value;
    const plan = document.getElementById("plan").value;
    const message = document.getElementById("insurance-message");
  
    message.textContent = `${name}, you have successfully subscribed to the ${plan} plan!`;
    message.style.color = "green";
  });
  

  // Handle Newsletter Form Submission
document.getElementById("newsletter-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const email = document.getElementById("email").value;
    const message = document.getElementById("newsletter-message");
    
    if (email) {
      message.textContent = `Thank you for subscribing with ${email}!`;
      message.style.color = "green";
    } else {
      message.textContent = "Please enter a valid email address.";
      message.style.color = "red";
    }
  });

  // Video Conference Logic
document.getElementById("join-conference-btn").addEventListener("click", function() {
    const status = document.getElementById("conference-status");
    
    // Simulate conference joining process
    status.textContent = "You are now joining the live conference...";
    setTimeout(() => {
      status.textContent = "You have successfully joined the live conference!";
    }, 3000);
  });

  
  // Handle form submission
document.getElementById("donation-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting the normal way
  
    // Get form values
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const amount = document.getElementById("amount").value;
    const cause = document.getElementById("cause").value;
  
    // Basic validation (ensures fields are not empty)
    if (name && email && amount && cause) {
      document.getElementById("message").textContent = `Thank you, ${name}, for your generous donation of $${amount} to ${cause}!`;
      document.getElementById("message").style.color = "green";
    } else {
      document.getElementById("message").textContent = "Please fill out all fields.";
      document.getElementById("message").style.color = "red";
    }
  });
  