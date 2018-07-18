<h1>hello <?php
echo $man."!!! Ты - ".$botan."!!!!";
?></h1>
<ul>
    @foreach($tasks as $task)

    <li>{{$task}}</li>

    @endforeach

</ul>

<h1>The end </h1>