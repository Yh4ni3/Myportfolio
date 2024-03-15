<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portfolio - Marianne Bernardo</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./bootstrap v5/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
<style>
/* styles.css */

/* Reset default margin and padding */
body, html {
   margin: 0;
   padding: 0;
}

/* Apply box-sizing border-box to all elements */
* {
   box-sizing: border-box;
}

/* Style the header */
header {
   text-align: center;
   background-color: #f0f0f0;
   padding: 20px;
}

header img {
   border-radius: 50%;
   width: 150px;
   height: 150px;
}

header h1 {
   margin: 10px 0;
}

header h2 {
   margin-top: 5px;
}

/* Style the navigation bar */
nav {
   background-color: #333;
   overflow: hidden;
}

nav a {
   float: left;
   display: block;
   color: white;
   text-align: center;
   padding: 14px 20px;
   text-decoration: none;
}

nav a:hover {
   background-color: #ddd;
   color: black;
}

/* Style the about section */
#about {
   padding: 20px;
   background-color: #f9f9f9;
}

/* Style the projects section */
#projects {
   padding: 20px;
}

.project {
   background-color: #fff;
   border: 1px solid #ccc;
   padding: 20px;
   margin-bottom: 20px;
   border-radius: 5px;
}

.project h3 {
   margin-top: 0;
}

.project a {
   display: inline-block;
   margin-top: 10px;
   text-decoration: none;
   color: #007bff;
}

.project a:hover {
   text-decoration: underline;
}

/* Style the contact section */
#contact {
   padding: 20px;
   background-color: #f9f9f9;
}

/* Style the footer */
footer {
   text-align: center;
   background-color: #333;
   color: white;
   padding: 20px 0;
}
</style>
<body>
    <header>
        <img src="yhanie.jpg" alt="Marianne Bernardo Profile Picture">
        <h1>Marianne Bernardo</h1>
        <p style="margin-top: 10px;">"Mistake makes Perfect."</p> 
        <h4>Computer Science Student</h4>
       
       <!-- Navigation Bar -->
       <nav>
           <a href="#about">About Me</a>
           <a href="#projects">Projects</a>
           <a href="#contact">Contact Me</a>
       </nav>
    </header>

    <section id="about">
        <h2>About Me</h2>
        <p>I am a passionate computer science student with a keen interest in web development, software engineering, and problem-solving. Currently pursuing my degree at [Aclc Iriga], I am dedicated to learning and growing in the field of technology.</p>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <div class="project">
            <h3>Web Development Project</h3>
            <p>Description of the project goes here...</p>
            <a href="#">View Project</a> 
        </div>
        <div class="project">
            <h3>Activity</h3>
            <p>Description of the project goes here...</p>
            <a href="#">View Project</a>
            
        </div>
        <!-- Add more projects here -->
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <p>Feel free to reach out to me via email at bernardomarianne385@gmail.com or connect with me on LinkedIn.</p>
    </section>

    <!-- Footer -->
    <footer>&copy; 2024 Marianne Bernardo</footer>

</body>
</html>
