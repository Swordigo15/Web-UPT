<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
    <title>WEB UPT</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <div>
                    {{-- Menu Button --}}
                    <button data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" 
                    aria-controls="offcanvasWithBothOptions">
                        <img src="{{ asset('pictures/menu.png') }}" 
                        alt="https://www.flaticon.com/free-icons/three-lines" 
                        width="30" height="auto">    
                    </button>
                    
                    {{-- Icon Button --}}
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('pictures/logo.png') }}" alt="Logo" width="40" height="auto"
                        class="d-inline-block align-text-top">
                        UPT TIK
                    </a>
                </div>
                
                {{-- Web Name --}}
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
            
            
            {{-- Menu Offcanvas --}}
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">                       
                    {{-- Icon Button --}}
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('pictures/logo.png') }}" alt="Logo" width="40" height="auto"
                        class="d-inline-block align-text-top">
                        UPT TIK
                    </a>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <a class="sideMenu" href="#Home">
                            <img src="{{ asset('pictures/logo.png') }}" alt="Logo" 
                            width="40" height="auto"
                            class="d-inline-block align-text-top">
                            Home</a>        <br>
                        <a class="sideMenu"  href="#Feature">
                            <img src="{{ asset('pictures/logo.png') }}" alt="Logo" 
                            width="40" height="auto"
                            class="d-inline-block align-text-top">
                            Features</a>     <br>
                        <a class="sideMenu"  href="#About">
                            <img src="{{ asset('pictures/logo.png') }}" alt="Logo" 
                            width="40" height="auto"
                            class="d-inline-block align-text-top">
                            About</a>        <br>
                        <a class="sideMenu"  href="#Contact">
                            <img src="{{ asset('pictures/logo.png') }}" alt="Logo" 
                            width="40" height="auto"
                            class="d-inline-block align-text-top">
                            Contact</a>      <br>
                    </div>
                </div>
            </div>

        </nav>

    </header>
        
        <main>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">Info</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">Info</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>
                            <button class="btn btn-primary" type="button" 
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">Info</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                data-bs-backdrop="false"
                aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>
        </div>
    </main>
    <script src="{{ asset('js/advance.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
