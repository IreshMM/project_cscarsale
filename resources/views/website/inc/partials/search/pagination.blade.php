<div class="pager_wrapper">
    @php
        $currentPage = $listings->currentPage();
        $lastPage = $listings->lastPage();
        $leftRange = $currentPage - 1;
        $rightRange = $lastPage - $currentPage;
    @endphp
    <ul class="pager clearfix">
        <li class="prev" style="{{ $listings->previousPageUrl() == null ? 'display:none' : '' }}"><a href="{{ $listings->previousPageUrl() }}"></a></li>
        <li style="{{ ($currentPage - 1) > 2 ? '' : 'display:none' }}" class="dots">....</li>

        @for ($i = 0; $i < $leftRange && $i < 2; $i++)
            <li class="li"><a href="{{ 'http://127.0.0.1:8000/search?page=' . ($currentPage - ($leftRange - $i)) }}">{{ $currentPage - ($leftRange - $i) }}</a></li>
        @endfor

        <li class="active"><span>{{ $currentPage }}</span></li>

        @for ($i = 0; $i < $leftRange && $i < 2; $i++)
            <li class="li"><a href="{{ 'http://127.0.0.1:8000/search?page=' . ($currentPage + $i + 1) }}">{{ ($currentPage + $i + 1) }}</a></li>
        @endfor
        <li style="{{ ($listings->lastPage() - $currentPage) > 2 ? '' : 'display:none' }}" class="dots">....</li>
        <li class="next" style="{{ $listings->nextPageUrl() == null ? 'display:none' : '' }}"><a href="{{ $listings->nextPageUrl() }}"></a></li>
    </ul>
</div>