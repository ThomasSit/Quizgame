<?php include './include/header.php'?>
<main>
    <h1>Catergorie</h1>
    <div class="container">
        <div class="item1">
            <ul>
                <li>Landen</li>
                <li>Hoofstadden</li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            
            <button>Landen</button>
        </div> 

        <div class="item2"> 
            <ul>
                <li>Pokemon</li>
                <li>Soorten</li>
                <li>Namen</li>
                <li>Evoluties</li>
            </ul>
        <button>Pokemon</button>
    </div> 

        <div class="item3"> 
            <ul>
                <li>Random onderwerp </li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <button>Geschiedenis</button>
        </div> 
        <div class="item4"> </div>
    </div>
</main>

<?php include './include/footer.php' ?>

<style scoped>
h1{
    text-align: center;
}

button{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column-reverse;
}
</style>