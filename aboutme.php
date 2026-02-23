<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f2f2f2;
}

.top{
    background:#0000ff;
    color:white;
    padding:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.top1{
    display:flex;
    align-items:center;
}

.top1 img{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-right:10px;
}

.nav a{
    color:white;
    text-decoration:none;
    margin-left:10px;
    font-size:14px;
}
.main{
    max-width:800px;
    margin:30px auto;
    padding:10px;
}

h1{
    text-align:center;
    color:#022827;
    margin-bottom:25px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));
    gap:15px;
}

.card{
    background:lightblue;
    padding:20px;
    border-radius:6px;
    text-align:center;
}

.card h3{
    color:#006666;
    margin-bottom:10px;
}

.card p{
    font-size:14px;
    line-height:1.5;
}

.skills{
    margin-top:40px;
}

.skills h2{
    color:#022827;
    margin-bottom:15px;
    text-align:center;
}

.skills_list{
    list-style:none;
    padding:0;
    max-width:400px;
    margin:0 auto;
}

.skills_list li{
    background:#022827;
    color:white;
    padding:12px 15px;
    border-radius:5px;
    font-size:14px;
    margin-bottom:10px;
    text-align:center;
}

.end{
    background:#022845;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:30px;
}

@media(max-width:800px){
    .cards{
        grid-template-columns:1fr;
    }
}
</style>

<body>

<div class="top">
    <div class="top1">
        <img src="image2.JPEG" alt="Profile Picture">
        <h2>My Portfolio</h2>
    </div>

    <div class="nav">
        <a href="index.php">LANDING</a>
<a href="aboutme.php">ABOUT ME</a>
<a href="tech.php">TECHNICAL SKILLS</a>
<a href="project.php">PROJECT SECTION</a>
<a href="java.php">INTERACTIVE JAVA SCRIPT CALCULATER</a>
<a href="alinee.php">CV SECTION</a>
<a href="contact.php">CONTACT SECTION</a>
    </div>
</div>

<div class="main">

    <h1>About Me</h1>

    <div class="cards">

        <div class="card">
            <h3>Background</h3>
            <p>
                I am a student who enjoys building database design and learning new technologies.
            </p>
        </div>

        <div class="card">
            <h3>Program & Year</h3>
            <p>
                Computer Science<br>
                Year Two
            </p>
        </div>

        <div class="card">
            <h3>Career Goal</h3>
            <p>
                To become a skilled frontend developer and build useful web applications.
            </p>
        </div>

    </div>

    <div class="skills">
        <h2>My Skills</h2>
        <ul class="skills_list">
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Responsive Design</li>
            <li>Git Basics</li>
            <li>Problem Solving</li>
        </ul>
    </div>

</div>

<div class="end">
    © 2026 Tumukunde Isimbi fabiola
</div>

</body>
</html>