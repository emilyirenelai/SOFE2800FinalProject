<!-- Menu page-->
<?php 
  include_once 'header.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Include p5.js library-->
    <script src="p5.js"></script>
    <title>M E N U · k a f f a</title>
    <!-- Bootstrap Framework CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="menuStyle.css">

    <!-- import the webpage's JavaScript file -->
    <div class="headAnim">
      <script src="animations.js" defer></script>
    </div>
    
    <!-- import p5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
    <script src="https://cdn.JsDelivr.net/gh/bmoren/p5.collide2D/p5.collide2d.min.js"></script>

  </head>
  <body>
    
    <header>

    </header>

    <main>

      <section class="py-5 text-center container" id="animBack">
        <div class="row py-lg-5" id="topBack">
          <div class="col-lg-6 col-md-8 mx-auto">
        
            <h1 id="lightText">M E N U</h1>
            <p  id="descText">Our selection of only the finest beverages and foods.</p>

          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">     
      
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="backZone">
            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/01_BC.png" onmouseenter="this.src ='menuimg/01_Brewed_Coffee.gif';" onmouseout="this.src = 'menuimg/01_BC.png';" alt="Brewed Coffee">
                <div class="card-body" id = "blockone">
                  <p class="card-text">Brewed Coffee</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="submit" class="btn btn-sm btn-outline-secondary" id="coffeeOrder" data-bs-toggle="modal" data-bs-target="#orderCF">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#brewCoffeeModal" >Info</button>
                    </div>
                    <small class="text-muted">$1.50</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/02_L.png" onmouseenter="this.src ='menuimg/02_Latte.gif';" onmouseout="this.src = 'menuimg/02_L.png';" alt="Latte">
                <div class="card-body" id = "blocktwo">
                  <p class="card-text">Latte</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="latteOrder" data-bs-toggle="modal" data-bs-target="#orderLT">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#latteModal">Info</button>
                    </div>
                    <small class="text-muted">$3.50</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/03_C.png" onmouseenter="this.src ='menuimg/03_Cappucino.gif';" onmouseout="this.src = 'menuimg/03_C.png';" alt="Cappucino">
                <div class="card-body" id = "blockone">
                  <p class="card-text">Cappucino</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="cappOrder" data-bs-toggle="modal" data-bs-target="#orderCP">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cappModal">Info</button>
                    </div>
                    <small class="text-muted">$3.50</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/04_A.png" onmouseenter="this.src ='menuimg/04_Americano.gif';" onmouseout="this.src = 'menuimg/04_A.png';" alt="Americano">
                <div class="card-body" id = "blocktwo">
                  <p class="card-text">Americano</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="amerOrder" data-bs-toggle="modal" data-bs-target="#orderA">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#amerModal">Info</button>
                    </div>
                    <small class="text-muted">$3.50</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/05_HC.png" onmouseenter="this.src ='menuimg/05_Hot_Chocolate.gif';" onmouseout="this.src = 'menuimg/05_HC.png';" alt="Hot Chocolate">
                <div class="card-body" id = "blockone">
                  <p class="card-text">Hot Chocolate</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="hotchocOrder" data-bs-toggle="modal" data-bs-target="#orderHC">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#hotchocModal">Info</button>
                    </div>
                    <small class="text-muted">$2.50</small>
                  </div>
                </div>
              </div>
              </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/06_L.png" onmouseenter="this.src ='menuimg/06_Lemonade.gif';" onmouseout="this.src = 'menuimg/06_L.png';" alt="Lemonade">
                <div class="card-body" id = "blocktwo">
                  <p class="card-text">Lemonade</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="lemonOrder" data-bs-toggle="modal" data-bs-target="#orderL">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#lemonModal">Info</button>
                    </div>
                    <small class="text-muted">$2.00</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/07_ST.png" onmouseenter="this.src ='menuimg/07_Steeped_Tea.gif';" onmouseout="this.src = 'menuimg/07_ST.png';" alt="Steeped Tea">
                <div class="card-body" id = "blockone">
                  <p class="card-text">Steeped Tea</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="teaOrder" data-bs-toggle="modal" data-bs-target="#orderST">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#teaModal">Info</button>
                    </div>
                    <small class="text-muted">$1.50</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" id = "blocktwo">
                <img src="menuimg/08_C.png" onmouseenter="this.src ='menuimg/08_Croissant.gif';" onmouseout="this.src = 'menuimg/08_C.png';" alt="Croissant">
                <div class="card-body">
                  <p class="card-text">Croissant</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="croisOrder" id="teaOrder" data-bs-toggle="modal" data-bs-target="#orderCS">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#croisModal">Info</button>
                    </div>
                    <small class="text-muted">$2.00</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="menuimg/09_M.png" onmouseenter="this.src ='menuimg/09_Muffin.gif';" onmouseout="this.src = 'menuimg/09_M.png';" alt="Muffin">
                <div class="card-body" id = "blockone">
                  <p class="card-text">Muffin</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" id="muffOrder" id="teaOrder" data-bs-toggle="modal" data-bs-target="#orderM">Order</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#muffModal">Info</button>
                    </div>
                    <small class="text-muted">$1.75</small>
                  </div>
                </div>
              </div>
            </div>

            <!-- Order Form for coffee -->

            <div class="modal fade" id="orderLT" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Drinks</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderLT.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label" id="label">Size: </label>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="small" value="S" checked>
                          <label class="form-check-label" for="small">
                            Small
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="medium" value="M">
                          <label class="form-check-label" for="medium">
                            Medium
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="large" value="L">
                          <label class="form-check-label" for="large">
                            Large
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="XL" value="XL">
                          <label class="form-check-label" for="XL">
                            Extra Large
                          </label>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Espresso Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="ES" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Chocolate Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Vanilla Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="VS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Caramel Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CaS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Creamer</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Crm" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Sugar</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Sug" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Order Form for latte -->

            <div class="modal fade" id="orderCF" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Drinks</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderCF.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label" id="label">Size: </label>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="small" value="S" checked>
                          <label class="form-check-label" for="small">
                            Small
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="medium" value="M">
                          <label class="form-check-label" for="medium">
                            Medium
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="large" value="L">
                          <label class="form-check-label" for="large">
                            Large
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="XL" value="XL">
                          <label class="form-check-label" for="XL">
                            Extra Large
                          </label>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Espresso Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="ES" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Chocolate Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Vanilla Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="VS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Caramel Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CaS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Creamer</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Crm" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Sugar</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Sug" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- order form for cup -->

            <div class="modal fade" id="orderCP" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Drinks</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderCP.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label" id="label">Size: </label>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="small" value="S" checked>
                          <label class="form-check-label" for="small">
                            Small
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="medium" value="M">
                          <label class="form-check-label" for="medium">
                            Medium
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="large" value="L">
                          <label class="form-check-label" for="large">
                            Large
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="XL" value="XL">
                          <label class="form-check-label" for="XL">
                            Extra Large
                          </label>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Espresso Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="ES" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Chocolate Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Vanilla Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="VS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Caramel Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CaS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Creamer</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Crm" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Sugar</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Sug" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- Order form for Americano -->
          <div class="modal fade" id="orderA" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Drinks</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderA.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label" id="label">Size: </label>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="small" value="S" checked>
                          <label class="form-check-label" for="small">
                            Small
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="medium" value="M">
                          <label class="form-check-label" for="medium">
                            Medium
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="large" value="L">
                          <label class="form-check-label" for="large">
                            Large
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="XL" value="XL">
                          <label class="form-check-label" for="XL">
                            Extra Large
                          </label>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Espresso Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="ES" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Chocolate Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Vanilla Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="VS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Caramel Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CaS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Creamer</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Crm" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Sugar</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Sug" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- order form for hot choco -->
          <div class="modal fade" id="orderHC" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Drinks</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderHC.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label" id="label">Size: </label>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="small" value="S" checked>
                          <label class="form-check-label" for="small">
                            Small
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="medium" value="M">
                          <label class="form-check-label" for="medium">
                            Medium
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="large" value="L">
                          <label class="form-check-label" for="large">
                            Large
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="XL" value="XL">
                          <label class="form-check-label" for="XL">
                            Extra Large
                          </label>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Espresso Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="ES" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Chocolate Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Vanilla Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="VS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Caramel Shots</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="CaS" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Creamer</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Crm" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Sugar</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="0" value="0" name="Sug" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!--   Order form for lemonade  -->
          
          <div class="modal fade" id="orderL" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Drinks</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderL.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label" id="label">Size: </label>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="small" value="S" checked>
                          <label class="form-check-label" for="small">
                            Small
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="medium" value="M">
                          <label class="form-check-label" for="medium">
                            Medium
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="large" value="L">
                          <label class="form-check-label" for="large">
                            Large
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="XL" value="XL">
                          <label class="form-check-label" for="XL">
                            Extra Large
                          </label>
                        </div>
                        </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Order for Steep Tea -->

            <div class="modal fade" id="orderST" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Drinks</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderST.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label" id="label">Size: </label>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="small" value="S" checked>
                          <label class="form-check-label" for="small">
                            Small
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="medium" value="M">
                          <label class="form-check-label" for="medium">
                            Medium
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="large" value="L">
                          <label class="form-check-label" for="large">
                            Large
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="size" id="XL" value="XL">
                          <label class="form-check-label" for="XL">
                            Extra Large
                          </label>
                        </div>
                        </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          <!--  Order form for Croissant  -->

          <div class="modal fade" id="orderCS" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Bakery</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderCS.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Quantity</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="1" value="1" name="Qn" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Order for Muffin --> 

            <div class="modal fade" id="orderM" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Bakery</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/orderM.inc.php" method="post">
                    <legend>Order!</legend>
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-between">
                              <div>
                                <p class="text-dark">Quantity</p>
                              </div>
                              <div class="input-group w-auto justify-content-end align-items-center">
                                <input type="number" step="1" max="9" min="1" value="1" name="Qn" class="quantity-field border-1 text-center w-100">
                              </div>
                          </div>
                        </div>
                    <div class="container">
                        <button type="submit" class="btn btn-outline-dark" data-bs-dismiss="modal" name="order">Order</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Brewed Coffee Info -->
            <div class="modal fade" id="brewCoffeeModal" tabindex="-1" aria-labelledby="brewCoffeeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="brewCoffeeModalLabel">Brewed Coffee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Our brewed coffee is imported fresh from Ethiopia.</p>
                    <p>Customization Options:</p>
                    <ul>
                      <li>Size: Small ($1.50), Medium ($1.75), Large ($2.00), Extra Large ($2.25)</li>
                      <li>Dairy: Cream, 2% Milk, Skim Milk, Almond Milk, Oat Milk</li>
                      <li>Sweeteners: Sugar, Sweetener</li>
                      <li>Espresso Shots (Add $1.00)</li>
                      <li>Flavour Shots (Add $0.25): Chocolate Syrup, Caramel Syrup, Vanilla Syrup</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Latte Info -->
            <div class="modal fade" id="latteModal" tabindex="-1" aria-labelledby="latteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                    <h1 class="modal-title fs-5" id="latteModalLabel">Latte</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                 <div class="modal-body">
                    <p>Our latte is made with fresh Ethiopian coffee and the finest milks.</p>
                   <p>Customization Options:</p>
                    <ul>
                      <li>Size: Small ($3.50), Medium ($3.75), Large ($4.00), Extra Large ($4.25)</li>
                      <li>Dairy: Cream, 2% Milk, Skim Milk, Almond Milk, Oat Milk</li>
                      <li>Sweeteners: Sugar, Sweetener</li>
                      <li>Espresso Shots (Add $1.00)</li>
                      <li>Flavour Shots (Add $0.25): Chocolate Syrup, Caramel Syrup, Vanilla Syrup</li>
                   </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Cappucino Info -->
            <div class="modal fade" id="cappModal" tabindex="-1" aria-labelledby="cappModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cappModalLabel">Cappucino</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                   <p>Our cappucino is made with fresh Ethiopian coffee and the finest milks.</p>
                   <p>Customization Options:</p>
                    <ul>
                      <li>Size: Small ($3.50), Medium ($3.75), Large ($4.00), Extra Large ($4.25)</li>
                      <li>Dairy: Cream, 2% Milk, Skim Milk, Almond Milk, Oat Milk</li>
                      <li>Sweeteners: Sugar, Sweetener</li>
                      <li>Espresso Shots (Add $1.00)</li>
                      <li>Flavour Shots (Add $0.25): Chocolate Syrup, Caramel Syrup, Vanilla Syrup</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Americano Info -->
            <div class="modal fade" id="amerModal" tabindex="-1" aria-labelledby="amerModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="amerModalLabel">Americano</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Our americano is made with fresh espresso.</p>
                    <p>Customization Options:</p>
                    <ul>
                      <li>Size: Small ($3.50), Medium ($3.75), Large ($4.00), Extra Large ($4.25)</li>
                      <li>Dairy: Cream, 2% Milk, Skim Milk, Almond Milk, Oat Milk</li>
                      <li>Sweeteners: Sugar, Sweetener</li>
                      <li>Espresso Shots (Add $1.00)</li>
                      <li>Flavour Shots (Add $0.25): Chocolate Syrup, Caramel Syrup, Vanilla Syrup</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Hot Chocolate Info -->
            <div class="modal fade" id="hotchocModal" tabindex="-1" aria-labelledby="hotchocLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hotchocLabel">Hot Chocolate</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Our hot chocolate is made with fair trade sourced cocoa powder.</p>
                    <p>Customization Options:</p>
                    <ul>
                      <li>Size: Small ($2.50), Medium ($2.75), Large ($3.00), Extra Large ($3.25)</li>
                      <li>Dairy: Cream, 2% Milk, Skim Milk, Almond Milk, Oat Milk</li>
                      <li>Sweeteners: Sugar, Sweetener</li>
                      <li>Espresso Shots (Add $1.00)</li>
                      <li>Flavour Shots (Add $0.25): Chocolate Syrup, Caramel Syrup, Vanilla Syrup</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Lemonade Info -->
            <div class="modal fade" id="lemonModal" tabindex="-1" aria-labelledby="lemonModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="lemonModalLabel">Lemonade</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Our lemonade is made with fresh Italian lemons.</p>
                    <p>Customization Options:</p>
                    <ul>
                      <li>Size: Small ($2.00), Medium ($2.50), Large ($3.00)</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Tea Info -->
            <div class="modal fade" id="teaModal" tabindex="-1" aria-labelledby="teaModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="teaModalLabel">Steeped Tea</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Our tea is freshly steeped.</p>
                    <p>Customization Options:</p>
                    <ul>
                      <li>Size: Small ($1.50), Medium ($1.75), Large ($2.00), Extra Large ($2.25)</li>
                      <li>Dairy: Cream, 2% Milk, Skim Milk, Almond Milk, Oat Milk</li>
                      <li>Sweeteners: Sugar, Sweetener</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popup for Croissant Info -->
            <div class="modal fade" id="croisModal" tabindex="-1" aria-labelledby="croisModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="croisModalLabel">Croissant</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Our croissants are freshly baked in-store.</p>
                    <p>Customization Options:</p>
                    <ul>
                      <li>Type: Plain ($2.00), Chocolate ($2.25)</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>

           <!-- Popup for Muffin Info -->
            <div class="modal fade" id="muffModal" tabindex="-1" aria-labelledby="muffModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="muffModalLabel">Muffin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Our muffins are freshly baked in-store.</p>
                    <p>Customization Options:</p>
                    <ul>
                      <li>Type: Chocolate Chip ($1.75), Blueberry ($1.75), Carrot ($1.75) Raisin Bran ($1.75)</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="topButton">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </main>

<?php 
  if(isset($_GET["error"])){
    if($_GET["error"] == "orderPlaced"){
        echo '<script>alert("Order Placed!")</script>';
    }
  }
  include_once 'footer.php';
?>
