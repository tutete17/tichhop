

@extends("main")

@section('title')
    Welcome
@endsection

@section('content')


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script language="javascript">
        function setURL(url){
            document.getElementById('iframe').src = url;
        }

    </script>

    <table>
        <tr>
            <td width="100px" align="left">
                </form>
                <form method="post" action="gco_smile/index.php" id="form-gco_smile">
                     
                    </br>
                    <input type="button" width="10px" class="btn btn-lg btn-primary btn-block" name="clickme1" id="clickme1"
                                                     onclick="setURL('http://localhost:83/formalms/appLms/index.php')" value="forma"/>
                </form>
                <form>
                    </br>
                    <input type="button" width="10px" class="btn btn-lg btn-primary btn-block" name="clickme1" id="clickme1"
                                                     onclick="setURL('http://localhost:83/Chikitsa0.3.7/appointment/index')" value="freeschool"/>
                </form>
                <form>
                    </br>
                    <input type="button" class="btn btn-lg btn-primary btn-block" name="clickme2" id="clickme2"
                                                     onclick="setURL('http://localhost/gco_smile/index.php')" value="open school"/>
                </form>
                <form method="post" action="logout">
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
@endsection
