<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourCreate | Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>
    <?php include '../layouts/navbar.php'; ?>
    <div class="container-xl">
        <section class="product">
            <h2>Detail Products</h2>
            <div class="card border-0 shadow p-1">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../assets/img/s.png" class="img-fluid rounded mb-3 slide" alt="...">
                                <div class="item d-flex justify-content-between">
                                    <img src="../assets/img/s.png" class="img-fluid rounded" alt="foto1" height="50"
                                        width="100" onclick="img('../assets/img/s.png')">
                                    <img src="../assets/img/s1.png" class="img-fluid rounded" alt="foto1" height="50"
                                        width="100" onclick="img('../assets/img/s1.png')">
                                    <img src="../assets/img/s1.png" class="img-fluid rounded" alt="foto1" height="50"
                                        width="100" onclick="img('../assets/img/s1.png')">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="name">
                                    Custom web design | Modern Website
                                </h3>
                                <div class="rate">
                                    <span><i class="fa-solid fa-star" style="color: #FFD43B;"></i> 5.0 |</span>
                                    <span>200 Sold |</span>
                                    <span>102 Rating</span>
                                </div>
                                <div class="price mt-4">
                                    <h1>RP ***.***.**</h1>
                                </div>
                                <div class="row type mt-4 mb-5">
                                    <div class="col-md-4">
                                        <h4>Variant Of Product</h4>
                                    </div>
                                    <div class="col-md-8 d-flex flex-wrap">
                                        <a class="btn-varian" href="">Website Personal</a>
                                        <a class="btn-varian" href="">Website Personal</a>
                                        <a class="btn-varian" href="">Website Personal</a>
                                        <a class="btn-varian" href="">Website Personal</a>
                                        <a class="btn-varian" href="">Website Personal</a>
                                    </div>

                                </div>
                                <div class="qty mb-5">
                                    <h4>Quantity</h4>
                                    <div class="quantity-wrap">
                                        <button class="decrement-btn">-</button>
                                        <input type="text" class="quantity-input" value="1">
                                        <button class="increment-btn">+</button>
                                    </div>
                                </div>
                                <div class="button text-center">
                                    <a class="me-2 btn btn-cart" href="" role="button">Add to Cart</a>
                                    <a class="me-2 btn btn-buy" href="" role="button">Buy Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="detail">
            <div class="row">
                <div class="col-md-6">
                    <div class="desc">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <h3 class="mt-3 rev">Product Description</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend vitae ex sit
                                    amet
                                    mollis. Duis ullamcorper et turpis sit amet tempus. Vestibulum congue viverra nulla,
                                    non
                                    lobortis nunc mattis ac. Donec suscipit tortor vel varius convallis. Vestibulum a
                                    nunc leo.
                                    Quisque varius diam vitae nisl tincidunt sollicitudin. Etiam rutrum enim laoreet
                                    condimentum
                                    auctor. Maecenas sit amet molestie massa. Curabitur molestie nibh tempor, dignissim
                                    mauris
                                    quis, laoreet diam.
                                    Nullam eu risus
                                    bibendum, rhoncus
                                    nisl eu, condimentum
                                    Cras at volutpat
                                    metus. Nulla facilisi
                                    Nullam leo mauris, vehicula id sapien vitae, pharetra viverra tellus. Sed nec tortor
                                    pretium, malesuada enim in, efficitur tortor.
                                    Donec dapibus sollicitudin nisi, in pellentesque tortor tincidunt et. Nunc malesuada
                                    commodo
                                    ex eget varius. Fusce a velit mollis diam gravida sagittis. Vivamus non odio id
                                    tellus
                                    hendrerit venenatis pellentesque sed odio. Proin id lorem eget risus dictum
                                    tristique quis
                                    nec quam. In ut erat sit amet risus eleifend lacinia. Duis sit amet est nec augue
                                    fermentum
                                    volutpat. Duis sem nisi, molestie id faucibus sagittis, dapibus in enim. Morbi
                                    imperdiet
                                    convallis tincidunt. Pellentesque egestas finibus ipsum, in accumsan tortor eleifend
                                    et.
                                    Maecenas ante ipsum, aliquet in orci sed, dignissim dictum felis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="desc">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="card p-3 items border-0">
                                    <h3 class="rev">Product Review</h3>
                                    <p>
                                    <div class="product-review">
                                        <a href="" class="text-decoration-none">
                                            <div class="star-wrap">
                                                <p class="card-text text-dark fw-normal">5<i class="fa-solid fa-star"
                                                        style="color:#ffc800;"></i></p>
                                            </div>
                                        </a>
                                        <a href="" class="text-decoration-none">
                                            <div class="star-wrap">
                                                <p class="card-text text-dark fw-normal">4<i class="fa-solid fa-star"
                                                        style="color:#ffc800;"></i></p>
                                            </div>
                                        </a>
                                        <a href="" class="text-decoration-none">
                                            <div class="star-wrap">
                                                <p class="card-text text-dark fw-normal">3<i class="fa-solid fa-star"
                                                        style="color:#ffc800;"></i></p>
                                            </div>
                                        </a>
                                        <a href="" class="text-decoration-none">
                                            <div class="star-wrap">
                                                <p class="card-text text-dark fw-normal">2<i class="fa-solid fa-star"
                                                        style="color:#ffc800;"></i></p>
                                            </div>
                                        </a>
                                        <a href="" class="text-decoration-none">
                                            <div class="star-wrap">
                                                <p class="card-text text-dark fw-normal">1<i class="fa-solid fa-star"
                                                        style="color:#ffc800;"></i></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <p class="review-body">
                                    Nullam leo mauris, vehicula id sapien vitae, pharetra viverra tellus. Sed nec
                                    tortor pretium, malesuada enim in, efficitur tortor.
                                </p>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </section>
        <section class="recomendation">
            <h3>More like that</h3>
            <div class="recom-container d-flex flex-wrap">
                <a href="#" class="text-decoration-none product-card">
                    <div class="card mb-4 border-0 shadow" style="width: 200px;">
                        <img src="../assets/img/mesin.png" class="card-img-top" alt="product"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <p class="card-text text-dark fw-normal my-0">Product Name</p>
                            <p class="card-text text-dark fw-bold my-0">Rp 20.000.000</p>
                            <p class="card-text text-dark fw-normal"><i class="fa-solid fa-star"
                                    style="color: #FFD43B;"></i></p>
                        </div>
                    </div>
                </a>
                <a href="#" class="text-decoration-none product-card">
                    <div class="card mb-4 border-0 shadow" style="width: 200px;">
                        <img src="../assets/img/mesin.png" class="card-img-top" alt="product"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <p class="card-text text-dark fw-normal my-0">Product Name</p>
                            <p class="card-text text-dark fw-bold my-0">Rp 20.000.000</p>
                            <p class="card-text text-dark fw-normal"><i class="fa-solid fa-star"
                                    style="color: #FFD43B;"></i></p>
                        </div>
                    </div>
                </a>
                <a href="#" class="text-decoration-none product-card">
                    <div class="card mb-4 border-0 shadow" style="width: 200px;">
                        <img src="../assets/img/mesin.png" class="card-img-top" alt="product"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <p class="card-text text-dark fw-normal my-0">Product Name</p>
                            <p class="card-text text-dark fw-bold my-0">Rp 20.000.000</p>
                            <p class="card-text text-dark fw-normal"><i class="fa-solid fa-star"
                                    style="color: #FFD43B;"></i></p>
                        </div>
                    </div>
                </a>
                <a href="#" class="text-decoration-none product-card">
                    <div class="card mb-4 border-0 shadow" style="width: 200px;">
                        <img src="../assets/img/mesin.png" class="card-img-top" alt="product"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <p class="card-text text-dark fw-normal my-0">Product Name</p>
                            <p class="card-text text-dark fw-bold my-0">Rp 20.000.000</p>
                            <p class="card-text text-dark fw-normal"><i class="fa-solid fa-star"
                                    style="color: #FFD43B;"></i></p>
                        </div>
                    </div>
                </a>
                <a href="#" class="text-decoration-none product-card">
                    <div class="card mb-4 border-0 shadow" style="width: 200px;">
                        <img src="../assets/img/mesin.png" class="card-img-top" alt="product"
                            style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                            <p class="card-text text-dark fw-normal my-0">Product Name</p>
                            <p class="card-text text-dark fw-bold my-0">Rp 20.000.000</p>
                            <p class="card-text text-dark fw-normal"><i class="fa-solid fa-star"
                                    style="color: #FFD43B;"></i></p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>
    <?php include '../layouts/footer.php';?>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');

body {
    margin: 0;
    padding: 0;
    font-family: League Spartan;
}

section {
    padding-top: 6rem;
}

.rate {
    font-weight: 300;
    font-size: 22px;
}

.price h1 {
    font-weight: 600;
    font-size: 40px;
}

.name {
    font-weight: 600;
    font-size: 32px;
}

h2,
.recomendation h3 {
    font-weight: 400;
    font-size: 35px;

}

h4 {
    font-weight: 300;
    font-size: 24px;
}


.detail {
    padding-top: 3rem;
}

.slide {
    transition: opacity 0.4s ease-in-out;
}

.btn-varian {
    background-color: transparent;
    border: 1px solid #000;
    border-radius: 5px;
    color: #000;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    margin: 5px;
    font-size: 17px;
    font-weight: 300;
}

.btn-varian:active {
    border: 1px solid #FFD43B;
    color: #FFD43B;
}

.qty {
    display: flex;
    align-items: center;
}

.qty h4 {
    margin-right: 10px;
}

.quantity-wrap {
    display: flex;
    align-items: center;
    border: 1px solid black;
    width: 100px;
    border-radius: 5px;
}

.quantity-input {
    width: 30px;
    border: 0;
    text-align: center;
    color: #FFD43B;
    font-size: 20px;
}

.decrement-btn,
.increment-btn {
    width: 30px;
    height: 30px;
    cursor: pointer;
    border: 0px;
    margin: 2px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    background-color: transparent;
    border-radius: 3px;
}

.decrement-btn:hover,
.increment-btn:hover {
    background-color: #e0e0e0;
}

.btn.btn-cart {
    border: 1px solid #FFD43B;
    color: #FFD43B;
    background-color: transparent;
    font-size: 20px;
    font-weight: 400;
}

.btn.btn-cart:active {
    transform: translateY(1px);
}

.btn.btn-cart:hover {
    border: 1px solid #FFD43B;
    color: #FFD43B;
}

.btn.btn-buy {
    border: 1px solid #EFAC13;
    color: #FFFFFF;
    background-color: #EFAC13;
    font-size: 20px;
    font-weight: 400;
}

.btn.btn-buy:active {
    transform: translateY(1px);
}

.btn.btn-buy:hover {
    border: 1px solid #EFAC13;
    color: #FFFFFF;
    background-color: #EFAC13;
}

.detail h3 .rev {
    font-size: 20px;
    font-weight: 500;
}

p {
    font-weight: 300;
    font-size: 16px;
}

.product-review {
    display: inline-flex;
    gap: 10px;
}

.card .items {
    background-color: #f8e1b9;
}

.star-wrap {
    display: flex;
    align-items: center;
    border: 1px solid black;
    width: 38px;
    height: 38px;
    border-radius: 5px;
    justify-content: center;
}

.card-img {
    flex: 0 0 25%;
    width: 16.9rem;
    margin: 2px;
    display: inline-flex;
}

.card-container {
    width: 100%;
}

.product-card {
    margin: 10px;
}

.card-text {
    font-size: 18px;
    font-weight: 300;
}

.recom-container {
    width: 100%;
    margin-top: 20px;
    gap: 4px;
}

.recomendation {
    display: flex;
    flex-wrap: wrap;
    padding-top: 3rem;
}
</style>
<script>
//fungsi gambar
function img(anything) {
    const slide = document.querySelector('.slide');
    slide.style.opacity = '0';
    setTimeout(function() {
        slide.src = anything;
        slide.style.opacity = '1';
    }, 150);
}

function change(change) {
    const line = document.querySelector('.home');
    line.style.background = change;
}
//end

//fungsi tambah kurang
document.addEventListener('DOMContentLoaded', function() {
    const decrementBtn = document.querySelector('.decrement-btn');
    const incrementBtn = document.querySelector('.increment-btn');
    const quantityInput = document.querySelector('.quantity-input');

    decrementBtn.addEventListener('click', function() {
        const currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    incrementBtn.addEventListener('click', function() {
        const currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
});
//end
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>