@if ($paginator->hasPages())
<nav class="pagination is-centered" role="navigation" aria-label="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <a class="pagination-previous disabled">@lang('pagination.previous')</a>

    @else
    <li>
        <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}"
            rel="prev">@lang('pagination.previous')</a>
    </li>
    @endif


    <ul class="pagination-list">

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li><a class="pagination-link" aria-label="Goto page {{ $element }}">{{ $element }}</a></li>

        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li><a class="pagination-link is-current" aria-label="Page {{ $page }}" aria-current="page">{{ $page }}</a></li>

        @else
        <li><a href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-next">@lang('pagination.next')</a>
        </li>
        @else
        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
            class="pagination-next disabled">@lang('pagination.next')</a>


        @endif

    </ul>
</nav>


@endif
