<?php
    require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='assets/style/main.css'>
    <link rel='stylesheet' href='assets/style/bg-main.css'>
    <script src='https://kit.fontawesome.com/fa41d7c648.js' crossorigin='anonymous'></script>
    <title>Introducing NotaMesa</title>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const space = document.getElementById('space');
            const starCount = 100; // Adjust the number of stars as needed

            for (let i = 0; i < starCount; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                const size = Math.random() * 10 + 1; // Random size between 1 and 10px
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;
                star.style.top = `${Math.random() * 100}%`; // Random position
                star.style.left = `${Math.random() * 100}%`; // Random position
                star.style.animationDuration = `${Math.random() * 30 + 30}s`; // Random animation duration between 50s and 100s
                space.appendChild(star);
            }
        });
    </script><!-- Makes all the space things random -->
</head>
<body>
    Some stuff here...
</body>

</html>