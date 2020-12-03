@if(!empty($services))
    <ul class="vertical-menu">
        @foreach($services as $service)
            <li
                @if(request()->route()->parameter('slug') && request()->route()->parameter('slug') === $service->slug)
                class="selected"
                @endif
            >
                <a href="{{ route('article.service', ['slug' => $service->slug]) }}" title="{{ $service->name }}">
                    {{ $service->name }}
                    <span class="template-arrow-horizontal-3"></span>
                </a>
            </li>
        @endforeach
    </ul>
@endif

<div class="cm-smart-column-wrapper" style="position: static; bottom: auto; top: auto; width: auto;">
    @include('partials._popular_articles')

    @include('partials._most_tags')
</div>
