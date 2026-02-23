<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
body{
    margin:0;
    font-family:Arial;
    background:#f2f2f2;
}

.top{
    background:#022827;
    color:white;
    padding:15px 20px;
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
    max-width:1000px;
    margin:30px auto;
    display:flex;
    flex-wrap:wrap;
    gap:20px;
    padding:10px;
}

.box{
    background:white;
    flex:2;
    padding:30px;
    border-radius:10px;
    box-shadow:0 6px 15px rgba(0,0,0,0.1);
}

.sidebar{
    flex:1;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 6px 15px rgba(0,0,0,0.1);
    height:min-content;
}

h1{
    text-align:center;
    color:#022827;
    margin-bottom:25px;
}

.info{
    margin-bottom:20px;
}

.info p{
    font-size:14px;
    margin-bottom:8px;
}

.info a{
    color:#006666;
    text-decoration:none;
}

.form input,
.form textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:6px;
    font-size:14px;
    background-color:brown;
}

.form textarea{
    resize:none;
    height:120px;
}

.form button{
    background:#022827;
    color:white;
    padding:12px 25px;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-size:15px;
    width:100%;
}

.form button:hover{
    background:#pink;
}

.whatsapp{
    position:fixed;
    bottom:25px;
    right:25px;
    background:orange;
    color:white;
    padding:15px 20px;
    border-radius:50px;
    font-weight:bold;
    font-size:14px;
    text-decoration:none;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.sidebar h3{
    color:#022827;
    margin-bottom:12px;
}

.sidebar p{
    font-size:14px;
    margin-bottom:12px;
}

.sidebar a{
    display:inline-block;
    color:#006666;
    text-decoration:none;
    margin-bottom:8px;
}

@media(max-width:900px){
    .main{
        flex-direction:column;
    }
}
.end{
    background:#022827;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:30px;
}
</style>

<body>



<div class="main">

<div class="box">
<h1>Contact Me</h1>

<form class="form" onsubmit="return checkForm()">
<input type="text" id="name" placeholder="Your Name">
<input type="email" id="email" placeholder="Your Email">
<textarea id="message" placeholder="Your Message"></textarea>
<button type="submit">Send Message</button>
</form>

</div>

<div class="sidebar">
<h3>Let's Connect!</h3>
<p>You can reach me through email, phone, or social media. I usually respond quickly.</p>
<p><strong>Email:</strong> tumukundeisimbi@email.com</p>
<p><strong>Phone:</strong> +250 788444456</p>
<p><strong>GitHub:</strong> <a href="https://github.com/yourusername" target="_blank">github.com/yourusername</a></p>
<p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/yourprofile" target="_blank">linkedin.com/in/yourprofile</a></p>
<p> Write a short and clear message I'll respond Ur damn Message faster!</p>
</div>

</div>

<a href="https://wa.me/25078848374" target="_blank" class="whatsapp">Text me on WhatsApp</a>

<div class="end">
© 2026 Tumukunde isimbi fabiola
</div>

<script>
function checkForm(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var msg = document.getElementById("message").value;

    if(name == ""){
        alert("Enter your name!");
        return false;
    }
    if(email == "" || email.indexOf("@") == -1 || email.indexOf(".") == -1){
        alert("Enter a valid email!");
        return false;
    }
    if(msg.length < 10){
        alert("Message iz too short!");
        return false;
    }

    alert("Message sentooo!");
    return false;
}
</script>

</body>
</html>