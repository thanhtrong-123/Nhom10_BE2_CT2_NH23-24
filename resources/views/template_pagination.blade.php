@if ($paginator->hasPages())
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link page-link-prev" href="#" aria-label="Previous" aria-disabled="true">
                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                </a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link page-link-prev" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"
                    aria-disabled="true">
                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @elseif (($page == $paginator->currentPage() + 1) || ($page == $paginator->currentPage() + 2))
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @elseif (($page == $paginator->currentPage() - 1) || ($page == $paginator->currentPage() - 2))
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link page-link-next" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link page-link-next" href="#" aria-label="Next">
                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                </a>
            </li>
        @endif
    </ul>
    <!-- Pagination -->
@endif
