@if ($paginator->hasPages())
    <nav aria-label="...">
        <ul class="pagination justify-content-center mt_50">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" ><span class="page-link"><i class="far fa-arrow-left"  style="padding:15px "></i></span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="far fa-arrow-left" style="padding:15px "></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item"><a class="page-link active" href="#">{{ sprintf('%02d', $page) }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ sprintf('%02d', $page) }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="far fa-arrow-right" style="padding:15px"></i></a></li>
            @else
                <li class="page-item disabled"><span class="page-link"><i class="far fa-arrow-right" style="padding:15px "></i></span></li>
            @endif
        </ul>
    </nav>
@endif
