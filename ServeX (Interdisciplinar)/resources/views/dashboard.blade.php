<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/easydropdown.flat.css">
    <link rel="stylesheet" href="/css/website.css">
    <title>ServeX: For programmers</title>
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
                    @foreach($technicalities as $technicality)
                        <div class="card">
                            <h3>{{$technicality->technicality}}</h3>
                            <p>{{$technicality->description}}</p>
                            <p><i class="fas fa-hand-point-right"></i>
                                <?php $i = 0; ?>
                                @foreach($technicality->categories as $category)
                                    <span>
                                        {{$category->category}}
                                        <?php
                                            if(++$i < count($technicality->categories)){
                                                echo ',';
                                            }
                                        ?>
                                    </span>
                                @endforeach
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="sticky-filter">
                <div class="header-filter">
                    <h3>Filter for best results</h3>
                </div>
                <div class="body-filter">
                    <h3>Filter by category</h3>
                    <form>
                        <select class="dropdown">
                            <option value="null" class="label">Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Go">
                    </form>
                </div>
            </div>
        </section>

        {{-- Ads --}}

        <section class="container-ads">
            <img id="ads-image" src="/images/smartphone.png">
            <div class="info">
                <div class="helper-info">
                    <h3>INSTALL OUR APP NOW!</h3>
                    <p>have all this content in your pocket</p>
                    <img src="/images/ggplay.png">
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
                            <a href="#"><i class="fab fa-google-play"></i></a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="credits">
                <p>Developed by <a target="_blank" href="#">Mtec Blinders</a></p>
            </div>
        </footer>

    </section>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="/js/website.js"></script>
    <script src="/js/jquery.easydropdown.js"></script>
</body>
</html>