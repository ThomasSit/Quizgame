<?php 
    include './include/header.php';
    include './connect/connect.php';
?>


<main>
    <h1>Catergorie</h1>
    <div class="container">

    <?php 
    // hier de 


    foreach($quiz as $quizvragen){
        $id = $quizvragen['id'];
    }
    
    ?>
     <!-- foreach loop komen uit database button click haal id uit 
    id uit halen  doorgestuurd naar quizpagia uit quizpagina komt daaruit fetch id 
for loop data quz vragen  -->
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