<?php require_once './templates/head.php'; ?>
<body>

  <!-- particles.js container -->
  <div id="particles-js"></div>
  <div class="container">
    <div class="presentation">
    <div class="profile_image"></div>
    <h1>Filip Petersson</h1>
    <h2>&lt;Fullstack Developer&gt;</h2>
    <h3>Student at <a target="_blank" href="http://yrgo.se/"><span>YRGO</span></a></h3>
    </div>
    <div id="aboutme_button" class="aboutme_button button">
      About Me
    </div>
    <div class="skills_button button">
      Skills
    </div>
    <div class="contact_button button">
      Contact Me
    </div>
    <div id="aboutme" class="about_me">
      <h1>About me</h1>
      <p>My name is Filip Petersson and i am a fullstack developer from Gothenburg, Sweden.<br> Currently i am studying web development at <a target="_blank" href="http://yrgo.se/">YRGO</a> in Gothenburg and i also work<br> as a web developer at <a target="_blank" href="http://www.handelsmarketing.se/"><span>HandelsMarketing</span></a></p>

    </div>
    <div id="skills" class="skills">
      <h1>Skills</h1>
      <section class="skill_bars">
        <progress value="85" max="100"></progress><span>HTML5</span>
					<progress value="65" max="100"></progress><span>JavaScript</span>
					<progress value="75" max="100"></progress><span>PHP</span>
          <progress value="85" max="100"></progress><span>MySQL</span>
					<progress value="30" max="100"></progress><span>C#</span>
					<progress value="90" max="100"></progress><span>Sketch</span>
					<progress value="90" max="100"></progress><span>Adobe Photoshop</span>
					</section>
    </div>
    <div id="contact" class="contact_me">
      <h1>Contact me</h1>
      <p>Let's build something together! Or email me if you have any other questions.<br> <a href="mailto:fpetersson96@gmail.com">Fpetersson96@gmail.com</a></p>
    </div>
  </div>
</body>
<?php require_once './templates/footer.php'; ?>
