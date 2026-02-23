<!DOCTYPE html>
<html>
<head>
    <title>Loan Calculator</title>
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
    max-width:500px;
    margin:40px auto;
    background:white;
    padding:25px;
    border-radius:8px;
    box-shadow:0px 2px 8px rgba(0,0,0,0.1);
}

h1{
    text-align:center;
    color:#022827;
    margin-bottom:20px;
}

label{
    font-weight:bold;
    display:pink;
    margin-top:15px;
}

input{
    width:100%;
    padding:10px;
    margin-top:5px;
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    width:100%;
    margin-top:20px;
    padding:12px;
    background:pink;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}
.menu-toggle{
    display:none;
    font-size:26px;
    cursor:pointer;
}

.result{
    margin-top:20px;
    background:#e6f2f2;
    padding:15px;
    border-radius:5px;
    text-align:center;
    font-weight:bold;
    color:#006666;
}

.error{
    color:red;
    margin-top:10px;
    text-align:center;
}

.end{
    background:#022827;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:40px;
}
@media(max-width:800px){
    .main{
        flex-direction:column;
    }
    .nav{
        display:none;
        flex-direction:column;
        background:#022827;
        position:absolute;
        top:60px;
        right:0;
        width:200px;
        padding:10px;
        border-radius:5px;
    }
    .nav a{
        margin:8px 0;
    }
    .menu-toggle{
        display:block;
        color:white;
    }
}
</style>

<body>



<div class="main">

    <h1>Bill payment Calculator</h1>

    <label>Dinner Amount</label>
    <input type="number" id="amount" placeholder="Enter Dinner amount">

    <label>lunch Amount </label>
    <input type="number" id="amount" placeholder="lunch amount">

    <label>break fast amount</label>
    <input type="number" id="amount" placeholder="break fast amount">

    <button onclick="calculateamount()">Calculate Payment</button>

    <div class="error" id="error"></div>
    <div class="result" id="result"></div>

</div>

<div class="end">
    © 2026 Tumukunde isimbi fabiola
</div>

<script>
function calculateLoan(){
    var dinner amount = document.getElementById("dinner amount").value;
    var lunch amount = document.getElementById("lunch amount").value;
    var breakfast amount = document.getElementById("breakfast amount").value;

    var error = document.getElementById("error");
    var result = document.getElementById("result");

    error.innerHTML = "";
    result.innerHTML = "";

    if(dinner amount === "" ||  === lunch amount"" || breakfast amount === ""){
        error.innerHTML = "Please fill in all fields.";
        return;
    }

    if(dinner amount <= 0 || lunch amount <= 0 || breakfast amount <= 0){
        error.innerHTML = "Values must be greater than zero.";
        return;
    }

    var totalAmount = (dinner amount+lunch amount+breakfast amount) ;
    var totalPay = Number(amount)
    

    result.innerHTML = 
        "dinner amount: " + lunch amount+breakfast amount.toFixed(2);
}
const menuBtn = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");

menuBtn.addEventListener("click", function(){
    if(navMenu.style.display === "flex"){
        navMenu.style.display = "none";
    } else {
        navMenu.style.display = "flex";
    }
});

</script>

</body>
</html>