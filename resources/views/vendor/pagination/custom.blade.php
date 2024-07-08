{{-- <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
    <a class="page-numbers" href="https://mikotech.vn/blog/page/2/">2</a>
    <span class="page-numbers dots">…</span>
    <a class="page-numbers" href="https://mikotech.vn/blog/page/33/">33</a>
    <a class="next page-numbers" href="https://mikotech.vn/blog/page/2/">Trang sau</a></div> --}}

@if ($paginator->hasPages())
<div class="nav-links">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{-- <li class="disabled"><span>&laquo;</span></li> --}}
        @else
        <a class="next page-numbers" href="{{ $paginator->previousPageUrl() }}">Trang trước</a>
            {{-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li> --}}
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                    @else
                    <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">Trang sau</a>
            {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li> --}}
        @else
            {{-- <li class="disabled"><span>&raquo;</span></li> --}}
        @endif
    </div>
@endif
