<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ServeX: For programmers</title>
        <link rel="stylesheet" href="/fontawesome/css/all.css">
        <link rel="stylesheet" href="/css/easydropdown.flat.css">
        <link rel="stylesheet" href="/css/dashboard.css">
    </head>
    <body>

        {{-- Splash --}}

        <section class="container-splash">
            <div class="wrapper-splash anime-top">
                <p>ServeX</p>
                <div class="loader"></div>
            </div>
        </section>

        {{-- Dash --}}

        <section class="container-dash">

            {{-- Nav --}}

            <header>
                <nav>
                    <label class="logo">ServeX</label>
                    <form>
                        <input type="text" placeholder="Search...">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </nav>
            </header>

            {{-- Content --}}
            
            <section class="container-master">
                <div class="content">
                    <div class="cards">
                        @for ($i = 0; $i < 7; $i++)
                        <div class="card">
                            <h3>Title of The Card</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <p><i class="fas fa-hand-point-right"></i> Framework</p>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="sticky-filter">
                    <div class="header-filter">
                        <h3>Filter for best results</h3>
                    </div>
                    <div class="body-filter">
                        <h3>Filter by type</h3>
                        <form>
                            <select class="dropdown">
                                <option value="null" class="label">Category</option>
                                <option value="1">Code</option>
                                <option value="2">Framework</option>
                                <option value="3">Programming Language</option>
                            </select>
                            <input type="submit" value="Go">
                        </form>
                    </div>
                </div>
            </section>

            {{-- Footer --}}

            <footer>
                <div class="container-foo">
                    <div class="helper">
                        <h3 id="logo-anchor">ServeX</h3>
                        <div class="icons">
                            <div class="icon-wrapper">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
        
                            <div class="icon-wrapper">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
        
                            <div class="icon-wrapper">
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div> 
                </div>
    
                <div class="wave-credits"></div>
    
                <div class="credits">
                    <p>Developed by <a target="_blank" href="#">Mtec Blinders</a></p>
                </div>
            </footer>

        </section>

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src="/js/dashboard.js"></script>
        <script src="/js/jquery.easydropdown.js"></script>
    </body>
</html>