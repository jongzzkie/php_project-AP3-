<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>

    <body>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                background-image: url('personal.jfif');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            h1, h2 {
                text-align: center;
            }
            .cv-section {
                margin-bottom: 30px;
            }
            .cv-section h3 {
                border-bottom: 2px solid #333;
                padding-bottom: 5px;
            }
            .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #333;
            }
            ul {
                list-style-type: none;
                padding: 0;
            }
            ul li {
                padding: 5px 0;
            }
            footer {
                text-align: center;
                font-size: 12px;
                margin-top: 50px;
                position: fixed;
                bottom: 10px;
                width: 100%;
            }
            input[type="RETURN TO MAIN PAGE"] {
             background-color: white;
           color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            }
            input[type="RETURN TO MAIN PAGE"]:hover {
            background-color: red;
            }
        </style>
</head>
<body>
    
    <div class="container">
        <h1>Curriculum Vitae</h1>

        <!-- Personal Information Section -->
        <div class="cv-section">
            <h3>Personal Information</h3>
            <p><strong>Name:</strong> Jolito P. Eliseo</p>
            <p><strong>Email:</strong> jolito.eliseo@ctu.edu.ph</p>
            <p><strong>Phone:</strong> 09685532034</p>
            <p><strong>Address:</strong> Hagdan, Oslob, Cebu</p>
        </div>

        <!-- Education Section -->
        <div class="cv-section">
            <h3>Education</h3>
            <ul>
                <li><strong>Bachelor of Science Information System</strong>, Cebu Technological University (2020-2024)</li>
                <li><strong>Senior High School Diploma</strong>, Rizwoods Colleges (2016-2020)</li>
                <li><strong>Elementary Diploma</strong>, Daanglungsod Elementary School (2010-2016)</li>
            </ul>
        </div>

        <!-- Work Experience Section -->
        <div class="cv-section">
            <h3>Work Experience</h3>
            <ul>
                <li><strong>Web Developer Intern</strong>, Tech Solutions (June 2023 - September 2023)</li>
                <p>Worked on developing and maintaining websites for clients using HTML, CSS, and PHP.</p>
                <li><strong>Freelance Web Developer</strong> (January 2022 - Present)</li>
                <p>Designed and developed websites for small businesses and personal projects.</p>
            </ul>
        </div>

        <!-- Skills Section -->
        <div class="cv-section">
            <h3>Skills</h3>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>PHP, MySQL</li>
                <li>Responsive Web Design</li>
                <li>Version Control (Git)</li>
                <li>Problem Solving & Debugging</li>
            </ul>
        </div>

            <div class="form-links">
                <input type="return to main page" onclick="window.location.href='index.php'" value="Return to Main Page">
            </div>
    </div>
        
    </div>
    <footer>
    <b> Created by: Jolito P. Eliseo </b>- <?php echo date('F j, Y'); ?>
    </footer>
</body>
</html>
