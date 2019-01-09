<div class="header">
    <div class='rmm' data-menu-style="sapphire" data-menu-title="">
        @if(!empty($mainMenu))
            <ul>
                <li><a href='/'>Home</a></li>
                @foreach($mainMenu as $itemMainMenu)
                    <li><a href="{{ $itemMainMenu['url'] }}">{{ $itemMainMenu['name'] }}</a></li>
                @endforeach
            </ul>
        @endif
    </div>
</div>