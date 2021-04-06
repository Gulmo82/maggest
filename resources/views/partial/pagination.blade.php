@if ($paginator->hasPages())

<nav class="pagination is-centered" role="navigation" aria-label="pagination">

    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())

    <a class="pagination-previous" disabled>Previous</a>


    @else

    <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Previous</a>

    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())

    <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next is-right">Next</a>

    @else

    <a class="pagination-next is-right" disabled>Next</a>

    @endif



    <ul class="pagination-list">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li>
            <a class="pagination-link is-current" aria-label="Page {{ $page }}" aria-current="page">{{ $page }}</a>
        </li>
        @else
        <li>
            <a class="pagination-link" href="{{ $url }}">{{ $page }}</a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach

    </ul>
</nav>


@endif
