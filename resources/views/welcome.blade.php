<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
           body{
            background-color: #edf1f5;
            margin-top:20px;
            }
        .card {
            margin-bottom: 30px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }
        .card .card-subtitle {
            font-weight: 300;
            margin-bottom: 10px;
            color: #8898aa;
        }
        .table-product.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f8fa!important
        }
        .table-product td{
            border-top: 0px solid #dee2e6 !important;
            color: #728299!important;
        } 
        </style>

        <title>Articulo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{session('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Iphone 13 PRO</h3>
                    <h6 class="card-subtitle">Apple <i class="fab fa-apple"></i></h6>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="white-box text-center"><img src="https://cdn.tmobile.com/content/dam/t-mobile/en-p/cell-phones/apple/Apple-iPhone-13/Pink/Apple-iPhone-13-Pink-frontimage.png" class="img-responsive" style="width: 400px"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <h4 class="box-title mt-5">Descripcion</h4>
                            <p>Lorem Ipsum available,but the majority have suffered alteration in some form,by injected humour,or randomised words which don't look even slightly believable.but the majority have suffered alteration in some form,by injected humour</p>
                            <h2 class="mt-5">
                                $159<small class="text-success">(36%off)</small>
                            </h2>
                            <button disabled class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <a class="btn btn-primary btn-rounded" href="{{route('paypalll')}}">Comprar con PayPal <i class="fab fa-paypal"></i></a>
                            <h3 class="box-title mt-5">Key Highlights</h3>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                                <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                                <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li>
                            </ul>
                            
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="box-title mt-5">General Info</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-product">
                                    <tbody>
                                        <tr>
                                            <td width="390">Brand</td>
                                            <td>Stellar</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery Condition</td>
                                            <td>Knock Down</td>
                                        </tr>
                                        <tr>
                                            <td>Seat Lock Included</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Office Chair</td>
                                        </tr>
                                        <tr>
                                            <td>Style</td>
                                            <td>Contemporary&amp;Modern</td>
                                        </tr>
                                        <tr>
                                            <td>Wheels Included</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Upholstery Included</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Upholstery Type</td>
                                            <td>Cushion</td>
                                        </tr>
                                        <tr>
                                            <td>Head Support</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Suitable For</td>
                                            <td>Study&amp;Home Office</td>
                                        </tr>
                                        <tr>
                                            <td>Adjustable Height</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Model Number</td>
                                            <td>F01020701-00HT744A06</td>
                                        </tr>
                                        <tr>
                                            <td>Armrest Included</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Care Instructions</td>
                                            <td>Handle With Care,Keep In Dry Place,Do Not Apply Any Chemical For Cleaning.</td>
                                        </tr>
                                        <tr>
                                            <td>Finish Type</td>
                                            <td>Matte</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <iframe width="1080" height="526" src="https://www.youtube.com/embed/XKfgdkcIUxw?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
