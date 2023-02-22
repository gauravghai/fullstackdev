<?php
include './inc/header.php';
?>
    <!-- <section class="call-back-form">
        <h1>Request Call Back</h1>
        <form action="https://sunstone.in/" method="">
            <input type="text" class="input-box" placeholder="Your Name">
            <input type="text" class="input-box" placeholder="Your Phone Number">
            <button class="call-button">Request Call Back</button>
        </form>
    </section> -->
    <h1 class="text-center pt-5">Contact Form</h1>
     <div class="container">
        <div class="row">
            <form class="container mt-5 " onsubmit="return false" action="./server/server.php" method="post" id="contactForm">
                
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="text" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailHelp">
                  <div id="email_error" class="text-danger"></div>
                </div>

                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subjectField" name="subjectField">
                    <div id="subject_error" class="text-danger"></div>
                </div> 

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div> -->
                <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary mt-4" id="submitBtn">Submit</button>
              </form>
         </div>
     </div>
     <script>


// document.getElementById('submitBtn').addEventListener("click", function() {

// })


$("#contactForm").submit(function(){
	var form = $(this);
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    document.getElementById('email_error').innerHTML = "";
    document.getElementById('subject_error').innerHTML = "";


    if(document.getElementById('emailAddress').value == '') {
        document.getElementById('email_error').innerHTML = "Please Type Email Address";
    } else if (!document.getElementById('emailAddress').value.match(validRegex)) {
        document.getElementById('email_error').innerHTML = "Please Type Valid Email Address";
    } else if(document.getElementById('subjectField').value == '') {
        document.getElementById('subject_error').innerHTML = "Please Type Subject";
    } else {
        $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        dataType: 'script',
        success: function(data) {
           alert('submited');
            }
	});
    }
});
     </script>
     <?php
include './inc/footer.php';
?>