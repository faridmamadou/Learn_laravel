<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            padding: 20px;
        }

        .product-card h3 {
            margin-bottom: 10px;
        }

        .product-card p {
            margin-bottom: 20px;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-container input[type=text] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 60%;
            margin-right: 10px;
        }

        .search-container button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .search-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="search-container">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="search" placeholder="Search..." style="width: 70%">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div>
            @foreach ( $articles as $article)
                <div class="product-card" style="width: 100%">
                    <h3>{{ $article->name }}</h3>
                    <p>Description: {{ $article->description }}</p>
                    <p>Price: {{ $article->price }} FCFA</p>

                    <form method="POST" action="{{ route('basket') }}">
                        @csrf
                        <input type="hidden" name="name" value="{{ $article->name }}">
                        <input type="hidden" name="price" value="{{ $article->price }}">
                        <button type="submit" onclick=popup()>Add to Cart</button>
                    </form>
                </div>
            @endforeach
        </div>
        
        <button><a href={{ route('showBasket')}}>Afficher le panier</a></button>
        
    </div>
    <script>
        function popup() {
            alert('Article ajouté au panier avec succès !')
        }
    </script>
</body>
</html>
