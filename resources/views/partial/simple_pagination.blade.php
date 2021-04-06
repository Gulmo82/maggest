@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
           {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li>
        <a class="pagination-previous" disabled >Previous</a>
    </li>

    @else
    <li>
        <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Previous</a>
    </li>
    @endif

       {{-- Next Page Link --}}
       @if ($paginator->hasMorePages())
       <li>
           <a href="{{ $paginator->nextPageUrl() }}"
               class="pagination-next" >Next</a>
       </li>
       @else
       <li>
           <a href="{{ $paginator->nextPageUrl() }}"
               class="pagination-next" disabled >Next</a>
       </li>
       @endif
        </ul>
    </nav>
@endif

