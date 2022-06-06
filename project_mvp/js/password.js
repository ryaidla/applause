const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    
    
    // toggle the icon
    this.classList.toggle("bi-eye");
});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener('submit', function (e) {
    e.preventDefault();

   
             $.ajax({
                type: "POST",
                url: 'php/login.php',
                data: {
                    email: $("#email").val(),
                    password: $("#password").val()
                },
                success: function(data)
                {
                    if (data === 'success') {
                        window.location.replace('mainRegistered.php');
                    }
                    else {
                        alert("Wrong entering of username or password!");
                    }
                }
     
    });

});

