<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="con">
        <div id="head">
            <div style="width:70%;float:left;line-height:50px;font-size:30px;text-align:center;" id="left">English_Dictionary</div>
            <div style="width:30%;float:right;height:100%;line-height:50px;" id="right">
            <input onchange="hide.value=this.value;document.forms[0].submit();" placeholder="Search.." id="search" type="text" style="font-size:15px;width:200px;border-radius:5px;padding:5px 10px;border:0px;">
        </div>
        </div>

        <div id="body">
            <div id="word">
            <p>angkor</p>
            <p>apple</p>
            <p>banana</p>
            <p>cambodia</p>
            <p>code</p>
            <p>dictionary</p>
            <p>elearning</p>
            <p>execute</p>
            <p>fifa</p>
            <p>gender</p>
            </div>
            <div id="de">
                <?php 
                error_reporting(E_ERROR | E_PARSE);
                if(isset($_POST['path']))
                {  
                    try{
                    $path="word/".$_POST['path'].".txt";
                    $myfile = fopen($path, "r");
                    if($myfile)
                    echo fread($myfile,filesize($path));
                    fclose($myfile); 
                    }catch(Exception $e) 
                    {
                        echo "Not found..";
                    }   
                }
                ?>
            </div>
        </div>
        <div id="foot" style="line-height:50px;text-align:center;font-size:30px;color:gray;">Developed by PiSeth Seam</div>
    </div>

    <form action="index.php" method="POST">
        <input id="hide" type="hidden" name="path">
    </form>


    <script>
     for(let i=0;i<document.getElementsByTagName('p').length;i++)
     {
        document.getElementsByTagName('p')[i].onclick=function()
        {
            hide.value=document.getElementsByTagName('p')[i].innerHTML;
            document.forms[0].submit();
        }
     }
    </script>
</body>
</html>