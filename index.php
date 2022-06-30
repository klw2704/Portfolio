<?php


if($_POST["message"]) {


mail("wilkinson.kirsty@yahoo.co.uk", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="chrome"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>KW Personal Portfolio</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <ul class="link-group">
        <li class="link active">
          <a href="#">home</a>
        </li>
        <li class="link">
          <a href="#">projects</a>
        </li>
        <li class="link">
          <a href="#">about</a>
        </li>
        <li class="link">
          <a href="#">contact</a>
        </li>
        <li class="link">
          <a href="#">certificates</a>
        </li>
      </ul>
    </nav>

    <!-- home section -->
    <section class="home-section active">
      <h1 class="hero-heading">Kirsty Wilkinson</h1>
      <img src="img/home1.jpg" class="home-img" alt="" />
    </section>

    <!-- project section -->
    <section class="project-section">
      <h1 class="project-heading">some of my projects</h1>
      <div class="project-container">
        <div class="project-card">
          <img src="img/project-1.png" class="project-img" alt="" />
          <div class="project-content">
            <h1 class="project-title">project 01</h1>
            <p class="project-info">
              End of course project for the Code First: Girls HTML course i
              completed.
            </p>
            <div class="project-btn-grp">
              <button class="project-btn github">
                <a
                  class="btn-a-link"
                  href="https://www.github.com/klw2704/foodies"
                  target="“_blank”"
                  >github repo</a
                >
              </button>
              <button class="project-btn live">
                <a class="btn-a-link" href="#" target="_blank">see live</a>
              </button>
            </div>
          </div>
        </div>
        <div class="project-card">
          <img src="img/project-2.png" class="project-img" alt="" />
          <div class="project-content">
            <h1 class="project-title">project 02</h1>
            <p class="project-info">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            <div class="project-btn-grp">
              <button class="project-btn github">
                <a class="btn-a-link" href="#" target="“_blank”">github repo</a>
              </button>
              <button class="project-btn live">
                <a class="btn-a-link" href="#" target="_blank">see live</a>
              </button>
            </div>
          </div>
        </div>
        <div class="project-card">
          <img src="img/project-3.png" class="project-img" alt="" />
          <div class="project-content">
            <h1 class="project-title">project 03</h1>
            <p class="project-info">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </p>
            <div class="project-btn-grp">
              <button class="project-btn github">
                <a class="btn-a-link" href="#" target="“_blank”">github repo</a>
              </button>
              <button class="project-btn live">
                <a class="btn-a-link" href="#" target="_blank">see live</a>
              </button>
            </div>
          </div>
        </div>
        <div class="project-card">
          <img src="img/project-4.png" class="project-img" alt="" />
          <div class="project-content">
            <h1 class="project-title">project 04</h1>
            <p class="project-info">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </p>
            <div class="project-btn-grp">
              <button class="project-btn github">
                <a class="btn-a-link" href="#" target="“_blank”">github repo</a>
              </button>
              <button class="project-btn live">
                <a class="btn-a-link" href="#" target="_blank">see live</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about section -->
    <section class="about-section">
      <div class="about">
        <div class="about-img-container">
          <img src="img/home1.jpg" class="about-img" alt="" />
          <a class="download-cv-btn" href="cv.pdf" target="“_blank”"
            >download CV</a
          >
        </div>
        <p class="about-info">
          <b>About Me</b>
          <br />
          Highly motivated aspiring software developer with an avid interest in
          software development, mechanical engineering, and the aviation
          industry, constantly looking for opportunities to improve my skills
          and education. An energetic and creative self-starter, able to juggle
          multiple tasks and navigate highstress situations, whilst offering
          expertise in customer service, organization, and communication.
          <br /><br />
          Graduate of Durham University with a BSc in Physical Geography, and
          now a part-time BSc(Hons) Combined STEM student at the Open
          University, focussing on software and mechanical engineering.
          Additionally taking online courses in JavaScript, Python, C#, Angular,
          HTML, CSS, Bootstrap, jQuery, Node.js, Express.js, React.js, MongoDB
          and APIs in my spare time. <br /><br />I am a fan of modern foreign
          languages, solo travelling...
        </p>
      </div>

      <!-- skills -->
      <div class="skill-section">
        <h1 class="heading">skills</h1>
        <div class="skills-container">
          <div class="skill-card">
            <img src="img/html.png" class="skill-img" alt="" />
            <div class="skill-level">80%</div>
            <h1 class="skill-name">HTML</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
          </div>
          <div class="skill-card">
            <img src="img/css.png" class="skill-img" alt="" />
            <div class="skill-level">80%</div>
            <h1 class="skill-name">CSS</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="#" target="“_blank”">view certificate</a> -->
          </div>
          <div class="skill-card">
            <img src="img/js.png" class="skill-img" alt="" />
            <div class="skill-level">20%</div>
            <h1 class="skill-name">JavaScript</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="#" target="“_blank”">view certificate</a> -->
          </div>
          <div class="skill-card">
            <img src="img/nodejs.png" class="skill-img" alt="" />
            <div class="skill-level">0%</div>
            <h1 class="skill-name">Node.js</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="#" target="“_blank” "> view certificate</a> -->
          </div>
          <div class="skill-card">
            <img src="img/csharp.png" class="skill-img" alt="" />
            <div class="skill-level">10%</div>
            <h1 class="skill-name">C#</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="#" target="“_blank”">view certificate</a> -->
          </div>
          <div class="skill-card">
            <img src="img/.png" class="skill-img" alt="" />
            <div class="skill-level">10%</div>
            <h1 class="skill-name">Angular</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="#" target="“_blank”">view certificate</a> -->
          </div>
          <div class="skill-card">
            <img src="img/.png" class="skill-img" alt="" />
            <div class="skill-level">50%</div>
            <h1 class="skill-name">Python</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="#" target="“_blank”">view certificate</a> -->
          </div>
          <div class="skill-card">
            <img src="img/.png" class="skill-img" alt="" />
            <div class="skill-level">80%</div>
            <h1 class="skill-name">SQL</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="./sql_certificate.pdf" target="“_blank” "> view certificate</a> -->
          </div>
          <div class="skill-card">
            <img src="img/.png" class="skill-img" alt="" />
            <div class="skill-level">80%</div>
            <h1 class="skill-name">PHP</h1>
            <p class="skill-info">Lorem ipsum dolor.</p>
            <!-- <a class="download-certificate-btn" href="./php_certificate.pdf" target="“_blank” "> view certificate</a> -->
          </div>
        </div>
      </div>

      <!-- timeline -->
      <div class="timeline">
        <h1 class="heading">education and experience</h1>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">2014 - 2020</h1>
            <p class="card-detail">
              <b> Durham Univeristy </b>
              <br />
              <i> BSc Physical Geography </i>
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">2021 - Present</h1>
            <p class="card-detail">
              <b> Powerstar </b>
              <br />
              <i> - Junior SCADA Software Engineer </i>
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">2021 - Present</h1>
            <p class="card-detail">
              <b> Alcium Software </b>
              <br />
              <i>
                - Data Support Analyst <br />
                - Software Tester <br />
                - Project Management
              </i>
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">2021 - 2026</h1>
            <p class="card-detail">
              <b> Open University </b>
              <br />
              <i> BSc Honors Combined STEM</i>
              <br />
              - Mechanical Engineering <br />
              - Software Engineering
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">YYYY - YYYY</h1>
            <p class="card-detail">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
              atque debitis voluptatem veritatis, minima deleniti nihil?
              Voluptas facere inventore soluta quasi delectus!
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">YYYY - YYYY</h1>
            <p class="card-detail">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
              atque debitis voluptatem veritatis, minima deleniti nihil?
              Voluptas facere inventore soluta quasi delectus!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section -->



    <section class="contact-section">
      <form
        class="contact-form"
        action="contact.php"
        method="post"
        enctype="text/plain"
      >
        <input
          type="text"
          name="name"
          id="name"
          autocomplete="off"
          placeholder="Name"
        />
        <!-- <input type="tel" name="number" id="number" autocomplete="off" placeholder="number"> -->
        <input
          type="email"
          name="email"
          id="email"
          autocomplete="off"
          placeholder="Email"
        />
        <textarea
          name="msg"
          id="msg"
          placeholder="Message"
          autocomplete="off"
        ></textarea>
        <button type="submit" class="form-submit-btn">Send</button>
      </form>
      <!-- map -->
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11473.59174913783!2d-1.4799538411062092!3d53.37914832091759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879828191db4af5%3A0x29c9d8772a649f10!2sSheffield%20City%20Centre%2C%20Sheffield!5e0!3m2!1sen!2suk!4v1641481797872!5m2!1sen!2suk"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </section>

    <!-- certificate section -->

    <section class="certificates-section">
      <div class="certificate-table">
        <table>
          <thead>
            <tr colspan="3">
              <th width="80%">Course</th>
              <th width="10%">Provider</th>
              <th width="10%">Certificate</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td1">Beginners HTML/CSS Web Development Course</td>
              <td>CodeFirst: Girls</td>
              <td>
                <a
                  class="download-certificate-btn"
                  href="./html_cert.pdf"
                  target="“_blank” "
                  >view certificate</a
                >
              </td>
            </tr>
            <tr>
              <td>Intro to SQL</td>
              <td>Codecademy</td>
              <td>
                <a
                  class="download-certificate-btn"
                  href="./sql_certificate.pdf"
                  target="“_blank” "
                  >view certificate</a
                >
              </td>
            </tr>
            <tr>
              <td>The Complete JavaScript Course 2022: From Zero to Expert</td>
              <td>Udemy</td>
              <td>
                <a
                  class="download-certificate-btn"
                  href="./#.pdf"
                  target="“_blank” "
                  >view certificate</a
                >
              </td>
            </tr>
            <tr>
              <td>
                100 Days of Code: The Complete Python Pro Bootcamp for 2022
              </td>
              <td>Udemy</td>
              <td>
                <a
                  class="download-certificate-btn"
                  href="./#.pdf"
                  target="“_blank” "
                  >view certificate</a
                >
              </td>
            </tr>
            <tr>
              <td>The Complete 2022 Web Development Bootcamp</td>
              <td>Udemy</td>
              <td>
                <a
                  class="download-certificate-btn"
                  href="./#.pdf"
                  target="“_blank” "
                  >view certificate</a
                >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <script src="app.js"></script>
  </body>
</html>
