<!doctype html>
<html>
    <head></head>
    <body>
        <form>
            <input type="text" id="keyword" onkeyup="callAjax()"><br>
        </form>
        <span id="result"></span>
        <script>

            function callAjax()
            {
                let keyword=document.getElementById("keyword").value.trim();
                let result=document.getElementById("result");

                if(keyword.length>0)
                {
                    
                    let xhr=new XMLHttpRequest();
                    xhr.open("GET","SearchResult.php?keyword="+keyword,true);

                    xhr.onreadystatechange=function()
                    {
                        
                        if(xhr.readyState==4 && xhr.status==200)
                        {
                            
                            result.innerHTML=xhr.responseText;
                        }
                    }
                    xhr.send();

                }

                
            }
            
        </script>
    </body>
</html> 