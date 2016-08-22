<div id="ti-breadcrumb">
    <ol class="breadcrumb">
        @foreach($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-item">
                <a href="{{ url($breadcrumb["url"]) }}" style="font-size: 1.5em">
                    {{ $breadcrumb["name"] }}
                </a>
            </li>
        @endforeach
    </ol>
</div>

