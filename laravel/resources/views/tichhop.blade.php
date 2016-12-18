


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script language="javascript">
        function setURL(url){
            document.getElementById('iframe').src = url;
        }

    </script>

    <table>
        <tr>
            <td width="100px" align="left">
                <form method="post" action="login">
                    {{ csrf_field() }}
                <button name="button"value="login">login</button>
                </form>
                </form> 
                <form>
                    </br>
                    <input type="button" width="10px" class="btn btn-lg btn-primary btn-block" name="clickme1" id="clickme1"
                           onclick="setURL('http://localhost:83/freeschool')" value="freeschool"/>
                </form>
                <form>
                    </br>
                    <input type="button" width="10px" class="btn btn-lg btn-primary btn-block" name="clickme1" id="clickme1"
                           onclick="setURL(' http://localhost:83/edusec1/index.php')" value="hahah"/>
                </form>

                <form method="post" action="logout">
                    {{ csrf_field() }}
                    </br>
                    <button class="btn btn-lg btn-primary btn-block" name="form-logout" value="1">Logout</button>
                </form>
            </td>
            <td width="90%">
                <div id="result">
                </div>
                <iframe id="iframe" width="1000px" height="600px" frameborder="0"/>

            </td>
        </tr>
    </table>

