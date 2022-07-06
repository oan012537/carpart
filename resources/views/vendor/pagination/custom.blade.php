@if ($paginator->hasPages())
<div class="view-all">
    <div>
        <p>แสดงทั้งหมด {{$paginator->count()}} จาก {{$paginator->total()}} รายการ</p>
    </div>
    <ul class="pagination justify-content-end">
       
        @if ($paginator->onFirstPage())
            {{-- <li class="disabled page-item"><span class="page-link">← Previous</span></li> --}}
            <li class="page-item disabled"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
        @else
            {{-- <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li> --}}
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a></li>
        @endif


      
        {{-- @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach --}}
        <li class="page-item">{{$paginator->currentPage()}}/{{$paginator->lastPage()}}</li>


        
        @if ($paginator->hasMorePages())
            {{-- <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li> --}}
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a></li>
        @else
            {{-- <li class="disabled page-item"><span class="page-link">Next →</span></li> --}}
            <li class="disabled page-item"><a class="page-link" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
        @endif
    </ul>
</div>
@endif 