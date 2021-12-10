<?php 
require __DIR__ . '/layout/header.php';


?>

<div id="app">
<div class="container pt-5 d-flex flex-wrap justify-content-center">
    <div class="singolo" v-for="disco in dischi">
        <img :src="disco.poster" alt="">
        <h4>{{disco.title}}</h4>
        <p>{{disco.author}}</p>
        <p>{{disco.year}}</p>
    </div>
    
</div>













</div>

<?php require __DIR__ . '/layout/footer.php'; ?>