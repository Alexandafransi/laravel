<!-- <h1>

        blade template is here now
</h1> -->
<!-- <?php
    //print_r($items);
?> -->

{{
    $items['name']

}}

{{
    $items['lastname']

}}

<!-- we use !! on the both side inorder to display html view in blade template -->
{!!
    
    $items['head']

!!}

<script>

    // to view items in the json file
    var app= @json($items);
    console.log(app);
</script>

@if($items['name']=="alexanda")
    this is my name

@else
    someone else is here
@endif

@foreach($items as $item)
    <li>{!!$item!!}</li>
@endforeach