    <nav class="menu" id="theMenu">
        <div class="menu-wrap">
            <h1 class="logo"><a href="#home">DSGN NYC</a></h1>
            <i class="fa fa-times menu-close"></i>

            @if(isset($page) && is_object($page))
                @foreach($page as $item)
                    <a href="#{{ $item->name }}" class="smoothScroll">{{ $item->name }}</a>
                @endforeach
            @endif

            @if($social && is_object($social))
                @foreach ($social as $item)
                    <a href="#"><i class="{{ $item->icon }}"></i></a>
                @endforeach
            @endif

        </div>

        <!-- Menu button -->
        <div id="menuToggle"><i class="fa fa-bars"></i></div>
    </nav>

    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>DESIGN STUDIO</h1>
                </div>
            </div><! --/row -->
        </div><! --/container -->
    </div><! --/headerwrap -->

    <section id="about" name="about"></section>
    <div id="aboutwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 name">
                    @if (isset($about))
                        @foreach($about as $value)
                            <img class="img-responsive" src="{{ asset(env('THEME')) }}/img/{{ $value->image }}">
                            <p>DANIEL PRATT</p>
                            <div class="name-label"></div>
                </div><! --/col-lg-4-->
                <div class="col-lg-8 name-desc">
                    <h2>{{ $value->describer['one'] }}<br/>{{ $value->describer['two'] }} <br/>{{ $value->describer['three'] }}</h2>
                    <div class="name-zig"></div>

                    <div class="col-md-6">
                        <p>{{ $value->text['1'] }}</p>
                        <p>{{ $value->text['2'] }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $value->text['3'] }}</p>
                        <p>{{ $value->text['4'] }}</p>
                        @endforeach

                        @endif
                    </div>

                </div><! --/col-lg-8-->

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /aboutwrap -->

    <! -- ABOUT SEPARATOR -->
    <div class="sep about" data-stellar-background-ratio="0.5"></div>

    <! -- PORTFOLIO SECTION -->
    <section id="portfolio" name="portfolio"></section>
    <div id="portfoliowrap">
        <div class="container">
            @if (isset($portfolios) && is_object($portfolios))
                @foreach($portfolios as $key => $portfolio)
                    @if (($key%3) == 0)
                        @if ($key == 0)
                            <div class="row">
                                <h1>SOME OF MY LATEST WORKS</h1>
                                @else
                                    <div class="row mt">
                                        @endif
                                        @endif
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                                            <div class="project-wrapper">
                                                <div class="project">
                                                    <div class="photo-wrapper">
                                                        <div class="photo">
                                                            <a class="fancybox" href="{{ asset(env('THEME')) }}/img/portfolio/{{ $portfolio->image }}"><img class="img-responsive" src="{{ asset(env('THEME')) }}/img/portfolio/{{ $portfolio->image }}" alt=""></a>
                                                        </div>
                                                        <div class="overlay"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- col-lg-4 -->
                                        @if (($key + 1)%3 == 0)
                                    </div><!-- /row -->
                                @endif
                                @endforeach
                                @endif


                            </div><! --/container -->
                            <div class="container">
                                <div class="row mt centered">
                                    <h1>MY DESIGN PROCESS</h1>

                                    @if (isset($processes) && is_object($processes))
                                        @foreach($processes as $process)
                                            <div class="col-lg-4 proc">
                                                <i class="{{ $process->icon }}"></i>
                                                <h3>{{ $process->name }}</h3>
                                                <p>{{ $process->text }}</p>
                                            </div>
                                        @endforeach
                                    @endif

                                </div><! --/row -->
                            </div><! --/container -->
        </div><! --/Portfoliowrap -->

        <! -- PORTFOLIO SEPARATOR -->
        <div class="sep portfolio" data-stellar-background-ratio="0.5"></div>


        <! -- SERVICE SECTION -->
        <section id="services" name="services"></section>
        <div id="servicewrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8-offset-2 centered">
                        <h1>AN OVERVIEW OF MY SERVICES</h1>
                        <h3>I'll do all the work for you</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div><!-- /col-lg-8 -->
                </div><! --/row -->

                @if (isset($services) && is_object($services))
                    @foreach($services as $key => $service)
                        @if (($key%4) == 0 || $key == 0 )
                            <div class="row mt">
                                @endif
                                <div class="col-lg-3 service">
                                    <i class="{{ $service->icon }}"></i><p>{{ $service->name  }}<br/><small>{{ $service->title  }}</small></p>
                                    <p class="text">{{ $service->text }}</p>
                                </div>

                                @if (($key + 1)%4 == 0)
                            </div><!-- /row -->
                        @endif
                    @endforeach
                @endif

            </div><! --/container -->
        </div><! --/servicewrap -->

        <div id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 mt">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                @if (isset($carousels) && is_object($carousels))
                                    @foreach($carousels as $key => $carousel)
                                        <div class="item {{ $key == 0 ? 'active' : ''}} mb centered">
                                            <h3>{{ $carousel->title }}</h3>
                                            <p>{{ $carousel->text }}</p>
                                            <p><img class="img-circle" src="{{ asset(env('THEME')) }}/img/{{ $carousel->image }}" width="80"></p>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                        </div>

                    </div><! --/col-lg-8 -->
                </div><! --/row -->
            </div><! --/container -->
        </div><! --/testimonials -->

        <! -- SERVICE SECTION -->
        <section id="contact" name="contact"></section>
        <! -- CONTACT SEPARATOR -->
        <div class="sep contact" data-stellar-background-ratio="0.5"></div>

        <div id="contactwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">


                        @if (isset($contacts) && is_object($contacts))
                            @foreach($contacts as $contact)
                                <p>{{ $contact->title }}</p>
                                <p>{{ $contact->text }}</p>
                                <p>
                                    <small>{{ $contact->street }}, {{ $contact->house }}<br/>
                                        {{ $contact->post_number }}, {{ $contact->city }},<br/>
                                        {{ $contact->country }}.</small>
                                </p>
                                <p>
                                    <small>Tel. {{ $contact->phone }}<br/>
                                        Mail. {{ $contact->email }}<br/>
                                        Skype. {{ $contact->skype }}
                                </p>
                            @endforeach
                        @endif


                    </div>

                    <div class="col-lg-6">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::open(['role' =>'form']) !!}
                        <div class="form-group">
                            <label for="exampleInputName1">Your Name</label>
                            <input id="exampleInputEmail1" class="form-control" placeholder="Enter name" name="username" type="text" value="{{ old('username') }}">
                            <label for="exampleInputName1">Email address</label>
                            <input id="exampleInputEmail1" class="form-control" placeholder="Enter email" name="email" type="email" value="{{ old('email') }}">
                            <label for="exampleInputText1">Message</label>
                            <textarea class="form-control" rows="3" name="text" value="{{ old('text') }}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        {!! Form::close() !!}
                    </div>

                </div><! --/row -->
            </div><!-- /container -->
        </div>
