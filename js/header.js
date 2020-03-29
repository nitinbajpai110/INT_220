document.getElementById('lnk').addEventListener("click",function(){
    $('#exampleModal').modal('hide')
});
function verify(){
    var a1=document.getElementById('password1').value;
    var a2=document.getElementById('password2').value;
    if(a1!=a2)
    {
        alert("PASSWORD AND CONFIRM PASSWORRD DIDN'T MATCHED");
    }
    
    }