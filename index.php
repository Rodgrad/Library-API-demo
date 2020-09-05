<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel='stylesheet' href='css/bootstrap.css'/>
<link rel='stylesheet' href='css/custom.css'/>

<div class="jumbotron">
  <h1 class="display-4">Library demo API</h1>
  <p class="lead">Hello, welcome on free API for service book info lookout.</p>
  <hr class="my-4">
  <p>Get code snipets, API key and try it out down bellow.</p>

</div>

<hr>

<body class="container">

    <div id="wrapper">
    <p class="lead">Download Code and try it on your site or localhost</p>
        <i class="alert alert-primary" >Paste these snipets into your appropriate file.</i>
        <br>
        <br>
        <p>Supported languages:</p>
        <ul>
        <li><a class="badge badge-warning" href="https://github.com/Rodgrad/API/blob/master/api/userUI/settings.py">Python</a></li>
        <li><a class="badge badge-success" href="https://github.com/Rodgrad/API/blob/master/api/userUI/settings.js">JQuery</a></li>
        <li><a class="badge badge-info" href="https://github.com/Rodgrad/API/blob/master/api/userUI/settings.php">PHP</a></li>
        </ul>


        <br>
        <hr>
        <br>

        <section class="section">
            <p class="lead">Ask for new api key:</p>
            <i class="alert alert-primary">This is demo API and service so your key will be limited to ten calls.</i>
            <br>
            <br>
            <form action="" id="api-form" method="POST">
                <small><i class="alert alert-light">We will not send API key to your email, you can use  dummy email</i>.</small>
                <br>
                <br>
                <input type="text" class="form-control" name='email' id='email' placeholder="Enter email"/>
                <br>
                <button type='submit' class="btn btn-primary" name='api-sumbit'>Request</button>
            </form>
            <br>
            <span><div class='alert-success'  id='api-holder'></div></span>
        </section>

        <br>
        <hr>
        <br>

        <section class="section">
            <p class="lead" >Try it out</p>
            <p class="alert alert-primary"> Search book by title or author </p>
            <form action="" method="GET" id='search-form'>

                <i>API key: </i>
                <input type="text" id='api'  class="form-control" placeholder="Enter API key"/>
                <i> Search: </i>
                <input type="text" id='search' class="form-control form-control-lg" placeholder='Search your book'>
                <br>
                <button name='search-submit' class="btn btn-primary" type='submit'>Find</button>
            </form>
        </section>
            <br>
        <i class="alert alert-success">Results:</i>
        <br>
        <br>
        <div class="overflow-auto" id='data'></div>
        <br>
        <br>



        <br>
        <hr>



        <script src='js/bootstrap.js'></script>
        <script src='http://localhost/api/config/js/create_api.js'></script>
        <script src='userUI/settings.js'></script>
    </div>

    <footer>
        <p>For any queries: devluka.public@gmail.com</p>
        <p>Service: Library demo API</p>
        <p></p>
    </footer>

</body>
