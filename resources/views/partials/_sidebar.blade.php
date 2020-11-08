<div class="column column-1-4">
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
            <h6 class="box-header page-margin-top">Tin được quan tâm</h6>
            <ul class="blog small margin-top-30 clearfix">
                <li>
                    <a href="?page=post" title="How to: deep clean your kitchen" class="post-image">
                        <img src="{{ asset('images/samples/90x90/image_01.jpg') }}" alt="" style="display: block;">
                    </a>
                    <div class="post-content">
                        <a href="?page=post" title="How to: deep clean your kitchen">How to: deep clean your kitchen</a>
                        <ul class="post-details">
                            <li class="date">August 24, 2017</li>
                        </ul>
                    </div>
                </li>
            </ul>

            <h6 class="box-header page-margin-top">TEXT WIDGET</h6>
            <p class="margin-top-10">What makes Cleanmate trusted above other cleaning service providers? When you combine higher standards, smarter strategies and <a href="#">superior quality</a> all in one package, the result is top notch.</p>
        </div>
</div>
