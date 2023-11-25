<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Documentação API</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/doc.css') }}">
    </head>
    <body>
        <header>
            <h2 class="Title">Documentação API - CRUD</h2>
            <p class="Version">V 0.1</p>
        </header>
        <main>
            <div>
                <p class="TextLinkAPI">Link API: <a class="LinkAPI" target="_blank" href="http://127.0.0.1:8000/api">https://127.0.0.1:8000/api</a></p>
            </div>

            <div class="Post">
                <div class="PostTitle">
                    <h3 class="PostReference">/Post</h3>
                    <p class="PostReferenceDescription">Rota sobre Posts</p>
                </div>
                <div class="PostRoute">
                    <label class="PostGET">GET</label>
                    <label>Request:</label>
                </div>
                <div class="PostRoute">
                    <label class="PostPOST">POST</label>
                </div>
                <div class="PostRoute">
                    <label class="PostUPDATE" >UPDATE</label>
                </div>
                <div class="PostRoute">
                    <label class="PostDELETE">DELETE</label>
                </div>

            </div>
        </main>
        <footer>
            <p class="Developer">Criado e documentado by <a class="LinkDeveloper" target="_blank" href="https://www.eliseubrito.dev">Eliseu Brito</a> &#x1F393; </p>
        </footer>
    </body>
</html>
