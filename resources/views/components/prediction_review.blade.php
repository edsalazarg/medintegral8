@props(['result'=> $result])
@if($result == 0)
    <span class="label label-warning label-inline ml-2">&#10006;</span>
@elseif($result == 1)
    <span class="label label-primary label-inline ml-2">&#10004;</span>
@endif
