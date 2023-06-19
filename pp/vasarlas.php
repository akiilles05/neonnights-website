
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NeonNights Támogatási Oldal</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style/vasarlas.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="../index.html">NeonNights RolePlay</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Kezdőlap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Prémium Pont vásárlása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Szabályzat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Frakciók</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="image-container">
                <img src="images/vasarlas.png" alt="NeonNights RolePlay">
            </div>

            <h1 class="title">Támogatási Oldal</h1>
        </div>

        <div class="container ppbolt">
            <div class="row">
                <div div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">1.000 PP</h5>
                            <p class="card-text">
                                <div class="logo">
                                    <img src="images/pp.png" class="rounded mx-auto d-block" name="item_photo">
                                </div>
                            </p>
                            <form action="szamlazasi_adatok.php" method="post">
                                <input type="hidden" name="item_name" value="1000">
                                <input type="hidden" name="item_description" value="Barion fizetés">

                                <button class="Btn rounded mx-auto d-block">
                                    <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                                    Fizetés
                                </button>
                            </form>
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">5.000 PP</h5>
                            <p class="card-text">
                                <div class="logo">
                                    <img src="images/pp.png" class="rounded mx-auto d-block">
                                </div>
                            </p>
                            <form action="barion.php" method="post">
                                <input type="hidden" name="item_name" value="5000">
                                <input type="hidden" name="item_description" value="Barion fizetés">
                                
                                <button class="Btn rounded mx-auto d-block">
                                    <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                                    Fizetés
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">10.000 PP</h5>
                            <p class="card-text">
                                <div class="logo">
                                    <img src="images/pp.png" class="rounded mx-auto d-block">
                                </div>
                            </p>
                            <form action="barion.php" method="post">
                                <input type="hidden" name="item_name" value="10000">
                                <input type="hidden" name="item_description" value="Barion fizetés">
                                
                                <button class="Btn rounded mx-auto d-block">
                                    <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                                    Fizetés
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">15.000 PP</h5>
                            <p class="card-text">
                                <div class="logo">
                                    <img src="images/pp.png" class="rounded mx-auto d-block">
                                </div>
                            </p>
                            <form action="barion.php" method="post">
                                <input type="hidden" name="item_name" value="15000">
                                <input type="hidden" name="item_description" value="Barion fizetés">
                                
                                <button class="Btn rounded mx-auto d-block">
                                    <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                                    Fizetés
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">20.000 PP</h5>
                            <p class="card-text">
                                <div class="logo">
                                    <img src="images/pp.png" class="rounded mx-auto d-block">
                                </div>
                            </p>
                            <form action="barion.php" method="post">
                                <input type="hidden" name="item_name" value="20000">
                                <input type="hidden" name="item_description" value="Barion fizetés">
                                
                                <button class="Btn rounded mx-auto d-block">
                                    <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                                    Fizetés
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- !Footer  -->

        <footer class="text-center text-lg-start bg-white text-muted">

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="me-3 text-secondary"></i>NeonNights RolePlay
                        </h6>
                        <p>
                            Köszönjük Szépen hogy megláttogattad a NeonNights RolePlay weboldalát!
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Gyors linkek
                        </h6>
                        <p>
                            <a href="vasarlas.php" class="text-reset">PrémiumPont Vásárlás</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Szabályzat</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Általános Szerződési Feltételek</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Kapcsolat</h6>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            neonnights@illeisnnovate.hu
                        </p>

                        <a href="https://www.facebook.com/profile.php?id=100092684465802" class="me-4 link-secondary icon-footer">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.tiktok.com/@neonnightsrp" class="me-4 link-secondary icon-footer">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->


            <!-- Copyright -->
            <div class="g-col-6 g-col-md-4"> <img src="../css/image/barion.png"></div>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                © 2023 Copyright:
                <a class="text-reset fw-bold" href="https://neonnights.illesinnovate.com/">HUN NeonNights RolePlay</a>
            </div>
            <!-- Copyright -->
        </footer>

        <script>
    var cartItems = [];

    function addToCart(itemName) {
        cartItems.push(itemName);
        updateCartItemCount();
    }

    function updateCartItemCount() {
        var itemCount = cartItems.length;
        document.getElementById("cart-item-count").innerHTML = itemCount;
    }

    function openCart() {
        var cartContent = document.getElementById("cart-content");
        cartContent.classList.toggle("hidden");
        renderCartItems();
    }

    function renderCartItems() {
        var cartItemsContainer = document.getElementById("cart-items");
        cartItemsContainer.innerHTML = "";

        for (var i = 0; i < cartItems.length; i++) {
            var itemDiv = document.createElement("div");
            itemDiv.innerHTML = "Termék: " + cartItems[i];
            cartItemsContainer.appendChild(itemDiv);
        }
    }

    function checkout() {
        // Fizetési logika itt
        alert("Fizetési folyamat elindítva!");
    }
</script>

        <script src="https://www.paypal.com/sdk/js?client-id=AQR-fiE4qPiNXTAf8WLbLTlyS9UO8HY1A0mHM8Gv2uuCPbkxkAnXLU4zEoclEUf0r17z9kX1gozNBJ-z&currency=HUF"></script>

        <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS4Qzo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>