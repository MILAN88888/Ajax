let x=document.getElementById('btn');
x.addEventListener('click',myAjax);
function myAjax()
{
    let ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById('demo_1').innerHTML=this.responseText;
        }
    }
    ajax.open('get','txt/index.txt',true);
    ajax.send();
}

function showCostumer(str)
{
    var showAjax;
    if(str=="")
    {
        document.getElementById('demo_2').innerHTML=" ";
        return;
    }
 showAjax = new XMLHttpRequest();
    showAjax.onreadystatechange=function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById('demo_2').innerHTML=this.responseText;
            return ;
        }

    };
    showAjax.open('GET','getCostumer.php?q='+str,true);
    showAjax.send();
}
function editFuntion()
{

    
}