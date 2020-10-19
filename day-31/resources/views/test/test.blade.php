<h1>hello <?= $name ?> from the test view</h1>
<h2>your username <?= $user ?></h2>
<?= $description ?>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus rem animi impedit iste excepturi amet odio? Quisquam explicabo, et, nulla at veniam magnam, architecto omnis provident amet totam dolores fugit.</p>
<?php echo 'ahoj' . 2 ?>

<!-- now done with blade -->
<h1>with laravel blade templating engine</h1>
<h1>hello {{ $name }} from the test view</h1>
<h2>your username {{ $user }} </h2>
<!-- blade is escaping the special characters, compare the outcome -->
<!-- this is must have prevention if js injections, every data from the user needs to be escaped -->

{{ $description }}
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus rem animi impedit iste excepturi amet odio? Quisquam explicabo, et, nulla at veniam magnam, architecto omnis provident amet totam dolores fugit.</p>
<?php echo 'ahoj' . 2 ?>

{{-- this is laravel blade comment which will not be visible in the source code of the browser --}}

{{-- blade control structures --}}

@if ($age >= 18)
    <h2>you are older then 18</h2>
@else
    <h2>you are so young</h2>
@endif