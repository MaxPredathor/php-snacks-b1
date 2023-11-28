<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem</title>
</head>
<body>
    <main>
        <?php 
        $testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quos eligendi tempore sint debitis repudiandae quod aspernatur magnam nobis commodi, inventore repellat culpa? Cumque inventore quod totam blanditiis sequi iure consequatur cum dignissimos excepturi ut beatae quas quaerat at accusantium odit, corporis voluptate dolorem eius harum facere! Eos doloribus provident harum ullam quae voluptates voluptatem suscipit quia, nam odit sapiente rem dolore ducimus quibusdam libero et facilis consectetur eligendi dignissimos tenetur amet. Maxime cumque totam animi. Aliquid corporis repellat architecto, velit harum, voluptatem alias pariatur quia assumenda eos, accusamus magni laboriosam eum? Magnam vel natus nostrum, nihil consequatur deleniti pariatur praesentium amet reiciendis iusto perferendis fugiat eius officiis rerum itaque expedita exercitationem inventore doloribus. Laborum doloribus iure delectus maiores! Provident sapiente accusantium dolorem. Soluta ea itaque ipsum dolor veniam reiciendis illo unde? Ipsum assumenda eius velit laudantium nemo hic. Rerum amet consequuntur doloremque similique aliquam quam harum iusto, placeat impedit magnam ullam dolor voluptas aut laborum praesentium fuga ad deleniti ipsa sed nesciunt! Officiis natus incidunt repellendus soluta vitae voluptatem, eum fugit odit cum hic molestiae itaque quisquam ab eveniet quo dicta ea temporibus consectetur veritatis necessitatibus architecto excepturi libero! Accusantium quos dolorem rerum, ipsam ut rem? Sapiente, voluptatem cupiditate.";
        $frasi = explode('.', $testo);

        foreach ($frasi as $frase) {
            if (!empty(trim($frase))) {
                echo "<p>$frase.</p> ";
            }
        }
        
        ?>
    </main>
</body>
</html>