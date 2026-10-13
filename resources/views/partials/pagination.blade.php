@if ($paginator->hasPages())
    <nav class="custom-pagination" role="navigation" aria-label="Pagination Navigation" style="display:flex; flex-direction:column; align-items:center; gap:0.85rem; margin-top:2.5rem;">
        <div class="pagination-info" style="font-family: var(--font-mono); font-size: 0.76rem; color: var(--ink-muted); letter-spacing: 0.05em; text-transform: uppercase;">
            Showing {{ $paginator->firstItem() }}&ndash;{{ $paginator->lastItem() }} of {{ $paginator->total() }} records
        </div>

        <ul class="pagination-list" style="display:flex; gap:0.35rem; list-style:none; padding:0; margin:0; align-items:center;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link" style="display:inline-flex; align-items:center; justify-content:center; min-width:36px; height:36px; padding:0 0.85rem; border:1px solid var(--line); border-radius:var(--radius-sm); color:var(--ink-faint); font-family:var(--font-mono); font-size:0.8rem; background:var(--paper-warm); opacity:0.6; cursor:not-allowed;">&larr; Prev</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" style="display:inline-flex; align-items:center; justify-content:center; min-width:36px; height:36px; padding:0 0.85rem; border:1px solid var(--line); border-radius:var(--radius-sm); color:var(--ink); font-family:var(--font-mono); font-size:0.8rem; background:var(--paper-card); text-decoration:none; transition:0.18s;">&larr; Prev</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link" style="padding:0 0.4rem; color:var(--ink-faint); font-family:var(--font-mono); font-size:0.82rem;">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link" style="display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border:1px solid var(--accent); border-radius:var(--radius-sm); color:#fff; font-family:var(--font-mono); font-size:0.82rem; font-weight:700; background:var(--accent);">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}" style="display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border:1px solid var(--line); border-radius:var(--radius-sm); color:var(--ink); font-family:var(--font-mono); font-size:0.82rem; background:var(--paper-card); text-decoration:none; transition:0.18s;">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" style="display:inline-flex; align-items:center; justify-content:center; min-width:36px; height:36px; padding:0 0.85rem; border:1px solid var(--line); border-radius:var(--radius-sm); color:var(--ink); font-family:var(--font-mono); font-size:0.8rem; background:var(--paper-card); text-decoration:none; transition:0.18s;">Next &rarr;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link" style="display:inline-flex; align-items:center; justify-content:center; min-width:36px; height:36px; padding:0 0.85rem; border:1px solid var(--line); border-radius:var(--radius-sm); color:var(--ink-faint); font-family:var(--font-mono); font-size:0.8rem; background:var(--paper-warm); opacity:0.6; cursor:not-allowed;">Next &rarr;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
