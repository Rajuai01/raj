let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
}

// Typing Text Code 

const typed = new Typed('.muliple-text', {
    strings: [ 'Bodybuilding', 'Yoga','Healthy', 'Fitness', 'Mental Health', 'Wellness'],
    typeSpeed: 50,
    backdelay: 1000,
    loop: true
  });

  

 

  // Modal functionality
  const loginModal = document.getElementById('login-modal');
  const signupModal = document.getElementById('signup-modal');
  const loginBtn = document.getElementById('login-btn');
  const signupBtn = document.getElementById('signup-btn');
  const closeLogin = document.getElementById('close-login');
  const closeSignup = document.getElementById('close-signup');
  const openSignup = document.getElementById('open-signup');
  const openLogin = document.getElementById('open-login');
  document.getElementById('join-us-btn').addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('login-modal').style.display = 'block';
});

  
  
  loginBtn.onclick = function() {
      loginModal.style.display = 'block';
      document.body.classList.add('modal-open'); // Add class to body
  }
  
  signupBtn.onclick = function() {
      signupModal.style.display = 'block';
      document.body.classList.add('modal-open'); // Add class to body
  }
  
  closeLogin.onclick = function() {
      loginModal.style.display = 'none';
      document.body.classList.remove('modal-open'); // Remove class from body
  }
  
  closeSignup.onclick = function() {
      signupModal.style.display = 'none';
      document.body.classList.remove('modal-open'); // Remove class from body
  }
  
  openSignup.onclick = function() {
      loginModal.style.display = 'none';
      signupModal.style.display = 'block';
  }
  
  openLogin.onclick = function() {
      signupModal.style.display = 'none';
      loginModal.style.display = 'block';
  }
  
  window.onclick = function(event) {
      if (event.target == loginModal) {
          loginModal.style.display = 'none';
          document.body.classList.remove('modal-open'); // Remove class from body
      }
      if (event.target == signupModal) {
          signupModal.style.display = 'none';
          document.body.classList.remove('modal-open'); // Remove class from body
      }
  }

    // Login and Signup functionality
document.getElementById('login-btn').addEventListener('click', async (e) => {
    e.preventDefault();
    const email = document.querySelector('#login-modal input[type="email"]').value;
    const password = document.querySelector('#login-modal input[type="password"]').value;

    const response = await fetch('/api/auth/login', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, password }),
    });

    const data = await response.json();
    if (response.ok) {
        localStorage.setItem('token', data.token);
        window.location.href = 'welcome.html';
    } else {
        alert(data.message);
    }
});

document.getElementById('signup-btn').addEventListener('click', async (e) => {
    e.preventDefault();
    const username = document.querySelector('#signup-modal input[type="text"]').value;
    const email = document.querySelector('#signup-modal input[type="email"]').value;
    const password = document.querySelector('#signup-modal input[type="password"]').value;

    const response = await fetch('/api/auth/signup', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ username, email, password }),
    });

    const data = await response.json();
    if (response.ok) {
        alert('Signup successful! Please login.');
        document.getElementById('signup-modal').style.display = 'none';
        document.getElementById('login-modal').style.display = 'block';
    } else {
        alert(data.message);
    }
});

document.getElementById('logout-btn').addEventListener('click', () => {
    localStorage.removeItem('token');
    window.location.href = 'index.html';
});

document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.getElementById('menu-icon');
    const navbar = document.getElementById('navbar');

    menuIcon.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
});


    

// BMI Calculator functionality
function calculateBMI() {
    var heightInput = document.getElementById("height");
    var weightInput = document.getElementById("weight");
    var resultDiv = document.getElementById("result");

    var height = parseFloat(heightInput.value);
    var weight = parseFloat(weightInput.value);

    if (isNaN(height) || isNaN(weight)) {
        resultDiv.innerHTML = "Please enter valid height and weight.";
        return;
    }

    var bmi = weight / ((height / 100) ** 2);
    var category = "";

    if (bmi < 18.5) {
        category = "Underweight";
    } else if (bmi < 25) {
        category = "Normal weight";
    } else if (bmi < 30) {
        category = "Overweight";
    } else {
        category = "Obesity";
    }

    resultDiv.innerHTML = "Your BMI is " + bmi.toFixed(2) + " (" + category + ")";
}
  


  
function togglePassword(fieldId, toggleId) {
    var field = document.getElementById(fieldId);
    var toggle = document.getElementById(toggleId);
    if (field.type === "password") {
        field.type = "text";
        toggle.classList.remove("fa-eye");
        toggle.classList.add("fa-eye-slash");
    } else {
        field.type = "password";
        toggle.classList.remove("fa-eye-slash");
        toggle.classList.add("fa-eye");
    }
}