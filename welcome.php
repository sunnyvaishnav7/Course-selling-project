<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Course Information</title>
    <link rel="stylesheet" href="welcome-style.css">
</head>
<body>

<header>
    <h1>Welcome to Our Company Courses</h1>
    <p>Explore our wide range of courses and start learning today!</p>
</header>

<div class="container">
    <section class="courses">
        <h2>Our Courses</h2>
        <div class="course-list">
            <div class="course-item">
                <h3>Web Development</h3>
                <p>Learn HTML, CSS, JavaScript, and more!</p>
                <p><strong>Price:</strong>500</p>
            </div>
            <div class="course-item">
                <h3>Data Science</h3>
                <p>Master Python, Machine Learning, and Data Analysis!</p>
                <p><strong>Price:</strong> 800</p>
            </div>
            <div class="course-item">
                <h3>Digital Marketing</h3>
                <p>Become an expert in SEO, SEM, and Social Media Marketing!</p>
                <p><strong>Price:</strong>600</p>
            </div>
        </div>
    </section>

    <section class="pricing">
        <h2>Pricing Details</h2>
        <div class="price">
            <p><strong>Base Price:</strong> 500</p>
           
                <p><strong>Discount:</strong>%</p>
                <p><strong>Price after Discount:</strong> </p>
           
                <p><strong>No Discount Applied</strong></p>
        </div>
        <div class="discount-code">
            <form method="POST">
                <input type="text" name="discount_code" placeholder="Enter Discount Code" />
                <button type="submit">Apply Discount</button>
            </form>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2024 Company Name. All Rights Reserved.</p>
</footer>
<script src="welcome-js.js"></script>

</body>
</html>
