<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="500+ Free Essential Tools for Web Development, Programming, SEO, and More.">
    <meta name="keywords" content="web tools, free tools, programming tools, development tools, SEO tools, online tools">
    <meta name="author" content="Your Name">
    <title>500+ Essential Tools | Free Tools for Developers</title>

    <!-- Link to external CSS (can be adjusted as needed) -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- SEO & Open Graph meta tags -->
    <meta property="og:title" content="500+ Essential Tools for Developers">
    <meta property="og:description" content="Explore 500+ free tools for web developers. Fast, free, and easy to use!">
    <meta property="og:image" content="image-url.jpg">
    <meta property="og:url" content="https://yourwebsite.com">
</head>
  
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: #0073e6;
    padding: 20px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 a {
    color: white;
    text-decoration: none;
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

main h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.search-section {
    margin-bottom: 40px;
}

.search-section input {
    width: 100%;
    padding: 10px;
    font-size: 1.2em;
    border: 2px solid #0073e6;
    border-radius: 5px;
}

.tools-section {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 20px;
}

.tool {
    background-color: white;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.tool h2 {
    margin-bottom: 10px;
}

.tool p {
    margin-bottom: 20px;
}

.btn {
    background-color: #0073e6;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

footer {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

footer a {
    color: white;
    text-decoration: none;
}

footer ul {
    list-style: none;
    margin-top: 10px;
}

footer ul li {
    display: inline;
    margin-left: 20px;
}

.sidebar-left, .sidebar-right {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.sidebar-left ul, .sidebar-right ul {
    list-style: none;
}

.sidebar-left ul li, .sidebar-right ul li {
    margin-bottom: 10px;
}

@media screen and (max-width: 768px) {
    .tools-section {
        grid-template-columns: 1fr;
    }

    .sidebar-left, .sidebar-right {
        display: none;
    }
}

    </style>
  
<body>

    <!-- Header Section (dynamically included from header.php) -->
    <?php include 'header.php'; ?>

    <!-- Main Content -->
    <main class="container">
        <section class="search-section">
            <h1>Welcome to 500+ Free Tools</h1>
            <input type="text" id="search" placeholder="Search Tools..." oninput="filterTools()">
        </section>

        <section class="tools-section">
            <div class="tool">
                <h2>Tool 1 - Uppercase Maker</h2>
                <p>A simple tool to convert text to uppercase.</p>
                <a href="tools/uppercase-maker/index.php" class="btn">Try Tool</a>
            </div>

            <div class="tool">
                <h2>Tool 2 - Lowercase Maker</h2>
                <p>Convert text to lowercase effortlessly.</p>
                <a href="tools/lowercase-maker/index.php" class="btn">Try Tool</a>
            </div>

            <!-- More tools can be added similarly -->
        </section>
    </main>

    <!-- Footer Section (dynamically included from footer.php) -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript Files (for dynamic functionality like search) -->
    <script src="script.js"></script>
</body>
</html>

<script>
  function filterTools() {
    const searchInput = document.getElementById('search').value.toLowerCase();
    const tools = document.querySelectorAll('.tool');
    
    tools.forEach(tool => {
        const toolTitle = tool.querySelector('h2').textContent.toLowerCase();
        if (toolTitle.includes(searchInput)) {
            tool.style.display = 'block';
        } else {
            tool.style.display = 'none';
        }
    });
}

</script>
