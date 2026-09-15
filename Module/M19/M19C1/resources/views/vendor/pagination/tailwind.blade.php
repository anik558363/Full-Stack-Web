@if ($paginator->hasPages())
    <nav class="ledger-pagination">
        <ul class="pg-list">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <li class="pg-item pg-disabled" aria-disabled="true">
                    <span>‹ Prev</span>
                </li>
            @else
                <li class="pg-item">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">‹ Prev</a>
                </li>
            @endif

            {{-- Page numbers --}}
            @foreach ($elements as $element)

                @if (is_string($element))
                    <li class="pg-item pg-dots"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pg-item pg-current"><span class="mono">{{ $page }}</span></li>
                        @else
                            <li class="pg-item">
                                <a href="{{ $url }}" class="mono">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif

            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <li class="pg-item">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">Next ›</a>
                </li>
            @else
                <li class="pg-item pg-disabled" aria-disabled="true">
                    <span>Next ›</span>
                </li>
            @endif

        </ul>

        <p class="pg-summary">
            Showing <span class="mono">{{ $paginator->firstItem() }}</span>–<span class="mono">{{ $paginator->lastItem() }}</span>
            of <span class="mono">{{ $paginator->total() }}</span> results
        </p>
    </nav>
@endif
