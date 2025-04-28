<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <title>Shop by Brands</title>
    <style>
        body {
            font-family: "Amazon Ember", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .brands-section {
            text-align: center;
            padding: 10px 20px;
        }

        .brands-section h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .brands-container {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            gap: 20px;
            overflow-x: auto;
            padding: 20px 0;
        }

        .brand {
            
            padding: 20px;
            width: 138px;
            text-align: center;
            
            transition: transform 0.2s;
            flex: 0 0 auto;
        }

        .brand img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .brand p {
            margin: 15px 0 0;
            font-size: 1.2em;
            color: #555;
        }

        .brand:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="brands-section">
        <h1>Shop by Brands</h1>
        <div class="brands-container">
            <div class="brand">
                <a href="search.php?query=Apple">
                    <img src="https://suprememobiles.in/cdn/shop/files/apple.webp?v=1741090509&width=360" alt="Apple">
                    <p>Apple</p>
                </a>
            </div>
            <div class="brand">
                <a href="search.php?query=Samsung">
                    <img src="https://suprememobiles.in/cdn/shop/files/samsung_mobiles.webp?v=1741090565&width=360" alt="Samsung">
                    <p>Samsung</p>
                </a>
            </div>
            <div class="brand">
                <a href="search.php?query=Oppo">
                    <img src="https://suprememobiles.in/cdn/shop/files/oppo_mobiles.webp?v=1741090611&width=360" alt="Oppo">
                    <p>Oppo</p>
                </a>
            </div>
            <div class="brand">
                <a href="search.php?query=Vivo">
                    <img src="https://suprememobiles.in/cdn/shop/files/vivo_mobiles.webp?v=1741090662&width=360" alt="Vivo">
                    <p>Vivo</p>
                </a>
            </div>
            <div class="brand">
                <a href="search.php?query=Redmi">
                    <img src="https://suprememobiles.in/cdn/shop/files/xiaomi_mobiles_9443b14e-70fe-4940-919e-9c89e16c6b1c.webp?v=1741090712&width=360" alt="Redmi">
                    <p>Redmi</p>
                </a>
            </div>
            <div class="brand">
                <a href="search.php?query=Realme">
                    <img src="https://suprememobiles.in/cdn/shop/files/Realme_mobiles.webp?v=1741090791&width=360" alt="Realme">
                    <p>Realme</p>
                </a>
            </div>
            <div class="brand">
                <a href="search.php?query=OnePlus">
                    <img src="https://suprememobiles.in/cdn/shop/files/oneplus_mobiles.webp?v=1741090835&width=360" alt="OnePlus">
                    <p>OnePlus</p>
                </a>
            </div>
        </div>
    </div>

</body>

</html>