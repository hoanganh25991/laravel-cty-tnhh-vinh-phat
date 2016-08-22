<div id="ti-breadcrumb">
    <ol class="breadcrumb">
        @foreach($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-item">
                <a href="{{ $breadcrumb["url"] }}">
                    {{ $breadcrumb["name"] }}
                </a>
            </li>
        @endforeach
    </ol>
</div>

