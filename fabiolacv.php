<!DOCTYPE html>
<html>
<head>
	<style>
	@media(orientation: portrait){
		body{
			background-color: lighblue;
		}
	}	

.div1{
	display: flex;
	gap: 1px;
	font-size:15px;
	font-family: Arial,sans-serif;
	color:blue;
	line-height: 1.6;
}
@media(max-width: 767px){
	.div1{
		flex-direction: colmn;
	}
}
h1,h3,p{
	
	color: #333;
	margin: 10px;
}
body{
    margin:0;
    font-family:Arial;
    background-color:lighblue;
}

.top{
    background:#022827;
    color:white;
    padding:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.left{
    display:flex;
    align-items:center;
}

.left img{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-right:10px;
}

.menu a{
    color:white;
    text-decoration:none;
    margin-left:10px;
    font-size:14px;
}

.main{
    max-width:820px;
    margin:30px auto;
    padding:15px;
}

.box{
    background:white;
    padding:28px;
    border-radius:6px;
}

.name{
    font-size:26px;
    font-weight:bold;
    color:#022827;
}

.role{
    color:#006666;
    margin-bottom:18px;
}

.section{
    margin-top:22px;
}


.section h3{
          color: white;
          font-family: bold;
}

.section p{
    font-size:14px;
    line-height:1.6;
    color: white;
}

.section ul{
    padding-left:18px;
}

.section li{
    font-size:14px;
    margin-bottom:6px;
}

.download{
    margin-top:28px;
    text-align:center;
}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

<body style="background-color: lightblue;padding: 5px;">
	<div class="top">
	
	<div class="div1"><h1>CURRICULUM VITAE</h1></div>
	<div class="section">
	<ol>
		<h3>1.CONTACT INFORMATION</h3>
		<ul>
		<li>NAMES:Tumukunde isimbi fabiola</li>
		<li>Email:tumukunde@gmail.com</li>
		<li>Phone:0788480374</li>
		<li>Address:Musanze,Kalisimbi</li>
	</ul>
	</ol>
	</div>
	<div class="section">
		<h3>2.PROFESSIONAL SUMMARY</h3>
<P>A passionate and dedicated student pursuing a career in information <br>Technology, with basic skills in HTML,CSS,and computer networking.<br>
Quick to learn  new technologies and committed to improving technical and problem-solving skills.<br>Seeking an apportunity to again pratical exprience in a professional environment.</P>
</div>
<div class="section">
<h3>3.Education</h3>
<p>.Buchelor of Science information technology, Ines Ruhengeri(2025-2027)<br>.High school Diploma,Bulinga tvet school(2020-2023</p>
</div>
<div class="section">
<h3>4.Work Exprience</h3>
<p>.IT in ines <br>.IT using xammp or wamp css html php <br>
.From 2024 up to 2026 i had been database designer at ines ruhengeri</p>
</div>
<div class="section">
<h3>5.SKILLS</h3>
<p><ol>
	<li>HTML</li>
	<li>css</li>
	<li>xammp</li>
	<li>php</li>
</ol></p>
</div>
<div class="section">
<h3>6.HOBIES</h3>
<ol>
	<li>Pray</li>
	<li>Community work</li>
</ol>
</div> 
<div class="download">
<button onclick="getcv()">Download My CV</button>
</div>
<div class="end">
&copy;Tumukunde isimbi fabiola	
</div>
</div>
</body>
</html>