@if ($paginator->hasPages())
    <ul class="pagination">
        
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">Précédent</span><li>
        @else
            <li class="page-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}" rel="prev">Précédent</a>   
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{$element}}</span></li>
                
            @endif 

            @if (is_array($element))
                @foreach ($element as $page =>$url)
                    @if ($page == $paginator->currentpage())
                        <li class="page-item active my-active"><span class="page-link">{{$page}}</span></li>  
                    @else
                        <li class="page-item"><a class="page-link" href="{{$url}}">{{$page}}</a></li>
                    @endif
                @endforeach
                
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{$paginator->nextPageUrl()}}" rel="next">Suivant</a>            
        @else
            <li class="page-item disabled"><span class="page-link">Suivant</span><li>
        @endif
    </ul>
@endif