<!-- Header Container -->
<div class="header-wrapper">

    <!-- Header Top Container -->
    <div class="header-top">

        <!-- Container -->
        <div class="container">

            <div class="row">

                <!-- Left -->
                <div class="col-md-12 col-sm-12 columns">
                    <div class="header-top-left">
                        <ul class="social-top">
                            @if(!empty($option['hotline']))
                                <li>
                                    <i class="fa fa-phone"></i> Phone: {{ $option['hotline'] }}
                                </li>
                            @endif
                            @if(!empty($option['email']))
                                <li>
                                    <i class="fa fa-envelope"></i> Mail: {{ $option['email'] }}
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /Left -->

            </div>

        </div>
        <!-- /Container -->

    </div>
    <!-- /Header Top Container -->

    <!-- Header Main Container -->
    <div class="header-main">

        <!-- Container -->
        <div class="container">

            <!-- Main Navigation & Logo -->
            <div class="main-navigation">

                <div class="row">

                    <!-- Main Navigation -->
                    <div class="col-md-12 columns">

                        <nav class="navbar navbar-default gfx-mega nav-left" role="navigation">


                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="navbar-toggle" data-toggle="collapse" data-target="#gfx-collapse"></a>
                                <div class="logo">
                                    <a href="/">
                                        @if(!empty($option['company_logo']))
                                            <img src="{{ $option['company_logo'] }}" alt="Logo">
                                        @else
                                            <img src="img/theme/logo.png" alt="Logo">
                                        @endif
                                    </a>
                                </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="gfx-collapse">
                                <ul class="nav navbar-nav gfx-nav">
                                    <li class="active">
                                        <a href="/">Trang chủ</a>
                                    </li>
                                    @if(!empty($mainMenu))
                                        @foreach($mainMenu as $itemMainMenu)
                                            @if(!empty($itemMainMenu['child']))
                                                <li class="dropdown">
                                                    <a href="{{ $itemMainMenu['url'] }}" class="dropdown-toggle" data-toggle="dropdown">
                                                        {{ $itemMainMenu['name'] }}
                                                        <b class="caret"></b>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($itemMainMenu['child'] as $itemMainMenuChild)
                                                            <li>
                                                                <a href="{{ $itemMainMenuChild['url'] }}">{{ $itemMainMenuChild['name'] }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ $itemMainMenu['url'] }}">{{ $itemMainMenu['name'] }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Header Container -->