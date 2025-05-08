<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic Content</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 40px;
        }

        h1 {
            color: #333;
        }

        .item-list {
            list-style-type: none;
            padding: 0;
        }

        .item-list li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px 20px;
            border-left: 5px solid #007BFF;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .item-title {
            font-weight: bold;
            font-size: 18px;
        }

        .item-description {
            margin-top: 5px;
            color: #555;
        }
    </style>
</head>
<body>

    <h1>Latest Blog Posts</h1>
    <ul class="item-list">
        <?php
        // Example data: blog posts
        $blogPosts = [
            [
                "title" => "Getting Started with PHP",
                "description" => "Learn the basics of PHP programming language."
            ],
            [
                "title" => "Understanding Arrays in PHP",
                "description" => "A deep dive into arrays and how to manipulate them."
            ],
            [
                "title" => "PHP and HTML: A Perfect Match",
                "description" => "Learn how to embed PHP within HTML to create dynamic pages."
            ]
        ];

        // Loop through the array and display each post
        foreach ($blogPosts as $post) {
            echo "<li>";
            echo "<div class='item-title'>" . htmlspecialchars($post['title']) . "</div>";
            echo "<div class='item-description'>" . htmlspecialchars($post['description']) . "</div>";
            echo "</li>";
        }
        ?>
    </ul>

</body>
</html>
